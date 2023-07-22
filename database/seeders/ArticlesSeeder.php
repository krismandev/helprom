<?php

namespace Database\Seeders;

use App\Models\Articles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Articles::create([
            'title' => 'Rapat Program Kerja HPU 2023 terkait Pelaksanaan Survei Kesehatan',
            'slug' => 'rapat-program-kerja-hpu-2023-terkait-pelaksanaan-survei-kesehatan',
            'image_path' => 'images/mpRpWZDU6gb1MiPIrY76c878QydGOrSUuKqrqFjX.jpg',
            'content' => '<p>Pada Jumat (14/4/23), bertempat di Ruang Kertanegara Fakultas 
            Ekonomika dan Bisnis, diselenggarakan Rapat Koordinasi HPU UGM mengenai 
            salah satu program kerja HPU 2023, yaitu pelaksanaan survei. Pokja yang 
            terlibat dalam program kerja ini berjumlah 4 dari 8, yaitu:<p><strong>Aktivitas Fisik:</strong></p><ul><li>Akan dilakukan survei pada mahasiswa terkait fasilitas dan hambatan 
            dalam melakukan aktivitas fisik. Hal ini bertujuan agar pengembangan 
            program dapat berfokus pada peningkatan aktivitas fisik mahasiswa.</li></ul><p><strong>Kesehatan Mental:</strong></p><ul><li>Rencananya akan dikembangkan dan dibakukan pemetaan potensi 
            kerentanan pada mahasiswa baru, agar upaya promosi dan prevensi dapat 
            dikembangkan dari data yang ada</li></ul><p><strong><em>Zero Tolerance</em> Tembakau, Alkohol, dan Obat:</strong></p><ul><li>Pertanyaan survei akan mencakup kebiasaan merokok mahasiswa di 
            lingkungan kampus, kondisi finansial mahasiswa yang merokok, serta 
            motivasi mereka untuk mencoba memulai dan menjadi perokok.</li></ul><p><strong>Lingkungan Sehat, Aman, dan Ramah Difabel:</strong></p><ul><li>Akan melanjutkan survei lapangan yang pernah dilakukan oleh Pokja 
            Pembentukan Unit Layanan Disabilitas, sebelumnya di Fakultas Filsafat, 
            sebagian area FK-KMK, Perpustakaan, Grha Sabha, dan Kantor Pusat; ke 
            seluruh fakultas.</li></ul><p>Instrumen yang akan digunakan adalah 1) kuesioner dengan objek 
            individu/sivitas dan 2) observasi lapangan dengan objek 
            fakultas/sekolah. Untuk survei individu, instrumen seluruh Pokja akan 
            disamakan dan kuisioner akan digabungkan menjadi maksimal 30 pertanyaan 
            sehingga tidak memberatkan responden. Akan dilakukan rapat lanjutan pada
             25 Mei 2023 untuk&nbsp;membahas pengumpulan daftar pertanyaan dari 
            masing-masing Pokja yang akan digunakan dan disatukan untuk survei ini.</p><p>Tujuan dari <em>asessment</em> ini adalah untuk mengetahui situasi 
            dan kebutuhan terkait dengan kesejahteraan fisik, psikologis, dan sosial
             seluruh sivitas UGM. Data dari hasil assesment ini akan dipergunakan 
            untuk membangun fasilitas dan mengembangkan program-program preventif, 
            promotif, dan kuratif sebagaimana diperlukan.</p><p></p></p>
            ',
            'featured' => true,
            'category_id' => 4
        ]);
        Articles::create([
            'title' => 'Health and Wellness Lifestyle Festival',
            'slug' => 'health-and-wellness-lifestyle-festival',
            'image_path' => 'images/CAOSOlbUj1FacjdewAcaNSzHq1qx3pKclTOMHeaH.jpg',
            'content' => '<p>Sebagian besar mahasiswa, dosen dan tenaga kependidikan banyak 
            menghabiskan waktunya di universitas. Hal tersebut mengakibatkan mereka 
            untuk cenderung tidak memperhatikan pola makan, aktivitas fisik, dan 
            kesehatan mental masing-masing. Tentunya, terdapat banyak ancaman 
            kesehatan yang dapat menyerang mahasiswa, dosen,<br>
            dan tenaga kependidikan di lingkungan UGM. Untuk itu, Pokja Aktivitas Fisik menyelenggarakan kegiatan &acirc;&#128;&#156;<em>Health and Wellness Lifestyle Festival</em>
             Gadjah Mada&acirc;&#128;&#157; sebagai upaya meningkatkan kesadaran sivitas UGM terhadap 
            konsumsi buah dan sayur, melakukan aktivitas fisik, dan menjaga 
            kesehatan mental.<p><em>Health and Wellness Lifestyle Festival</em> Gadjah Mada merupakan
             rangkaian kegiatan yang disusun untuk saling memotivasi agar kita semua
             dapat menjalankan gaya hidup sehat yang seru dan menyenangkan. Festival
             ini berlangsung selama 8 minggu pada bulan September hingga November 
            2022. Peserta dapat berupa individu maupun grup. Setelah melakukan 
            pendaftaran, peserta akan berlomba mengumpulkan poin dengan melakukan 
            gaya hidup sehat berikut:</p><ul><li>Melakukan dan mencatatkan aktivitas fisik, konsumsi sayur dan buah, serta konsumsi air minum.</li><li>Mengikuti berbagai kegiatan yang diadakan oleh klub olahraga maupun klub aktivitas fisik.</li><li>Berbagi foto gaya hidup sehat, resep, ataupun tips mengolah sayur dan buah.</li><li>Mengikuti program pemeriksaan kesehatan dan kebugaran yang dilakukan dua kali, awal dan akhir.</li></ul><p>Perhitungan poin adalah sebagai berikut:</p><ul><li>Poin tim= poin lomba dari masing-masing individu + bonus poin tim</li><li>Poin individu = poin aktivitas fisik + poin pola makan + poin hidrasi + bonus poin lomba</li></ul><p>Aktivitas fisik yang dapat dicatatkan dapat berupa apa saja, berapa lama, dan kapan dilakukan; yaitu:</p><ul><li>Aktvitas fisik rumahan seperti menyapu dan berkebun</li><li>Aktivitas fisik yang dilakukan untuk berpindah dari satu tempat ke tempat lain seperti jalan kaki dan bersepeda</li><li>Aktivitas fisik yang dilakukan di waktu luang misal nge-gym, renang, jogging</li><li>Aktivitas fisik yang dilakukan dalam kegiatan akademik seperti kuliah dan praktikum</li></ul><p>Setelah rangkaian kegiatan dari <em>Health and Wellness Festival </em>Gadjah
             Mada dilaksanakan selama 8 minggu, kegiatan penutupan pun 
            diselenggarakan sebagai puncak kegiatan yang akan menjadi wadah 
            berkumpulnya seluruh peserta yang telah mengikuti <em>challenge </em>HWF
             Gadjah Mada 2022. Diselenggarakan pada Sabtu, 17 Desember 2022 
            bertempat di Ruang Kuliah Radiopoetro Lantai 1 Fakultas Kedokteran, 
            Kesehatan Masyarakat, dan Keperawatan; kegiatan ini merupakan rangkaian 
            promosi aktivitas fisik sekaligus pengumuman pemenang <em>lifestyle challenge</em>.</p><p></p></p>
            ',
            'featured' => true,
            'category_id' => 4
        ]);
    }
}
