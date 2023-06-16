<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Impor model member
use App\Models\Member;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Member::create([
            'name' => 'Uji',
            'email' => 'uji@gmail.com',
            'gender' => 'Pria',
            'status' => 'Mahasiswa',
            'address' => 'Jonggol,Kab Bogor',
        ]);
    }
}
