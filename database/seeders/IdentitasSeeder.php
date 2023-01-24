<?php

namespace Database\Seeders;

use App\Models\Identitas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PHPUnit\Framework\MockObject\Builder\Identity;

class IdentitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Identitas::create([
            'nama_app' => 'Perpus SMKN 10 Jakarta',
            'email_app' => 'perpus10@gmail.com',
            'nomor_hp' => '081563832997'
        ]);
    }
}
