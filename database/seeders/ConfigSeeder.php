<?php

namespace Database\Seeders;

use App\Models\Configs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // TYPE[
        //     0 = TEXT,
        //     1 = FILE,
        //     2 = TEXTAREA,
        //     3 = SELECT, 
        //     4 = Date,
        //     5 = Time,
        // ]

        Configs::create([
            'name' => 'nama_kepsek',
            'label' => 'Nama Kepala Sekolah',
            'type' => 0
        ]);
        Configs::create([
            'name' => 'foto_kepsek',
            'label' => 'Foto Kepala Sekolah',
            'type' => 1
        ]);
        Configs::create([
            'name' => 'sambutan_kepsek',
            'label' => 'Sambutan Kepala Sekolah',
            'type' => 2
        ]);
        Configs::create([
            'name' => 'visi_misi',
            'label' => 'Visi Misi',
            'type' => 2
        ]);
    }
}
