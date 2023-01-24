<?php

namespace Database\Seeders;

use App\Models\Penerbit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenerbitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Penerbit::create([
            'kode_penerbit' => 'P01',
            'nama_penerbit'=> 'Mangareader',
            'verif_penerbit' => 'verified'
        ]);

        Penerbit::create([
            'kode_penerbit' => 'P02',
            'nama_penerbit'=> 'Gramedia',
            'verif_penerbit' => 'verified'
        ]);

    }
}
