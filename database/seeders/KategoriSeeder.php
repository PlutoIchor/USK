<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kategori::create([
            'kode_kategori' => 'K01',
            'nama_kategori'=> 'Historical'
        ]);

        Kategori::create([
            'kode_kategori' => 'K02',
            'nama_kategori'=> 'Science'
        ]);

        Kategori::create([
            'kode_kategori' => 'K03',
            'nama_kategori'=> 'Action'
        ]);
    }
}
