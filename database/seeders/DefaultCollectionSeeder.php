<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Collection;
use App\Models\User;

class DefaultCollectionSeeder extends Seeder{

    public function run(): void {
        $users = User::all();

        foreach ($users as $user) {
            $probability = rand(1, 100);

            if ($probability <= 75) {
                Collection::factory()->create([
                    'user_id' => $user->id,
                ]);
            }
        }
    }
}
