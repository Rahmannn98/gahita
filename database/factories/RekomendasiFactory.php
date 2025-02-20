<?php

namespace Database\Factories;

use App\Models\Rekomendasi;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rekomendasi>
 */
class RekomendasiFactory extends Factory
{
    protected $model = Rekomendasi::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'content' => $this->faker->paragraph(5),
            'category' => $this->faker->randomElement(['Art', 'Bali', 'Education']),
            'image' => 'img/default.jpg',
            'created_at' => now(),
        ];
    }
}
