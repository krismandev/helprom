<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Kader;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class KaderTable extends Component
{
    use WithFileUploads;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $email, $password, $nip, $full_name, $phone, $position, $kader_edit_id, $user_edit_id, $kader_delete_id;
    public $search = '', $checkbox = false;
    public function rules()
    {
        if ($this->kader_edit_id !== null) {
            return
                [
                    'nip' => 'numeric|min_digits:18|max_digits:18|unique:kaders,nip,' . $this->kader_edit_id,
                    'full_name' => 'required',
                    'phone' => 'max:14|regex:/^([0-9\s\+]*)$/',
                    'email' => 'required|email:rfc|unique:users,email,' . $this->user_edit_id,
                ];
        } else {
            return
                [
                    'nip' => 'numeric|min_digits:18|max_digits:18|unique:kaders',
                    'full_name' => 'required',
                    'phone' => 'max:14|regex:/^([0-9\s\+]*)$/',
                    'email' => 'required|unique:users|email:rfc',
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
        $this->password = null;
        $this->checkbox = false;
        $this->kader_edit_id = null;
        $this->user_edit_id = null;
        $this->kader_delete_id = null;
        $this->resetErrorBag();
        $this->resetValidation();
    }

    //Custom Errror messages for validation
    protected $messages = [
        // 'nip.required' => 'Nomor identitas wajib diisi !',
        'nip.unique' => 'Nomor identitas telah terdaftar !',
        'nip.min_digits' => 'NIP harus berisi 18 karakter !',
        'nip.max_digits' => 'NIP lebih dari 18 karakter !',
        'nip.numeric' => 'NIP harus merupakan angka !',
        'full_name.required' => 'Nama lengkap wajib diisi !',
        // 'phone.required' => 'Nomor telepon wajib diisi !',
        'phone.max' => 'Maksimal 14 karakter angka (numeric) !',
        'phone.regex' => 'Harus berupa angka dan boleh menggunakan karakter + !',
        'email.required' => 'Email harus diisi !',
        'email.unique' => 'Email telah terdaftar !',
        'email.email' => 'Harus memiliki format email !',
        'password.required' => 'Password harus diisi !'
    ];

    //Reatime Validation
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function defaultPw()
    {
        if ($this->password === null) {
            $this->password = 'helprom2023';
            $this->checkbox = true;
        } else {
            $this->password = null;
            $this->checkbox = false;
        }
    }

    public function save()
    {
        $this->validate([
            'nip' => 'numeric|min_digits:18|max_digits:18|unique:kaders',
            'full_name' => 'required',
            'phone' => 'max:14|regex:/^([0-9\s\+]*)$/',
            'email' => 'required|email:rfc|unique:users',
            'password' => 'required'
        ]);
        $user = User::create([
            'password' => bcrypt($this->password),
            'role' => 'kader',
            'email' => $this->email
        ]);
        Kader::create([
            'nip' => $this->nip,
            'full_name' => $this->full_name,
            'phone' => $this->phone,
            'position' => $this->position,
            'user_id' => $user->id
        ]);
        session()->flash('message', 'Data berhasil ditambahkan !');
        $this->empty();
        $this->dispatchBrowserEvent('close-input-modal');
    }

    //show modal edit
    public function edit($id)
    {
        $kader = Kader::find($id);
        $this->nip = $kader->nip;
        $this->full_name = $kader->full_name;
        $this->phone = $kader->phone;
        $this->position = $kader->position;
        $this->email = $kader->user->email;
        $this->kader_edit_id = $kader->id;
        $this->user_edit_id = $kader->user_id;
        $this->dispatchBrowserEvent('show-edit-modal');
    }

    //Update data
    public function update()
    {
        $this->validate();


        if ($this->password) {
            User::where('id', $this->user_edit_id)->update([
                'email' => $this->email,
                'password' => bcrypt($this->password)
            ]);
        } else {
            User::where('id', $this->user_edit_id)->update([
                'email' => $this->email
            ]);
        }

        Kader::where('id', $this->kader_edit_id)->update([
            'nip' => $this->nip,
            'full_name' => $this->full_name,
            'phone' => $this->phone,
            'position' => $this->position,
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
        $kader = Kader::find($this->kader_delete_id);
        $user = User::find($kader->user_id);
        try {
            $kader->delete();
            $user->delete();
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
            'kader' => Kader::where('full_name', 'like', '%' . $this->search . '%')->orderBy('full_name', 'asc')->paginate(10),
        ]);
    }
}
