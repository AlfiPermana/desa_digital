<?php

namespace Database\Factories;

use App\Models\SocialAssistance;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<SocialAssistance>
 */
class SocialAssistanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'thumbnail' => $this->faker->imageUrl(),
            'name' => $this->faker->randomElement([
                'Bansos Pangan',
                'Bansos Tunai',
                'Bansos Bahan Bakar Bersubsidi',
                'Bansos Kesehatab'
            ]) . '' .  $this->faker->company,
            'category' => $this->faker->randomElement([
                'staple',
                'cash',
                'subsidized fuel',
                'health'
            ]),
            'amount' => $this->faker->randomFloat(2, 10000, 100000),
            'provider' => $this->faker->Company,
            'description' => $this->faker->sentence,
            'is_available' => $this->faker->boolean(),
        ];
    }
}
