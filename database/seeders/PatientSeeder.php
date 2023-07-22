<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Patient::create([
            'identity' => 'F1E119095',
            'full_name' => 'Khoirul Anam',
            'date_of_birth' => '2000-10-20',
            'gender' => 'laki-laki',
            'phone' => '085788787427',
            'marriage_status' => 'belum kawin',
            'address' => 'Senawar Jaya, Bayung Lencir',
            'occupation' => 'Mahasiswa',
            'faculty' => 'Sains dan Teknologi',
            'major' => 'Sistem Informasi'
        ]);
    }
}
