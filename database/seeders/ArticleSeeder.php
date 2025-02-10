<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            Article::create([
                'title' => 'Boost your conversion rate',
                'content' => 'Learn strategies to improve your business performance with expert insights and data-driven solutions.',
                'image' => 'https://images.unsplash.com/photo-1738941316860-fa7065bd2518?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3',
                'category' => 'Marketing',
            ]);
    
            Article::create([
                'title' => 'The Future of E-commerce',
                'content' => 'Discover trends and strategies that will shape online businesses in the next decade.',
                'image' => 'https://source.unsplash.com/600x400/?ecommerce',
                'category' => 'Business',
            ]);
        }
    }
}
