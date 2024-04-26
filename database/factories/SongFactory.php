<?php

namespace Database\Factories;

use App\Models\Song;
use Illuminate\Database\Eloquent\Factories\Factory;

class SongFactory extends Factory{
    protected $model = Song::class;

    public function definition(){
        return [
            'name' => $this->faker->sentence(3),
            'lyrics' => $this->faker->paragraphs(3, true),
            'video_url' => $this->faker->optional()->url(),
            'audio_url' => $this->faker->optional()->url(),
            'genre_id' => $this->faker->numberBetween(1, 48),
            'band_id' => $this->faker->numberBetween(2, 50),
            'duration' => $this->faker->numberBetween(60, 300)
        ];
    }
}
