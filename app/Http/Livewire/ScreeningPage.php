<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Patient;
use App\Models\Question;
use App\Models\QuestionGroup;
use App\Models\Screening;
use App\Models\ScreeningAnswer;
use Livewire\WithPagination;

class ScreeningPage extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $identity, $full_name, $date_of_birth, $gender, $phone, $marriage_status, $address, $occupation, $faculty, $major;
    public $add = false, $edit = false, $form = 0, $patient = '';
    public $questions = [];

    public function mount()
    {
        $quest = Question::all();
        //set deafult presensi menjadi "hadir" untuk setiap siswa
        foreach ($quest as $q) {
            $this->questions[$q->id] = '';
        }
    }
    public function rules()
    {
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
        $this->questions = [];
        // $this->dispatchBrowserEvent('to-top');
        $this->resetPage();
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

    public function add()
    {
        $this->add = true;
        $this->empty();
    }

    public function back()
    {
        $this->empty();
        $this->add = false;
        $this->edit = false;
    }

    //Show modal delete confirmation

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatedPatient()
    {
        if ($this->patient == 'pasien-baru' or $this->patient == '') {
            $this->empty();
        } else {
            $pasien = Patient::find($this->patient);
            $this->identity = $pasien->identity;
            $this->full_name = $pasien->full_name;
            $this->date_of_birth = $pasien->date_of_birth;
            $this->phone = $pasien->phone;
            $this->gender = $pasien->gender;
            $this->marriage_status = $pasien->marriage_status;
            $this->address = $pasien->address;
            $this->occupation = $pasien->occupation;
            $this->faculty = $pasien->faculty;
            $this->major = $pasien->major;
        }
    }

    public function next()
    {
        if ($this->form == 0) {
            if ($this->patient == 'pasien-baru' or $this->patient == '') {
                $this->validate([
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
                ]);
            }
        }
        $this->form = $this->form + 1;

        $this->dispatchBrowserEvent('to-top');
    }

    public function previous()
    {
        $this->form = $this->form - 1;
    }

    public function save()
    {
        if ($this->patient == 'pasien-baru') {
            $pasien =  Patient::create([
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
            $id_patient = $pasien->id;
        } else {
            $id_patient = $this->patient;
        }
        $screening = Screening::create([
            'patient_id' => $id_patient,
        ]);

        foreach ($this->questions as $key => $value) {
            ScreeningAnswer::create([
                'screening_id' => $screening->id,
                'question_id' => $key,
                'answer' => $value
            ]);
        }
        $this->form = 0;
        $this->add = false;
        session()->flash('message', 'Data berhasil ditambahkan !');
        $this->empty();
    }

    public function render()
    {
        return view('livewire.screening-page', [
            'patients' => Patient::all(),
            'screenings' => Screening::paginate(10),
            'questionGroup' => QuestionGroup::with(['questions' => function ($query) {
                $query->with('listAnswer');
            }])->get()->all()
        ]);
    }
}
