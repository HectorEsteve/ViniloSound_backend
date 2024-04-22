<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VinylFactory extends Factory{
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(3),
            'cover_url' => $this->faker->optional()->imageUrl(),
            'publication_year' => $this->faker->numberBetween(1970, 2022),
            'edition_year' => $this->faker->numberBetween(19700, 2022),
            'format_id' => $this->faker->numberBetween(1, 8), // Assuming there are 5 format types
            'record_company_id' => $this->faker->numberBetween(1, 3), // Assuming there are 10 record companies
        ];
    }
}
