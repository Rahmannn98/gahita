<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ArticleSeeder extends Seeder
{
    public function run()
    {
        DB::table('articles')->insert([
            [
                'title'      => 'Tari Kecak',
                'content'    => 'Tarian khas Bali yang melibatkan puluhan pria yang duduk melingkar sambil meneriakkan "cak" secara berirama, menggambarkan kisah Ramayana.',
                'image'      => 'URL_GAMBAR_KECAK',
                'category'   => 'Seni Tari',
                'references' => 'https://kebudayaan.kemdikbud.go.id/ditwdb/tari-kecak-bali/',
                'created_at' => Carbon::now(),
            ],
            [
                'title'      => 'Tari Legong',
                'content'    => 'Tarian klasik yang ditarikan oleh penari muda dengan gerakan gemulai dan ekspresi wajah yang kuat, biasanya diiringi gamelan semar pagulingan.',
                'image'      => 'URL_GAMBAR_LEGONG',
                'category'   => 'Seni Tari',
                'references' => 'https://warisanbudaya.kemdikbud.go.id/?newdetail&detailCatat=6607',
                'created_at' => Carbon::now(),
            ],
            [
                'title'      => 'Tari Barong',
                'content'    => 'Tarian yang menampilkan pertarungan antara Barong (simbol kebaikan) dengan Rangda (simbol kejahatan), diiringi gamelan khas Bali.',
                'image'      => 'URL_GAMBAR_BARONG',
                'category'   => 'Seni Tari',
                'references' => 'https://warisanbudaya.kemdikbud.go.id/?newdetail&detailCatat=5266',
                'created_at' => Carbon::now(),
            ],
            [
                'title'      => 'Ogoh-Ogoh',
                'content'    => 'Patung raksasa yang dibuat menjelang Hari Raya Nyepi. Diarak keliling desa untuk mengusir roh jahat sebelum hari Nyepi dimulai.',
                'image'      => 'URL_GAMBAR_OGOH',
                'category'   => 'Tradisi',
                'references' => 'https://warisanbudaya.kemdikbud.go.id/?newdetail&detailCatat=5199',
                'created_at' => Carbon::now(),
            ],
            [
                'title'      => 'Wayang Kulit Bali',
                'content'    => 'Pertunjukan wayang dengan lakon Ramayana atau Mahabharata, menonjolkan gaya khas Bali baik dari segi pengiring musik maupun gaya penceritaannya.',
                'image'      => 'URL_GAMBAR_WAYANG',
                'category'   => 'Seni Pertunjukan',
                'references' => 'https://warisanbudaya.kemdikbud.go.id/?newdetail&detailCatat=5167',
                'created_at' => Carbon::now(),
            ],
            [
                'title'      => 'Gamelan Bali',
                'content'    => 'Kesenian musik tradisional Bali yang ditandai dengan suara gong, kendang, dan instrumen lain yang berpadu dinamis serta ritme energik.',
                'image'      => 'URL_GAMBAR_GAMELAN',
                'category'   => 'Musik Tradisional',
                'references' => 'https://warisanbudaya.kemdikbud.go.id/?newdetail&detailCatat=5207',
                'created_at' => Carbon::now(),
            ],
            [
                'title'      => 'Ukiran Kayu Bali',
                'content'    => 'Karya seni pahat pada kayu yang sangat detail dan rumit, sering digunakan untuk dekorasi pura, rumah adat, dan berbagai perabotan.',
                'image'      => 'URL_GAMBAR_UKIRAN',
                'category'   => 'Seni Rupa',
                'references' => 'https://kebudayaan.kemdikbud.go.id/bpnbyogyakarta/seni-ukir-bali/',
                'created_at' => Carbon::now(),
            ],
            [
                'title'      => 'Batik Bali',
                'content'    => 'Kain tradisional dengan motif khas Bali, biasanya menggabungkan motif alam dan budaya lokal, berbeda dengan batik Jawa.',
                'image'      => 'URL_GAMBAR_BATIK',
                'category'   => 'Seni Tekstil',
                'references' => 'https://warisanbudaya.kemdikbud.go.id/?cari=Batik+Bali',
                'created_at' => Carbon::now(),
            ],
            [
                'title'      => 'Pura Besakih',
                'content'    => 'Pura terbesar di Bali dan dianggap sebagai pura induk. Kompleks pura ini berlokasi di kaki Gunung Agung dan menjadi pusat kegiatan agama Hindu.',
                'image'      => 'URL_GAMBAR_BESAKIH',
                'category'   => 'Arsitektur',
                'references' => 'https://warisanbudaya.kemdikbud.go.id/?newdetail&detailCatat=6195',
                'created_at' => Carbon::now(),
            ],
            [
                'title'      => 'Subak (Sistem Irigasi Bali)',
                'content'    => 'Sistem pengairan tradisional Bali yang diatur oleh masyarakat adat setempat, diakui UNESCO sebagai Warisan Budaya Dunia.',
                'image'      => 'URL_GAMBAR_SUBAK',
                'category'   => 'Tradisi',
                'references' => 'https://whc.unesco.org/en/list/1194',
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}
