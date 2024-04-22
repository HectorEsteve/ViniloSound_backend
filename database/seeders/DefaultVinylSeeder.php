<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vinyl;


class DefaultVinylSeeder extends Seeder{
    public function run(): void {
        Vinyl::create([
            'name' => 'Bohemian Rhapsody',
            'cover_url' => 'https://m.media-amazon.com/images/S/aplus-media/sota/07041e4b-770a-4ba0-a91e-e4c3d1bcf545.__CR0,0,1080,1080_PT0_SX300_V1___.jpg',
            'publication_year' => 1974,
            'edition_year' => 2019,
            'format_id' => 1,
            'record_company_id' => 2,
        ]);

        Vinyl::factory()->count(50)->create();
    }
}
