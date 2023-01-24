<?php

namespace Database\Seeders;

use App\Models\Pemberitahuan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PemberitahuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pemberitahuan::create([
            'isi_pemberitahuan' => 'Perpus sedang direnovasi',
            'level_user' => 'user',
            'status' => 'aktif'
        ]);
    }
}
