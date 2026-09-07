<?php

namespace Database\Seeders;

use App\Models\Kategori;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create an array of categories to seed
        $kategori = [
            ['nama' => 'Kegiatan', 'slug' => 'kegiatan'],
            ['nama' => 'Prestasi', 'slug' => 'prestasi'],
            ['nama' => 'Ekstrakurikuler', 'slug' => 'ekstrakurikuler'],
            ['nama' => 'Fasilitas', 'slug' => 'fasilitas'],
            ['nama' => 'DKV', 'slug' => 'dkv'],
            ['nama' => 'MP', 'slug' => 'mp'],
            ['nama' => 'RPL', 'slug' => 'rpl'],
            ['nama' => 'TKJ', 'slug' => 'tkj'],
            ['nama' => 'TKR', 'slug' => 'tkr'],
            ['nama' => 'TSM', 'slug' => 'tsm'],
        ];

        foreach ($kategori as $item) {
            Kategori::create($item);
        }
    }
}
