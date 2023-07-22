<?php

namespace Database\Seeders;

use App\Models\QuestionGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        QuestionGroup::create([
            'group_name' => 'Riwayat Penyakit Keluarga'
        ]);
        QuestionGroup::create([
            'group_name' => 'Riwayat Penyakit Pribadi'
        ]);
        QuestionGroup::create([
            'group_name' => 'Faktor Risiko'
        ]);
        QuestionGroup::create([
            'group_name' => 'Pengukuran Antropometri'
        ]);
        QuestionGroup::create([
            'group_name' => 'Pengukuran Gula Darah'
        ]);
        QuestionGroup::create([
            'group_name' => 'Pengukuran Kolesteros Darah dan Asam Urat'
        ]);
        QuestionGroup::create([
            'group_name' => 'Pemeriksaan Mata'
        ]);
        QuestionGroup::create([
            'group_name' => 'Pemeriksaan Telinga'
        ]);
    }
}
