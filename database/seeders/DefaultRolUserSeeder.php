<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Rol;

class DefaultRolUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{

        $userRoot = User::where('name', 'root')->first();
        if ($userRoot) {
            $userRoot->roles()->attach([1, 4, 5]);
        }

        $userAdmin = User::where('name', 'admin')->first();
        if ($userAdmin) {
            $userAdmin->roles()->attach([1, 4]);
        }

        $usersWithRole1 = User::where('name', 'LIKE', 'user%')->get();
        foreach ($usersWithRole1 as $user) {
            $user->roles()->attach(1);
        }
    }
}
