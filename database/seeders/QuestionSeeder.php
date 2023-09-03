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
        // END PENYAKIT KELUARGA

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
        //END PENYAKIT PRIBADI

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
        //END FAKTOR RISIKO

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
        // END ANTROPOMETRI

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
        //END KOLESTEROL

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
        //END MATA

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
        // END TELINGA

        // KADAR CO
        Question::create([
            'question' => 'Kadar CO (ppm)',
            'question_group_id' => 9,
            'list_answer_id' => null
        ]);
        // END KADAR CO


        // IVA PENGUKURAN
        Question::create([
            'question' => 'Apakah ibu pernah melakukan pemeriksaan Inspeksi Visual Asam Asetat (IVA)?',
            'question_group_id' => 10,
            'list_answer_id' => 9
        ]);
        Question::create([
            'question' => 'Jika ya, di mana ibu melakukan pemeriksaan IVA?',
            'question_group_id' => 10,
            'list_answer_id' => null
        ]);
        Question::create([
            'question' => 'Kapan ibu melakukan pemeriksaan IVA?',
            'question_group_id' => 10,
            'list_answer_id' => null
        ]);
        // IVA PENGUKURAN

        // SCREENING JIWA
        Question::create([
            'question' => 'Kurang berminat atau bergairah dalam melakukan apapun?',
            'question_group_id' => 11,
            'list_answer_id' => 10
        ]);
        Question::create([
            'question' => 'Merasa murung, sedih, atau putus asa?',
            'question_group_id' => 11,
            'list_answer_id' => 10
        ]);
        Question::create([
            'question' => 'Sulit tidur/mudah terbangun, atau terlalu banyak tidur?',
            'question_group_id' => 11,
            'list_answer_id' => 10
        ]);
        Question::create([
            'question' => 'Merasa lelah atau kurang bertenaga?',
            'question_group_id' => 11,
            'list_answer_id' => 10
        ]);
        Question::create([
            'question' => 'Kurang nafsu makan atau terlalu banyak makan?',
            'question_group_id' => 11,
            'list_answer_id' => 10
        ]);
        Question::create([
            'question' => 'Kurang percaya diri — atau merasa bahwa Anda adalah orang yang gagal atau telah mengecewakan diri sendiri atau keluarga?',
            'question_group_id' => 11,
            'list_answer_id' => 10
        ]);
        Question::create([
            'question' => 'Sulit berkonsentrasi pada sesuatu, misalnya membaca koran atau menonton televisi?',
            'question_group_id' => 11,
            'list_answer_id' => 10
        ]);
        Question::create([
            'question' => 'Bergerak atau berbicara sangat lambat sehingga orang lain memperhatikannya. Atau sebaliknya; merasa resah atau gelisah sehingga Anda lebih sering bergerak dari biasanya?',
            'question_group_id' => 11,
            'list_answer_id' => 10
        ]);
        Question::create([
            'question' => 'Merasa lebih baik mati atau ingin melukai diri sendiri dengan cara apapun?',
            'question_group_id' => 11,
            'list_answer_id' => 10
        ]);
        // END SCREENING JIWA
    }
}
