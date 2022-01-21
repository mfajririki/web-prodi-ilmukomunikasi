<?php

namespace Database\Seeders;

use App\Models\VisiMisi;
use Illuminate\Database\Seeder;

class VisiMisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VisiMisi::insert([
            'visi' => 'Menjadi Program Studi Ilmu Komunikasi  yang mengedepankan etika dan profesionalitas, berbasis Teknologi Informasi serta berstandar internasionalpada tahun 2025.',
            'misi' => 'Menyelengarakan  pendidikan,penelitian dan pengabdian masyarakat dalam bidang  Ilmu Komunikasi dengan   memperhatikan mutu kurikulum.'
        ]);
    }
}
