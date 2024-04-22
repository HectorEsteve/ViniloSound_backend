<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Collection;
use App\Models\Vinyl;

class DefaultCollectionVinylSeeder extends Seeder{
    public function run(): void{
        // Obtener todas las colecciones
        $collections = Collection::all();

        // Iterar sobre cada colección
        foreach ($collections as $collection) {
            // Obtener el número de vinilos de la colección actual
            $vinylsCount = $collection->number_vinyls;

            // Obtener una lista aleatoria de vinilos para esta colección
            $vinyls = Vinyl::inRandomOrder()->limit($vinylsCount)->pluck('id')->toArray();

            // Asignar los vinilos a la colección actual
            $collection->vinyls()->attach($vinyls);
        }
    }
}
