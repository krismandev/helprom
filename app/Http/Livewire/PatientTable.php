<?php

namespace App\Http\Livewire;

use App\Models\Patient;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class PatientTable extends Component
{
    use WithFileUploads;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $identity, $full_name, $date_of_birth, $gender, $phone, $marriage_status, $address, $occupation, $faculty, $major, $patient_edit_id, $patient_delete_id;
    public $search = '';
    public function rules()
    {
        if ($this->patient_edit_id !== null) {
            return
                [
                    'identity' => 'required|unique:patients,identity,' . $this->patient_edit_id,
                    'full_name' => 'required',
                    'date_of_birth' => 'required|date',
                    'gender' => 'required|in:laki-laki,perempuan',
                    'phone' => 'required|max:14|regex:/^([0-9\s\+]*)$/',
                    'marriage_status' => 'required|in:kawin,belum kawin,cerai hidup, cerai mati',
                    'address' => 'required',
                    'occupation' => 'required',
                    'faculty' => 'required',
                    'major' => 'required',
                ];
        } else {
            return
                [
                    'identity' => 'required|unique:patients',
                    'full_name' => 'required',
                    'date_of_birth' => 'required|date',
                    'gender' => 'required|in:laki-laki,perempuan',
                    'phone' => 'required|max:14|regex:/^([0-9\s\+]*)$/',
                    'marriage_status' => 'required|in:kawin,belum kawin,cerai hidup, cerai mati',
                    'address' => 'required',
                    'occupation' => 'required',
                    'faculty' => 'required',
                    'major' => 'required',
                ];
        }
    }


    //Mengosongkan inputan pada modal
    public function empty()
    {
        $this->identity = null;
        $this->full_name = null;
        $this->date_of_birth = null;
        $this->phone = null;
        $this->gender = '';
        $this->marriage_status = '';
        $this->address = null;
        $this->occupation = null;
        $this->faculty = null;
        $this->major = null;
        $this->patient_edit_id = null;
        $this->patient_delete_id = null;
        $this->resetErrorBag();
        $this->resetValidation();
    }

    //Custom Errror messages for validation
    protected $messages = [
        'identity.required' => 'Nomor identitas wajib diisi !',
        'identity.unique' => 'Nomor identitas telah terdaftar !',
        'full_name.required' => 'Nama lengkap wajib diisi !',
        'date_of_birth.required' => 'Tanggal lahir wajib diisi !',
        'date_of_birth.date' => 'Tanggal lahir harus format date !',
        'phone.required' => 'Nomor telepon wajib diisi !',
        'phone.max' => 'Maksimal 14 karakter angka (numeric) !',
        'phone.regex' => 'Harus berupa angka dan boleh menggunakan karakter + !',
        'gender.required' => 'Jenis kelamin wajib diisi !',
        'gender.in' => 'Jenis kelamin hanya boleh berisi (laki-laki/perempuan) !',
        'marriage_status.required' => 'Status pernikahan wajib diisi !',
        'marriage_status.in' => 'Status pernikahan hanya boleh berisi (kawin, belum kawin, cerai hidup, cerai mati) !',
        'address.required' => 'Alamat wajib diisi !',
        'occupation.required' => 'Pekerjaan wajib diisi !',
        'faculty.required' => 'Fakultas wajib diisi !',
        'major.required' => 'Program studi wajib diisi !'
    ];

    //Reatime Validation
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $this->validate();
        Patient::create([
            'identity' => $this->identity,
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
        $patient = Patient::find($id);
        $this->identity = $patient->identity;
        $this->full_name = $patient->full_name;
        $this->date_of_birth = $patient->date_of_birth;
        $this->phone = $patient->phone;
        $this->gender = $patient->gender;
        $this->marriage_status = $patient->marriage_status;
        $this->address = $patient->address;
        $this->occupation = $patient->occupation;
        $this->faculty = $patient->faculty;
        $this->major = $patient->major;
        $this->patient_edit_id = $patient->id;
        $this->dispatchBrowserEvent('show-edit-modal');
    }

    //Update data
    public function update()
    {
        $this->validate();

        Patient::where('id', $this->patient_edit_id)->update([
            'identity' => $this->identity,
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
        $this->patient_delete_id = Patient::find($id)->id; //tahun_akademik id

        $this->dispatchBrowserEvent('show-delete-confirmation-modal');
    }

    //Delete data
    public function deleteData()
    {
        $patient = Patient::find($this->patient_delete_id);
        try {
            $patient->delete();
            session()->flash('message', 'Data berhasil dihapus');
        } catch (\Throwable $th) {
            session()->flash('error', 'Data gagal dihapus karena digunakan di dalam sistem');
        }
        $this->patient_delete_id = null;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.patient-table', [
            'patients' => Patient::where('full_name', 'like', '%' . $this->search . '%')->orderBy('full_name', 'asc')->paginate(10),
        ]);
    }
}
