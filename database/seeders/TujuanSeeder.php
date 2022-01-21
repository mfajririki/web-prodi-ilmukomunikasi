<?php

namespace Database\Seeders;

use App\Models\Tujuans;
use Illuminate\Database\Seeder;

class TujuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tujuans::insert([
            'konten_tujuan' => 'Untuk mewujudkan misi program studi, sasaran-sasaran kegiatan disusun sebagai target atau sasaran Program Studi Sistem Informasi dalam upaya mencapai tujuannya. Untuk menyelenggarakan pendidikan dan tri darma perguruan tinggi di bidang Sistem Informasi dengan memperhatikan kurikulum yang berbasis kompetensi dan untuk menciptakan proses belajar mengajar dengan pelayanan pendidikan yang berkualitas internasional melalui pemanfaatan teknologi informasi, ditetapkan.'
        ]);
    }
}
