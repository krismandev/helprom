<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Aktivitas Fisik',
            'slug' => 'aktivitas-fisik',
            'description' => 'Aktivitas Fisik: Semua kegiatan fisik yang melibatkan kerja otot rangka serta membutuhkan energi. Termasuk kegiatan sehari-hari, contoh: berjalan, stretching, menulis, mengetik, dll.

            Olah Raga: Aktivitas fisik yang terencana, terjadwal, terstruktur, sesuai dosis dengan tujuan meningkatkan atau mempertahankan kebugaran jantung, paru, dan otot rangka.
            
            Rutin berolahraga dan melakukan aktivitas fisik adalah salah satu pondasi untuk hidup sehat. Aktivitas fisik yang teratur atau olahraga ringan sampai sedang yang rutin dan teratur serta berkelanjutan adalah salah satu hal paling penting yang dapat dilakukan dengan mudah untuk memperoleh berbagai manfaat bagi kesehatan. Salah satu penyebab utama dari penyakit tidak menular (PTM) adalah kurangnya aktivitas fisik yang dilakukan.
            
            Berbagai sarana dan prasarana telah dikembangkan oleh UGM untuk mendukung upaya sivitas kampus agar bisa menerapkan pola aktivitas yang sehat seperti pembangunan wisdom park, gelanggang olahraga, dan pusat kebugaran (fitness center).',
            'image' => 'images/SRmic1hbbELtRfXoHrD4hN0DB8nPBYOEML6V3dhv.png',
        ]);
        Category::create([
            'name' => 'Pola Makan Sehat',
            'slug' => 'pola-makan-sehat',
            'description' => 'Selain aktif mempromosikan dan mensosialisakan pola makan sehat kepada sivitas kampus, beberapa target yang diharapkan dapat tercapai dalam 5 tahun ke depan yaitu:
                - Seluruh fasilitas kantin di UGM telah memenuhi standar.
                - Tersedianya website/aplikasi kantin UGM yang bekerja sama dengan layanan transaksi online.
                - Pengelola dan pelaku usaha kantin mampu mengimplementasikan good practices.
                -  Seluruh kantin di UNJA dapat menyediakan menu makanan sehat.
                - Perubahan perilaku konsumen.',
            'image' => 'images/nQAUDmuFOJPK6Yz8e7AKntvWwMdgesUD2HBnhD70.png',
        ]);
        Category::create([
            'name' => 'Kesehatan Mental',
            'slug' => 'kesehatan-mental',
            'description' => 'Demi mewujudkan kesehatan mental yang optimal, Koordinator Pokja Kesehatan Mental HPU. sekaligus Kepala Center for Public Mental Health (CPMH) Fakultas Psikologi. tengah melakukan kolaborasi dengan berbagai pihak untuk mengembangkan sistem Kampus Sejahtera.

            Kampus Sejahtera adalah sistem perguruan tinggi yang seluruh warganya, yaitu dosen, tenaga kependidikan, mahasiswa, alumni, dan keluarga (yang selanjutnya disebut pemangku kepentingan atau stakeholder) saling mendukung, saling memberi apresiasi positif, dan saling memotivasi sehingga seluruh warga kampus berkembang optimal. Hal ini ditandai dengan individu yang
            
                menyadari kemampuan diri dengan mengetahui potensi dan kelemahan diri,
                mampu mengatasi tekanan hidup,
                bekerja produktif, dan
                berkontribusi dalam masyarakat
            
            Di dalam kampus sejahtera, juga akan ada sistem pelayanan kesehatan mental di mana setiap fakultas akan memiliki first responder yang telah dilatih mulai dari mahasiswa, dosen, hingga tendik.',
            'image' => 'images/u41Jcl9YhgIroNBqqFQ70y6IhfE7X5hssGPM1sE2.png'
        ]);
        Category::create([
            'name' => 'Literasi Kesehatan',
            'slug' => 'literasi-kesehatan',
            'description' => 'Peningkatan literasi di bidang kesehatan telah dilakukan oleh UGM sebagai upaya untuk pengembangan kampus sehat dilaksanakan dengan cara:

            Memanfaatkan beragam saluran (multichannel) dalam menyediakan beragam informasi kesehatan yang akurat.
            Mengembangkan informasi kesehatan yang komprehensif (promotif, preventif, kuratif,
            rehabilitatif) yang mudah dipahami oleh semua kalangan.
            Proaktif mendorong gerakan hidup sehat termasuk melalui media digital baik dengan
            pendekatan umum maupun personal.
            Mengukur secara berkesinambungan tingkat literasi kesehatan sivitas kampus.
            Pengelolaan dan pemantauan relawan dan ambassador kesehatan',
            'image' => 'images/IzWU6qPN9gxPiYZWvGt1EUFWpmxgyjUkpfLhbdAB.png'
        ]);
        Category::create([
            'name' => 'Zero Tolerance Narkoba, Tembakau, dan Alkohol ',
            'slug' => 'zero-tolerance-narkoba-tembakau-dan-alkohol',
            'description' => '
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse beatae sed, nulla minima harum libero repudiandae non debitis facilis maxime vitae eveniet dolores dolorem nesciunt? Quam nesciunt ut amet laudantium.',
            'image' => 'images/6hzqco1nXsFa5FdyXxH7fLwz9cAc6WjBcWnk9K6E.png'
        ]);
        Category::create([
            'name' => 'Pembentukan Lingkungan Hidup Sehat, Aman, dan Disable Friendly',
            'slug' => 'pembentukan-lingkungan-hidup-sehat-aman-dan-disable-friendly',
            'description' => '
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur exercitationem, veritatis distinctio quod asperiores quasi sit esse fugit adipisci maxime ducimus qui, amet consequatur dignissimos harum ratione quibusdam facere ab.',
            'image' => 'images/7HEdfwfQ5UWTtwXNnxUXfnHkhq5KTMS0WBzxoDkV.png'
        ]);
    }
}
