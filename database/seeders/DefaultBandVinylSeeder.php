<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vinyl;
use App\Models\Band;
use Illuminate\Support\Facades\DB;

class DefaultBandVinylSeeder extends Seeder{
    public function run(): void{
        $vinyls = Vinyl::where('id', '!=', 1)->get();
        $bands = Band::where('id', '!=', 1)->get();

        $multiBandVinylCount = (int) (count($vinyls) * 0.1);

        foreach ($vinyls as $index => $vinyl) {
            if ($multiBandVinylCount > 0 && $index < $multiBandVinylCount) {
                $bandsCount = rand(2, ceil(count($bands) / 2));
            } else {
                $bandsCount = 1;
            }

            $randomBands = $bands->random($bandsCount);

            foreach ($randomBands as $band) {
                DB::table('band_vinyl')->insert([
                    'vinyl_id' => $vinyl->id,
                    'band_id' => $band->id,
                ]);
            }
        }
    }
}
