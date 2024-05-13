<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VinylFactory extends Factory{
    public function definition(): array
{
    $publicationYear = $this->faker->numberBetween(1970, 2022);
    return [
        'name' => $this->faker->sentence(3),
        'cover_url' => $this->faker->optional()->imageUrl(),
        'publication_year' => $publicationYear,
        'edition_year' => $this->faker->numberBetween($publicationYear, 2022), // Asegura que sea mayor o igual al año de publicación
        'format_id' => $this->faker->numberBetween(1, 8), // Suponiendo que hay 5 tipos de formato
        'record_company_id' => $this->faker->numberBetween(1, 3), // Suponiendo que hay 10 compañías discográficas
    ];
}
}
