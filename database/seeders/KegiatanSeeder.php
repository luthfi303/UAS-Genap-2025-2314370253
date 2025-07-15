<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kegiatan;

class KegiatanSeeder extends Seeder
{
    public function run(): void
    {
        Kegiatan::create([
            'judul' => 'Pelatihan Adzan',
            'deskripsi' => 'Pelatihan adzan untuk remaja masjid setiap Jumat sore.',
            'tanggal' => '2025-07-20',
            'lokasi' => 'Masjid Nurul Hakim',
        ]);

        Kegiatan::create([
            'judul' => 'Kajian Remaja Subuh',
            'deskripsi' => 'Kajian bersama ustadz setiap hari Ahad pagi.',
            'tanggal' => '2025-07-27',
            'lokasi' => 'Ruang Serbaguna Masjid',
        ]);
    }
}
