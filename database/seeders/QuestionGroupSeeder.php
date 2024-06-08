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
        // 1
        QuestionGroup::create([
            'group_name' => 'Riwayat Penyakit Keluarga'
        ]);
        // 2
        QuestionGroup::create([
            'group_name' => 'Riwayat Penyakit Pribadi'
        ]);
        // 3
        QuestionGroup::create([
            'group_name' => 'Faktor Risiko'
        ]);
        // 4
        QuestionGroup::create([
            'group_name' => 'Pengukuran Antropometri'
        ]);
        // 5
        QuestionGroup::create([
            'group_name' => 'Pengukuran Gula Darah'
        ]);
        // 6
        QuestionGroup::create([
            'group_name' => 'Pengukuran Kolesteros Darah dan Asam Urat'
        ]);
        // 7
        QuestionGroup::create([
            'group_name' => 'Pemeriksaan Mata'
        ]);
        // 8
        QuestionGroup::create([
            'group_name' => 'Pemeriksaan Telinga'
        ]);
        // 9
        QuestionGroup::create([
            'group_name' => 'Pengukuran Kadar CO Paru'
        ]);
        // 10
        QuestionGroup::create([
            'group_name' => 'IVA Pengukuran'
        ]);
        // 11
        QuestionGroup::create([
            'group_name' => 'Screening Jiwa'
        ]);
    }
}
