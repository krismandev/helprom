<?php

namespace App\Http\Livewire;

use App\Models\Kader;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class KaderTable extends Component
{
    use WithFileUploads;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $email, $username, $password, $nip, $full_name, $phone, $position, $kader_edit_id, $kader_delete_id;
    public $search = '';
    public function rules()
    {
        if ($this->kader_edit_id !== null) {
            return
                [
                    'nip' => 'unique:kaders,nip,' . $this->kader_edit_id,
                    'full_name' => 'required',
                    'phone' => 'max:14|regex:/^([0-9\s\+]*)$/',
                    'email' => 'required',
                    'username' => 'required',
                    'password' => 'required'
                ];
        } else {
            return
                [
                    'nip' => 'unique:kaders',
                    'full_name' => 'required',
                    'phone' => 'max:14|regex:/^([0-9\s\+]*)$/',
                    'email' => 'required',
                    'username' => 'required',
                    'password' => 'required',
                ];
        }
    }


    //Mengosongkan inputan pada modal
    public function empty()
    {
        $this->nip = null;
        $this->full_name = null;
        $this->phone = null;
        $this->position = null;
        $this->email = null;
        $this->username = null;
        $this->password = null;
        $this->kader_edit_id = null;
        $this->kader_delete_id = null;
        $this->resetErrorBag();
        $this->resetValidation();
    }

    //Custom Errror messages for validation
    protected $messages = [
        // 'nip.required' => 'Nomor identitas wajib diisi !',
        'nip.unique' => 'Nomor identitas telah terdaftar !',
        'full_name.required' => 'Nama lengkap wajib diisi !',
        // 'phone.required' => 'Nomor telepon wajib diisi !',
        'phone.max' => 'Maksimal 14 karakter angka (numeric) !',
        'phone.regex' => 'Harus berupa angka dan boleh menggunakan karakter + !',
        'email.required' => 'Email harus diisi !',
        'username.required' => 'Username harus diisi !',
        'password.required' => 'Password harus diisi !'
    ];

    //Reatime Validation
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $this->validate();
        Kader::create([
            'nip' => $this->nip,
            'full_name' => $this->full_name,
            'date_of_birth' => $this->date_of_birth,
            'gender' => $this->gender,
            'phone' => $this->phone,
            'marriage_status' => $this->marriage_status,
            'address' => $this->address,
            'occupation' => $this->occupation,
            'faculty' => $this->faculty,
            'major' => $this->major,
        ]);
        session()->flash('message', 'Data berhasil ditambahkan !');
        $this->empty();
        $this->dispatchBrowserEvent('close-input-modal');
    }

    //show modal edit
    public function edit($id)
    {
        $patient = Kader::find($id);
        $this->nip = $patient->nip;
        $this->full_name = $patient->full_name;
        $this->date_of_birth = $patient->date_of_birth;
        $this->phone = $patient->phone;
        $this->gender = $patient->gender;
        $this->marriage_status = $patient->marriage_status;
        $this->address = $patient->address;
        $this->occupation = $patient->occupation;
        $this->faculty = $patient->faculty;
        $this->major = $patient->major;
        $this->kader_edit_id = $patient->id;
        $this->dispatchBrowserEvent('show-edit-modal');
    }

    //Update data
    public function update()
    {
        $this->validate();

        Kader::where('id', $this->kader_edit_id)->update([
            'nip' => $this->nip,
            'full_name' => $this->full_name,
            'date_of_birth' => $this->date_of_birth,
            'gender' => $this->gender,
            'phone' => $this->phone,
            'marriage_status' => $this->marriage_status,
            'address' => $this->address,
            'occupation' => $this->occupation,
            'faculty' => $this->faculty,
            'major' => $this->major,
        ]);
        session()->flash('message', 'Data berhasil diedit !');
        $this->empty();
        $this->dispatchBrowserEvent('close-edit-modal');
    }

    //Show modal delete confirmation
    public function deleteConfirmation($id)
    {
        $this->kader_delete_id = Kader::find($id)->id; //tahun_akademik id

        $this->dispatchBrowserEvent('show-delete-confirmation-modal');
    }

    //Delete data
    public function deleteData()
    {
        $patient = Kader::find($this->kader_delete_id);
        try {
            $patient->delete();
            session()->flash('message', 'Data berhasil dihapus');
        } catch (\Throwable $th) {
            session()->flash('error', 'Data gagal dihapus karena digunakan di dalam sistem');
        }
        $this->kader_delete_id = null;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.kader-table', [
            'kaders' => Kader::where('full_name', 'like', '%' . $this->search . '%')->orderBy('full_name', 'asc')->paginate(10),
        ]);
    }
}
