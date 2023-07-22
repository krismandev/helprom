<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // PENYAKIT KELUARGA
        Question::create([
            'question' => 'Penyakit Diabetes ?',
            'question_group_id' => 1,
            'list_answer_id' => 1,
        ]);
        Question::create([
            'question' => 'Penyakit Hipertensi ?',
            'question_group_id' => 1,
            'list_answer_id' => 1,
        ]);
        Question::create([
            'question' => 'Penyakit Jantung ?',
            'question_group_id' => 1,
            'list_answer_id' => 1,
        ]);
        Question::create([
            'question' => 'Penyakit Stroke ?',
            'question_group_id' => 1,
            'list_answer_id' => 1,
        ]);
        Question::create([
            'question' => 'Penyakit Kanker ?',
            'question_group_id' => 1,
            'list_answer_id' => 1,
        ]);
        Question::create([
            'question' => 'Penyakit Thalasemia ?',
            'question_group_id' => 1,
            'list_answer_id' => 1,
        ]);

        // Penyakit PRIBADI
        Question::create([
            'question' => 'Penyakit Diabetes ?',
            'question_group_id' => 2,
            'list_answer_id' => 1,
        ]);
        Question::create([
            'question' => 'Penyakit Hipertensi ?',
            'question_group_id' => 2,
            'list_answer_id' => 1,
        ]);
        Question::create([
            'question' => 'Penyakit Jantung ?',
            'question_group_id' => 2,
            'list_answer_id' => 1,
        ]);
        Question::create([
            'question' => 'Penyakit Stroke ?',
            'question_group_id' => 2,
            'list_answer_id' => 1,
        ]);
        Question::create([
            'question' => 'Penyakit Asma ?',
            'question_group_id' => 2,
            'list_answer_id' => 1,
        ]);
        Question::create([
            'question' => 'Penyakit Kolesterol Tinggi ?',
            'question_group_id' => 2,
            'list_answer_id' => 1,
        ]);
        Question::create([
            'question' => 'Penyakit PPOK ?',
            'question_group_id' => 2,
            'list_answer_id' => 1,
        ]);
        Question::create([
            'question' => 'Penyakit Thalasemia ?',
            'question_group_id' => 2,
            'list_answer_id' => 1,
        ]);
        Question::create([
            'question' => 'Penyakit Lupus ?',
            'question_group_id' => 2,
            'list_answer_id' => 1,
        ]);
        Question::create([
            'question' => 'Gangguan Pendengaran ?',
            'question_group_id' => 2,
            'list_answer_id' => 1,
        ]);
        Question::create([
            'question' => 'Gangguan Mental ?',
            'question_group_id' => 2,
            'list_answer_id' => 1,
        ]);
        Question::create([
            'question' => 'Gangguan Emosional ?',
            'question_group_id' => 2,
            'list_answer_id' => 1,
        ]);
        Question::create([
            'question' => 'Disabilitas (Fisik/Netra/Tuli/Intelektual) ?',
            'question_group_id' => 2,
            'list_answer_id' => 1
        ]);

        //FAKTOR RISIKO  
        Question::create([
            'question' => 'Itensitas Merokok',
            'question_group_id' => 3,
            'list_answer_id' => 3
        ]);
        Question::create([
            'question' => 'Apakah peserta menambahkan gula pada makanan/minuman yang dikonsumsi > 4 sendok makan dalam sehari ?',
            'question_group_id' => 3,
            'list_answer_id' => 2
        ]);
        Question::create([
            'question' => 'Apakah peserta menggunakan garam pada makanan yang dikonsumsi > 1 sendok teh dalam sehari ?',
            'question_group_id' => 3,
            'list_answer_id' => 2
        ]);
        Question::create([
            'question' => 'Apakah peserta konsumsi makanan yang diolah dengan minyak/lemak/margarin > 1 sendok makan dalam sehari ?',
            'question_group_id' => 3,
            'list_answer_id' => 2
        ]);
        Question::create([
            'question' => 'Apakah peserta konsumsi makanan yang diolah dengan minyak/lemak/margarin > 5 sendok makan dalam sehari?',
            'question_group_id' => 3,
            'list_answer_id' => 2
        ]);
        Question::create([
            'question' => 'Apakah peserta makan sayur dan atau buah kurang dari 5 porsi sehari ?',
            'question_group_id' => 3,
            'list_answer_id' => 2
        ]);
        Question::create([
            'question' => 'Apakah peserta melakukan aktifitas fisik ?',
            'question_group_id' => 3,
            'list_answer_id' => 4
        ]);
        Question::create([
            'question' => 'Apakah peserta konsumsi alcohol dalam waktu 1 bulan terakhir ?',
            'question_group_id' => 3,
            'list_answer_id' => 2
        ]);

        //ANTROPOMETRI
        Question::create([
            'question' => 'Berat Badan (Kg)',
            'question_group_id' => 4,
            'list_answer_id' => null
        ]);
        Question::create([
            'question' => 'Tinggi Badan (cm)',
            'question_group_id' => 4,
            'list_answer_id' => null
        ]);
        Question::create([
            'question' => 'Lingkar Perut (cm)',
            'question_group_id' => 4,
            'list_answer_id' => null
        ]);
        Question::create([
            'question' => 'Tekanan Darah (mmHg)',
            'question_group_id' => 4,
            'list_answer_id' => null
        ]);
        Question::create([
            'question' => 'Diastole (mmHg)',
            'question_group_id' => 4,
            'list_answer_id' => null
        ]);

        //GULA DARAH
        Question::create([
            'question' => 'Gula darah sewaktu (GDS) (mg/dl)',
            'question_group_id' => 5,
            'list_answer_id' => null
        ]);
        Question::create([
            'question' => 'Gula darah puasa (mg/dl)',
            'question_group_id' => 5,
            'list_answer_id' => null
        ]);
        Question::create([
            'question' => 'Gula darah 2 jam pp (mg/dl)',
            'question_group_id' => 5,
            'list_answer_id' => null
        ]);
        Question::create([
            'question' => 'HbA1C (%)',
            'question_group_id' => 5,
            'list_answer_id' => null
        ]);

        //KOLESTEROL
        Question::create([
            'question' => 'Kolesterol Total (mm/dl)',
            'question_group_id' => 6,
            'list_answer_id' => null
        ]);
        Question::create([
            'question' => 'HDL (mm/dl)',
            'question_group_id' => 6,
            'list_answer_id' => null
        ]);
        Question::create([
            'question' => 'LDL (mm/dl)',
            'question_group_id' => 6,
            'list_answer_id' => null
        ]);
        Question::create([
            'question' => 'Trigliseride (mm/dl)',
            'question_group_id' => 6,
            'list_answer_id' => null
        ]);

        //Mata
        Question::create([
            'question' => 'Visus Mata Kanan',
            'question_group_id' => 7,
            'list_answer_id' => 5
        ]);
        Question::create([
            'question' => 'Katarak Mata Kanan',
            'question_group_id' => 7,
            'list_answer_id' => 6
        ]);
        Question::create([
            'question' => 'Glaukoma Mata Kanan',
            'question_group_id' => 7,
            'list_answer_id' => 6
        ]);
        Question::create([
            'question' => 'Retinopatai Mata Kanan',
            'question_group_id' => 7,
            'list_answer_id' => 6
        ]);
        Question::create([
            'question' => 'Visus Mata Kiri',
            'question_group_id' => 7,
            'list_answer_id' => 5
        ]);
        Question::create([
            'question' => 'Katarak Mata Kiri',
            'question_group_id' => 7,
            'list_answer_id' => 6
        ]);
        Question::create([
            'question' => 'Glaukoma Mata Kiri',
            'question_group_id' => 7,
            'list_answer_id' => 6
        ]);
        Question::create([
            'question' => 'Retinopatai Mata Kiri',
            'question_group_id' => 7,
            'list_answer_id' => 6
        ]);


        //TELINGA

        Question::create([
            'question' => 'Tajam pendengaran telinga kanan',
            'question_group_id' => 8,
            'list_answer_id' => 7
        ]);
        Question::create([
            'question' => 'Presbikus telinga kanan',
            'question_group_id' => 8,
            'list_answer_id' => 8
        ]);
        Question::create([
            'question' => 'Serumen telinga kanan',
            'question_group_id' => 8,
            'list_answer_id' => 8
        ]);
        Question::create([
            'question' => 'Congek/nanah telinga kanan',
            'question_group_id' => 8,
            'list_answer_id' => 8
        ]);

        Question::create([
            'question' => 'Tajam pendengaran telinga kiri',
            'question_group_id' => 8,
            'list_answer_id' => 7
        ]);
        Question::create([
            'question' => 'Presbikus telinga kiri',
            'question_group_id' => 8,
            'list_answer_id' => 8
        ]);
        Question::create([
            'question' => 'Serumen telinga kiri',
            'question_group_id' => 8,
            'list_answer_id' => 8
        ]);
        Question::create([
            'question' => 'Congek/nanah telinga kiri',
            'question_group_id' => 8,
            'list_answer_id' => 8
        ]);
    }
}
