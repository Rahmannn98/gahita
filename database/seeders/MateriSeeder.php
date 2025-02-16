<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Materi;

class MateriSeeder extends Seeder {
    public function run(): void {
        Materi::insert([
            [
                'kategori' => 'gambelan',
                'nama' => 'Gambelan Tradisional Bali',
                'deskripsi' => 'Instrumen musik khas dari Bali yang digunakan dalam upacara adat.',
                'gambar' => 'img/kendang.png',
            ],
            [
                'kategori' => 'gambelan',
                'nama' => 'Kendang',
                'deskripsi' => 'Alat musik pukul yang menjadi pengatur irama dalam gamelan.',
                'gambar' => 'img/kendang.png',
            ],
            [
                'kategori' => 'tari',
                'nama' => 'Tari Bali',
                'deskripsi' => 'Seni tari yang memukau dengan gerakan anggun dan ekspresi yang kuat.',
                'gambar' => 'img/tari.png',
            ],
            [
                'kategori' => 'kerajianan',
                'nama' => 'Makna & Cara Membuat Penjor Tradisional Bali',
                'deskripsi' => 'Makna & Cara Membuat Penjor Tradisional Bali',
                'gambar' => 'img/gambelan.png',
            ],
            [
                'kategori' => 'kerajinan',
                'nama' => 'Pembelajaran Seni Kriya',
                'deskripsi' => 'Belajar seni kriya tradisional dengan teknik modern.',
                'gambar' => 'img/gwk.jpg',
            ],
            [
                'kategori' => 'kerajinan',
                'nama' => 'Seni Kriya',
                'deskripsi' => 'Eksplorasi seni kriya dalam berbagai bentuk dan media.',
                'gambar' => 'img/gwk.jpg',
            ],
        ]);
    }
}
