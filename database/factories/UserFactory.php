<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory{

    protected static ?string $password;
    private $sequence = 0;

    public function definition(): array {

        $this->sequence++;

        return [
            'name' => 'user' . $this->sequence,
            'email' => 'user' . $this->sequence . '@gmail.com',
            'password' => bcrypt('0000'),
        ];
    }
}
