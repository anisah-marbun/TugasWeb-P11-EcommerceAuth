<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement([
                'Elektronik',
                'Fashion',
                'Makanan',
                'Minuman',
                'Aksesoris',
                'Peralatan Rumah',
                'Kecantikan',
                'Olahraga',
                'Buku',
                'Alat Tulis',
            ]),

            'description' => $this->faker->sentence(8),
        ];
    }
}