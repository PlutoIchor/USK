<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'kode_user' => 'U01',
            'nis' => '12067',
            'fullname' => 'Christian Dimas',
            'username' => 'Dimas', 
            'password' => Hash::make('password'),
            'kelas' => '12 RPL',
            'verif' => 'verified',
            'role' =>  'user',
            'join_date' => now(),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'kode_user' => 'A01',
            'nis' => '12068',
            'fullname' => 'Dimas',
            'username' => 'Pluto', 
            'password' => Hash::make('password'),
            'kelas' => '12 RPL',
            'verif' => 'verified',
            'role' =>  'admin',
            'join_date' => now(),
            'remember_token' => Str::random(10),
        ]);
    }
}
