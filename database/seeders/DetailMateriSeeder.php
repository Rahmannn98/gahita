<?php

namespace Database\Seeders;

use App\Models\DetailMateri;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DetailMateriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DetailMateri::create([
            'materi_id' => 1, // Sesuaikan dengan ID materi yang ada
            'judul' => 'Gambelan Traditional Bali',
            'deskripsi' => 'Video pengenalan dasar tentang Gambelan.',
            'video_url' => 'https://example.com/video/laravel-intro.mp4',
        ]);

        DetailMateri::create([
            'materi_id' => 2, // Sesuaikan dengan ID materi yang ada
            'judul' => 'Reong Bali',
            'deskripsi' => 'Tutorial Dasar Reong Bali.',
            'video_url' => 'https://example.com/video/laravel-migrations.mp4',
        ]);
    }
}
