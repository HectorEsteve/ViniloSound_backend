<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DefaultSongVinylSeeder extends Seeder{
    public function run(){

        foreach (range(1, 20) as $songId) {
            DB::table('song_vinyl')->insert([
                'vinyl_id' => 1,
                'song_id' => $songId,
            ]);
        }

        $bandVinyls = DB::table('band_vinyl')->get();

        $singleBandVinyls = collect([]);
        $multipleBandsVinyls = collect([]);

        foreach ($bandVinyls as $bandVinyl) {
            if ($bandVinyl->vinyl_id === 1) {
                continue;
            }
            $bandsCount = DB::table('band_vinyl')->where('vinyl_id', $bandVinyl->vinyl_id)->count();

            if ($bandsCount === 1) {
                $singleBandVinyls->push($bandVinyl);
            } else {
                $multipleBandsVinyls->push($bandVinyl);
            }
        }

        foreach ($singleBandVinyls as $bandVinyl) {
            $songs = DB::table('songs')->where('band_id', $bandVinyl->band_id)->pluck('id')->toArray();

            $selectedSongs = collect($songs)->shuffle()->unique()->take(rand(6, 12))->toArray();

            foreach ($selectedSongs as $songId) {
                DB::table('song_vinyl')->insert([
                    'vinyl_id' => $bandVinyl->vinyl_id,
                    'song_id' => $songId,
                ]);
            }
        }

        foreach ($multipleBandsVinyls as $bandVinyl) {
            $bands = DB::table('band_vinyl')->where('vinyl_id', $bandVinyl->vinyl_id)->pluck('band_id')->toArray();

            foreach ($bands as $bandId) {
                $songs = DB::table('songs')->where('band_id', $bandId)->pluck('id')->toArray();

                $selectedSongs = collect($songs)->shuffle()->take(rand(1, 2))->toArray();

                foreach ($selectedSongs as $songId) {
                    DB::table('song_vinyl')->insert([
                        'vinyl_id' => $bandVinyl->vinyl_id,
                        'song_id' => $songId,
                    ]);
                }
            }
        }
    }
}
