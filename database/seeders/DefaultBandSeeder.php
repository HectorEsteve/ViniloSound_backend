<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Band;


class DefaultBandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{

        $band = new Band();
        $band->name = 'Queen';
        $band->members_count = 4;
        $band->members = 'Freddie Mercury, Brian May, Roger Taylor, John Deacon';
        $band->formation_year = 1970;
        $band->country = 'United Kingdom';
        $band->save();

        Band::factory()->count(50)->create();
    }
}
