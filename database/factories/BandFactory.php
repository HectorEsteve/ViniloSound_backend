<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Band;

class BandFactory extends Factory{
    protected $model = Band::class;
    public function definition(): array {
        $membersCount = $this->faker->numberBetween(1, 9);
        $membersString = $this->faker->words($membersCount, true);
        $membersString = str_replace(' ', ', ', $membersString);

        return [
            'name' => $this->faker->unique()->word,
            'members_count' => $membersCount,
            'members' => $membersString,
            'formation_year' => $this->faker->numberBetween(1960, 2024),
            'country' => $this->faker->country,
        ];
    }
}
