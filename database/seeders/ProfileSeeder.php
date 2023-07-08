<?php

namespace Database\Seeders;

use App\Models\ProfileModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $user = new ProfileModel();
       $user->nama = 'Edy Atthoillah';
       $user->ttl = 'Lumajang, 20 Oktober 2002';
       $user->alamat = 'Jl.Nangka No.113 Kepuharjo Lumajang';
       $user->Agama = 'Islam';
       $user->Kewarganegaraan = 'Indonesia';
       $user->no_hp = '087774931731';
       $user->email = 'edyatthoillah123@gmail.com';
       $user->save();
    }
}
