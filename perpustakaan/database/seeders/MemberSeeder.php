<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Member;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // tambah data dummy
        Member::create([
            'name' => 'Na Jaemin',
            'email' => 'najaem@gmail.com',
            'gender' => 'Pria',
            'status' => 'Mahasiswa',
            'address' => 'Seoul, South Korea',
        ]);
    }
}
