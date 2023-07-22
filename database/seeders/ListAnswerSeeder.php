<?php

namespace Database\Seeders;

use App\Models\ListAnswer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ListAnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ListAnswer::create([
            'answers' => ['Ya', 'Tidak', 'Tidak Tahu']
        ]);

        ListAnswer::create([
            'answers' => ['Ya. Tidak setiap hari', 'Tidak', 'Ya. Setiap hari']
        ]);

        ListAnswer::create([
            'answers' => ['Tidak Merokok', '< 20 Bungkus/Tahun', '20-30 Bungkus/Tahun', '>30 Bungkus/Tahun']
        ]);

        ListAnswer::create([
            'answers' => ['Tidak', 'Ya. < 30 menit perhari atau <150 menit perminggu', 'Ya. >= 30 menit perhari atau >=150 menit perminggu']
        ]);

        ListAnswer::create([
            'answers' => ['<6', '6', 'Tidak Diperiksa']
        ]);

        ListAnswer::create([
            'answers' => ['Ya', 'Tidak', 'Tidak Diperiksa']
        ]);


        ListAnswer::create([
            'answers' => ['Normal', 'Tidak Normal', 'Tidak Diperiksa']
        ]);

        ListAnswer::create([
            'answers' => ['Ada', 'Tidak ada', 'Tidak Diperiksa']
        ]);
    }
}
