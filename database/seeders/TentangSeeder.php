<?php

namespace Database\Seeders;

use App\Models\Tentang;
use Illuminate\Database\Seeder;

class TentangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tentang::insert([
            'konten_tentang' => 'Proses belajar mengajar yang diterapkan pada prodi Ilmu Komunikasi mendorong mahasiswa bukan hanya belajar dari buku dan jurnal referensi saja. Mahasiswa dilibatkan dalam proses pembelajaran aktif pada konteks kehidupan sosial masyarakat.  Hal ini bertujuan agar mahasiswa dapat berpikir kreatif, inovatif, dan solutif.'
        ]);
    }
}
