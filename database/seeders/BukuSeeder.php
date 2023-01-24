<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Buku::create([
            'judul_buku' => 'Vagabond',
            'id_kategori' => 1,
            'id_penerbit' => 1,
            'pengarang' => 'Takehiko Inoue',
            'tahun_terbit' => 2005,
            'j_buku_baik' => 10,
            'j_buku_rusak' => 0,
        ]);

        Buku::create([
            'judul_buku' => 'Real',
            'id_kategori' => 1,
            'id_penerbit' => 1,
            'pengarang' => 'Takehiko Inoue',
            'tahun_terbit' => 2010,
            'j_buku_baik' => 5,
            'j_buku_rusak' => 1,
        ]);
    }
}
