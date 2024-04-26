<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Band;

class BandFactory extends Factory{
    protected $model = Band::class;
    public function definition(): array{
        return [
            'name' => $this->faker->unique()->word,
            'members_count' => $this->faker->numberBetween(1, 9),
            'members' => $this->faker->text,
            'formation_year' => $this->faker->numberBetween(1960, 2024),
            'country' => $this->faker->country,
        ];
    }
}
