<?php

namespace Database\Seeders;

use App\Models\Peminjaman;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeminjamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Peminjaman::create([
            'id_anggota' => 1,
            'id_buku' => 1,
            'tanggal_peminjaman' => now(),
            'kondisi_buku_saat_dipinjam' => 'Baik'
        ]);

        Peminjaman::create([
            'id_anggota' => 1,
            'id_buku' => 2,
            'tanggal_peminjaman' => '2023/01/19',
            'kondisi_buku_saat_dipinjam' => 'Baik'
        ]);
    }
}
