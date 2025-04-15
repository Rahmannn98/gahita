<?php

namespace Database\Seeders;

use App\Models\History;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        History::create([
            'nama' => 'Tari Pendet',
            'tanggal' => '2023-09-05',
            'harga' => 400000,
        ]);
        History::create([
            'nama' => 'Tari Rejang',
            'tanggal' => '2024-09-05',
            'harga' => 200000,
        ]);
        History::create([
            'nama' => 'Kendang Traditional',
            'tanggal' => '2024-10-05',
            'harga' => 350000,
        ]);
    }
}
