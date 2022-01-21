<?php

namespace Database\Seeders;

use App\Models\ProfileKaprodi;
use Illuminate\Database\Seeder;

class ProfileKaprodiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProfileKaprodi::insert([
            'nama' => 'Desy Misnawati, S.Sos., M.I.Kom.',
            'kutipan' => 'Lulusan diharapkan menjadi sarjana Ilmu Komunikasi profesional dan berakhlaq mulia dan mempunyai wawasan nasional dan internasional.'
        ]);
    }
}
