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
        // 1
        ListAnswer::create([
            'answers' => ['Ya', 'Tidak', 'Tidak Tahu']
        ]);

        // 2
        ListAnswer::create([
            'answers' => ['Tidak', 'Ya. Setiap hari', 'Ya. Tidak setiap hari',]
        ]);

        // 3
        ListAnswer::create([
            'answers' => ['Tidak Merokok', '< 20 Bungkus/Tahun', '20-30 Bungkus/Tahun', '>30 Bungkus/Tahun']
        ]);

        // 4
        ListAnswer::create([
            'answers' => ['Tidak', 'Ya. < 30 menit perhari atau <150 menit perminggu', 'Ya. >= 30 menit perhari atau >=150 menit perminggu']
        ]);

        // 5
        ListAnswer::create([
            'answers' => ['<6', '6', 'Tidak Diperiksa']
        ]);

        // 6
        ListAnswer::create([
            'answers' => ['Ya', 'Tidak', 'Tidak Diperiksa']
        ]);

        // 7
        ListAnswer::create([
            'answers' => ['Normal', 'Tidak Normal', 'Tidak Diperiksa']
        ]);

        // 8
        ListAnswer::create([
            'answers' => ['Ada', 'Tidak ada', 'Tidak Diperiksa']
        ]);

        // 9
        ListAnswer::create([
            'answers' => ['Pernah', 'Tidak Pernah', 'Tidak Tahu']
        ]);
        // 10
        ListAnswer::create([
            'answers' => ['Tidak Pernah', 'Beberapa Hari', 'Lebih dari separuh waktu yang dimaksud', 'Hampir Setiap Hari']
        ]);
    }
}
