<?php

namespace Database\Factories;

use App\Models\Collection;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CollectionFactory extends Factory
{
    protected $model = Collection::class;

    public function definition(){

        $vinylsCount = $this->faker->numberBetween(5, 15);

        return [
            'user_id' => 0,
            'name' => $this->faker->sentence(3),
            'number_vinyls' => $vinylsCount,
        ];

    }
}
