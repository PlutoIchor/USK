<?php

namespace Database\Seeders;

use App\Models\Pesan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PesanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pesan::create([
            'id_penerima' => 2,
            'id_pengirim'=> 1,
            'judul_pesan' => 'Rekomendasi buku baru',
            'isi_pesan' => 'Bacalah buku terbaru kami, Vagabond',
            'status' => 'terkirim',
            'tanggal_kirim' => now(),
        ]);
    }
}
