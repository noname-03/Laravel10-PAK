<?php

namespace Database\Seeders;

use App\Models\Unsur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnsurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Unsur::create([
            'parent_id' => null,
            'nilai' => null,
            'title' => 'UNSUR UTAMA',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 1,
            'nilai' => null,
            'title' => 'PENDIDIKAN',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 2,
            'nilai' => null,
            'title' => 'Mengikuti pendidikan dan memperoleh gelar/ijazah/akta',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 3,
            'nilai' => null,
            'title' => 'Doktor (S-3)',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 3,
            'nilai' => null,
            'title' => 'Magister (S-2)',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 3,
            'nilai' => null,
            'title' => 'Sarjana (S-1)/Diploma IV',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 2,
            'nilai' => null,
            'title' => 'Mengikuti pelatihan prajabatan',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 7,
            'nilai' => null,
            'title' => 'Pelatihan prajabatan fungsional bagi guru calon pegawai negeri sipil/program induksi',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 1,
            'nilai' => null,
            'title' => 'PEMBELAJARAN/BIMBINGAN DAN TUGAS TERTENTU',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 9,
            'nilai' => null,
            'title' => 'Melaksanakan proses pembelajaran',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 10,
            'nilai' => null,
            'title' => 'Merencanakan, melaksanakan pembelajaran, mengewaliasi, menganalisis hasil pembelajaran ',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 9,
            'nilai' => null,
            'title' => 'Melaksanakan proses bimbingan',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 12,
            'nilai' => null,
            'title' => 'Merencanakan, melaksanakan pembimbingan, mengewaliasi, menganalisis hasil pembelajaran ',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 9,
            'nilai' => null,
            'title' => 'Melaksanakan tugas lain yang relevan dengan fungsi',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 14,
            'nilai' => null,
            'title' => 'Menjadi Kepala Sekolah/Madrasah per tahun',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 14,
            'nilai' => null,
            'title' => 'Menjadi Wakil Kepala Sekolah/Madrasah per tahun',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 14,
            'nilai' => null,
            'title' => 'Menjadi ketua program keahlian/program studi atau yang sejenisnya',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 14,
            'nilai' => null,
            'title' => 'Menjadi kepala perpustakaan',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 14,
            'nilai' => null,
            'title' => 'Menjadi kepala laboratorium, bengkel, unit produksi atau',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 14,
            'nilai' => null,
            'title' => 'Menjadi pembimbing khsus pada satuan pendidikan inklusi dan terpadu',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 14,
            'nilai' => null,
            'title' => 'Menjadi wali kelas',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 14,
            'nilai' => null,
            'title' => 'Menyusun kurikulum pada satuan pendidikan',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 14,
            'nilai' => null,
            'title' => 'Menjadi pengawas penilaian dan evaluasi terhadap proses dan hasil belajar',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 14,
            'nilai' => null,
            'title' => 'Membimbing guru pemula dalam program induksi',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 14,
            'nilai' => null,
            'title' => 'Membimbing siswa dalam kegiatan ekstrakurikuler',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 14,
            'nilai' => null,
            'title' => 'Menjadi pembimbing pada penyusunan publikasi ilmiah dan karya inovator',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 14,
            'nilai' => null,
            'title' => 'Melaksanakan pembimbingan pada kelas yang menjadi tanggung jawabnya (khusus guru kelas)',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 1,
            'nilai' => null,
            'title' => 'PENGEMBANGAN KEPROFESIAN BERKELANJUTAN',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 28,
            'nilai' => null,
            'title' => 'Melaksanakan pengembangan diri',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 29,
            'nilai' => null,
            'title' => 'Mengikuti diklat fungsional - Lamanya lebih dari 960 jam',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 29,
            'nilai' => null,
            'title' => 'Mengikuti diklat fungsional - Lamanya antara 641 s.d 960 jam',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 29,
            'nilai' => null,
            'title' => 'Mengikuti diklat fungsional - Lamanya antara 481 s.d 640 jam',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 29,
            'nilai' => null,
            'title' => 'Mengikuti diklat fungsional - Lamanya antara 181 s.d 480 jam',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 29,
            'nilai' => null,
            'title' => 'Mengikuti diklat fungsional - Lamanya antara 81 s.d 180 jam',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 29,
            'nilai' => null,
            'title' => 'Mengikuti diklat fungsional - Lamanya antara 30 s.d 80 jam',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 29,
            'nilai' => null,
            'title' => 'Kegiatan kolektif guru  - Lokakarya atau kegiatan bersama',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 29,
            'nilai' => null,
            'title' => 'Kegiatan kolektif guru  - Keikutsertaan pada kegiatan ilmiah - Menjadi pembahas pada kegiatan ilmiah',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 29,
            'nilai' => null,
            'title' => 'Kegiatan kolektif guru  - Keikutsertaan pada kegiatan ilmiah - Menjadi peserta pada kegiatan ilmiah',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 29,
            'nilai' => null,
            'title' => 'Kegiatan kolektif guru - Kegiatan kolektif lainnya',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 28,
            'nilai' => null,
            'title' => 'Melaksanakan publikasi ilmiah',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 40,
            'nilai' => null,
            'title' => 'PrePresentasi pada forum ilmiah - Menjadi pemrasaran/nara sumber pada seminar atau lokakarya ilmiah',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 40,
            'nilai' => null,
            'title' => 'Presentasi pada forum ilmiah - Menjadi pemrasaran/nara sumber pada koloqium atau diskusi ilmiah',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 40,
            'nilai' => null,
            'title' => 'Melaksanakan publikasi ilmiah - Karya tulis berupa laporan hasil penelitian,di terbitkan dalam bentuk ISBN dan telah lulus BSNP',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 40,
            'nilai' => null,
            'title' => 'Melaksanakan publikasi ilmiah - Karya tulis berupa laporan hasil penelitian,di terbitkan dalam Makalah / Jurnal Ilmiah tingkat Nasional yang terakreditasi',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 40,
            'nilai' => null,
            'title' => 'Melaksanakan publikasi ilmiah - Membuat Karya tulis berupa laporan hasil penelitian,di terbitkan dalam Makalah / Jurnal Ilmiah tingkat Provinsi',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 40,
            'nilai' => null,
            'title' => 'Melaksanakan publikasi ilmiah - Membuat Karya tulis berupa laporan hasil penelitian,di terbitkan dalam Makalah / Jurnal Ilmiah tingkat Kabupaten/Kota',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 40,
            'nilai' => null,
            'title' => 'Melaksanakan publikasi ilmiah - Membuat karya tulis berupa laporan hasil penelitian,di Seminarkan di sekolahnya dan disimpan di perpustakaan.',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 40,
            'nilai' => null,
            'title' => 'Melaksanakan publikasi ilmiah - Membuat karya tulis berupa tinjaun Ilmiah dalam bidang pendidikan formal idak di terbitkan dan disimpan di perpustakaan.',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 40,
            'nilai' => null,
            'title' => 'Melaksanakan publikasi ilmiah - Membuat tulisan ilmiah populer di bidang pendidikan formal - Di muat di media masa tingkat Nasional',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 40,
            'nilai' => null,
            'title' => 'Melaksanakan publikasi ilmiah - Membuat tulisan ilmiah populer di bidang pendidikan formal - Di muat di jurnal tingkat Nasional yang tidak terakreditasi',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 40,
            'nilai' => null,
            'title' => 'Melaksanakan publikasi ilmiah - Membuat Artikel ilmiah populer di bidang pendidikan formal - Di muat di Jurnal tingkat Nasional',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 40,
            'nilai' => null,
            'title' => 'Melaksanakan publikasi ilmiah - Membuat Arrikel ilmiah populer di bidang pendidikan formal - Di muat di jurnal tingkat Nasional yang tidak terakreditasi',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 40,
            'nilai' => null,
            'title' => 'Melaksanakan publikasi ilmiah - Membuat Arrikel ilmiah populer di bidang pendidikan formal - Di muat di jurnal tingkat Lokal (Kabupaten / Kota )',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 40,
            'nilai' => null,
            'title' => 'Melaksanakan publikasi buku teks pelajaran, buku, pengayaan, dan pedoman guru',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 40,
            'nilai' => null,
            'title' => 'Membuat Buku pelajaran yang lolos penilaian oleh BSNP',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 40,
            'nilai' => null,
            'title' => 'Membuat Buku pelajaran dicetak oleh penerbit dan ber-ISBN',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 40,
            'nilai' => null,
            'title' => 'Melaksanakan publikasi buku -Membuat Buku pelajaran dicetak oleh penerbit tetapi belum ber-ISBN',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 40,
            'nilai' => null,
            'title' => 'Melaksanakan publikasi buku - Membuat modul yang di gunakan di tingkat Provinsi dengan pengesahan dari Dinas Pendidikan Provinsi',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 40,
            'nilai' => null,
            'title' => 'Melaksanakan publikasi buku - Membuat modul yang di gunakan di tingkatkota/kabupaten dengan pengesahan dari Dinas Pendidikan Kota/Kabupaten',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 40,
            'nilai' => null,
            'title' => 'Melaksanakan publikasi buku - Membuat modul yang Digunakan di lingkungan sekolah/madrasah setempat',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 40,
            'nilai' => null,
            'title' => 'Melaksanakan publikasi buku - Membuat Buku dalam bidang pendidikan dicetak oleh penerbit dan ber-ISBN',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 40,
            'nilai' => null,
            'title' => 'Melaksanakan publikasi buku - Membuat Buku dalam bidang pendidikan dicetak oleh penerbit tetapi belum ber-ISBN',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 40,
            'nilai' => null,
            'title' => 'Melaksanakan publikasi buku - Membuat karya hasil terjemahan yang dinyatakan oleh kepala sekolah/madrasah tiap karya',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 40,
            'nilai' => null,
            'title' => 'Melaksanakan publikasi buku - Membuat buku pedoman guru',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 28,
            'nilai' => null,
            'title' => 'Melaksanakan karya inovatif',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 65,
            'nilai' => null,
            'title' => 'Menemukan teknologi tepatguna - Kategori kompleks',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 65,
            'nilai' => null,
            'title' => 'Menemukan teknologi tepatguna - Kategori sederhana',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 65,
            'nilai' => null,
            'title' => 'Menemukan/menciptakan karya seni - Kategori kompleks',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 65,
            'nilai' => null,
            'title' => 'Menemukan/menciptakan karya seni - Kategori sederhana',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 65,
            'nilai' => null,
            'title' => 'Membuat/memodifiksi alat pelajaran/peraga/praktikum - Membuat alat pelajaran - Kategori kompleks',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 65,
            'nilai' => null,
            'title' => 'Membuat/memodifiksi alat pelajaran/peraga/praktikum - Membuat alat pelajaran - Kategori Sederhana',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 65,
            'nilai' => null,
            'title' => 'Membuat/memodifiksi alat pelajaran/peraga/praktikum - Membuat alat peraga - Kategori Kompleks',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 65,
            'nilai' => null,
            'title' => 'Membuat/memodifiksi alat pelajaran/peraga/praktikum - Membuat alat peraga - Kategori Sederhana',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 65,
            'nilai' => null,
            'title' => 'Membuat/memodifiksi alat pelajaran/peraga/praktikum - Membuat alat praktikum - Kategori Kompleks',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 65,
            'nilai' => null,
            'title' => 'Membuat/memodifiksi alat pelajaran/peraga/praktikum - Membuat alat praktikum - Kategori Sederhana',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 65,
            'nilai' => null,
            'title' => 'Mengikuti Pengembangan Penyusunan standar tingkat Nasional',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 65,
            'nilai' => null,
            'title' => 'Mengikuti Pengembangan Penyusunan standar tingkat Provinsi',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => null,
            'nilai' => null,
            'title' => 'UNSUR PENUNJANG',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 78,
            'nilai' => null,
            'title' => 'PENUNJANG TUGAS GURU',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 79,
            'nilai' => null,
            'title' => 'Memperoleh gelar/ijazah yang tidak sesuai dengan bidang',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 80,
            'nilai' => null,
            'title' => 'Doktor (S-3)',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 80,
            'nilai' => null,
            'title' => 'Pascasarjana (S-2)',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 80,
            'nilai' => null,
            'title' => 'Sarjana (S-1)/Diploma IV',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 79,
            'nilai' => null,
            'title' => 'Melaksanakan kegiatan yang mendukung tugas guru',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 84,
            'nilai' => null,
            'title' => 'Membimbing siswa dalam praktik kerja nyata/praktik industri/ekstrakurikuler dan yang sejenisnya		',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 84,
            'nilai' => null,
            'title' => 'Sebagai pengawas ujian penilaian dan evaluasi terhadap proses dan hasil belajar tingkat Sekolah		',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 84,
            'nilai' => null,
            'title' => 'Sebagai pengawas ujian penilaian dan evaluasi terhadap proses dan hasil belajar tingkat Nasional',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 84,
            'nilai' => null,
            'title' => 'Menjadi anggota organisasi profesi, sebagai Pengurus Aktif',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 84,
            'nilai' => null,
            'title' => 'Menjadi anggota organisasi profesi, sebagai Pengurus Aktif PGRI',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 84,
            'nilai' => null,
            'title' => 'Menjadi anggota kegiatan kepramukaan sebagai Pengurus aktif',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 84,
            'nilai' => null,
            'title' => 'Menjadi anggota kegiatan kepramukaan sebagai Anggota aktif',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 84,
            'nilai' => null,
            'title' => 'Menjadi tim penilai angka kredit',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 84,
            'nilai' => null,
            'title' => 'Menjadi tutor/pelatih/instruktur',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 79,
            'nilai' => null,
            'title' => 'Perolehan penghargaan/tanda jasa',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 94,
            'nilai' => null,
            'title' => 'Memperoleh penghargaan/tanda jasa Satya Lencana Karya Satya - 30 (tiga puluh tahun)',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 94,
            'nilai' => null,
            'title' => 'Memperoleh penghargaan/tanda jasa Satya Lencana Karya Satya - 20 (dua puluh tahun)',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 94,
            'nilai' => null,
            'title' => 'Memperoleh penghargaan/tanda jasa Satya Lencana Karya Satya - 10 (dua puluh tahun)',
            'year' => 2021,
        ]);
        Unsur::create([
            'parent_id' => 94,
            'nilai' => null,
            'title' => 'Memperoleh penghargaan/tanda jasa',
            'year' => 2021,
        ]);
    }
}