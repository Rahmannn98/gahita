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
                'title' => 'Gala Dinner in Garuda Wisnu Kencana',
                'content' => 'Gala dinner eksklusif di GWK dengan pemandangan spektakuler...',
                'image' => 'https://www.gwkbali.com/_next/image?url=%2Fimages%2F7f6b539809d5c6f6.jpg',
                'category' => 'Marketing',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Music Concert',
                'content' => 'Konser musik luar biasa yang diadakan di GWK dengan artis terkenal...',
                'image' => 'https://cmsvp.gwkbali.com/wp-content/uploads/2024/11/konser.jpg',
                'category' => 'Business',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Tari Kecak di GWK',
                'content' => 'Pertunjukan Tari Kecak yang memukau dengan latar Patung GWK...',
                'image' => 'https://cmsvp.gwkbali.com/wp-content/uploads/2023/12/kecak.jpg',
                'category' => 'Pentas Seni',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Wedding in Garuda Wisnu Kencana',
                'content' => 'Pernikahan mewah dengan pemandangan eksotis di GWK...',
                'image' => 'https://cdn.sanity.io/images/heliysiv/production/fec307543d62a.jpg',
                'category' => 'Business',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
