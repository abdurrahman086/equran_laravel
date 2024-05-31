<?php

namespace Database\Seeders;

use App\Models\Hadits;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HaditsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hadits::create([
            'nomor_hadits' => '001',
            'judul' => 'Hadits Tentang Kejujuran',
            'isi_hadits' => 'إِنَّ الصِّدْقَ يَهْدِي إِلَى الْبِرِّ وَإِنَّ الْبِرَّ يَهْدِي إِلَى الْجَنَّةِ',
            'terjemahan' => 'Sesungguhnya kejujuran menuntun kepada kebaikan, dan kebaikan menuntun ke surga.'
        ]);
    }
}
