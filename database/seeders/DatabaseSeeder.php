<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void{
        $this->call(DefaultUsersSeeder::class);
        $this->call(RolSeeder::class);
        $this->call(DefaultRolUserSeeder::class);
        $this->call(GenreSeeder::class);
        $this->call(DefaultRecordCompanySeeder::class);
        $this->call(FormatSeeder::class);
        $this->call(DefaultBandSeeder::class);
        $this->call(DefaultSongSeeder::class);
        $this->call(DefaultVinylSeeder::class);
        $this->call(DefaultBandVinylSeeder::class);
        $this->call(DefaultSongVinylSeeder::class);
        $this->call(DefaultCollectionSeeder::class);
        $this->call(DefaultCollectionVinylSeeder::class);
    }
}
