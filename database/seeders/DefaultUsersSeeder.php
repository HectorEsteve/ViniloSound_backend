<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DefaultUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{
        $user1 = new User();
        $user1->name = 'root';
        $user1->email = 'root@gmail.com';
        $user1->password = bcrypt( 'root' );
        $user1->save();

        $user2 = new User();
        $user2->name = 'admin';
        $user2->email = 'admin@gmail.com';
        $user2->password = bcrypt( 'admin' );
        $user2->save();

        User::factory()->count(10)->create();
    }
}
