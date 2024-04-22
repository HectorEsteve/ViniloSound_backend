<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{
        $genres = [
            [
                'name' => 'Gospel',
                'history' => 'La música gospel es un género de música cristiana que se originó en los Estados Unidos en el siglo XVIII.',
                'description' => 'La música gospel se caracteriza por su ritmo enérgico, armonías vocales y letras religiosas.',
            ],
            [
                'name' => 'Folk',
                'history' => 'La música folk es un género musical que se originó en las comunidades rurales de América en el siglo XIX.',
                'description' => 'La música folk se caracteriza por su simplicidad, letras narrativas y uso de instrumentos acústicos.',
            ],
            [
                'name' => 'Country',
                'history' => 'La música country es un género de música popular que se originó en el sur de Estados Unidos a principios del siglo XX.',
                'description' => 'La música country a menudo consiste en baladas y melodías bailables con formas simples, letras folclóricas y armonías.',
            ],
            [
                'name' => 'Techno',
                'history' => 'El techno es un género de música electrónica que se originó en Detroit, Michigan, a mediados y finales de la década de 1980.',
                'description' => 'La música techno se caracteriza por sus ritmos repetitivos, sonidos sintetizados y temas futuristas.',
            ],
            [
                'name' => 'Ska',
                'history' => 'El ska es un género de música que se originó en Jamaica a finales de la década de 1950.',
                'description' => 'La música ska combina elementos del mento y calipso caribeños con el jazz estadounidense y el rhythm and blues.',
            ],
            [
                'name' => 'Trap',
                'history' => 'El trap es un subgénero de la música hip hop que se originó en el sur de Estados Unidos a finales de la década de 1990.',
                'description' => 'El trap se caracteriza por su contenido lírico ominoso y crudo y sus instrumentales escasos y oscuros.',
            ],
            [
                'name' => 'Drill',
                'history' => 'La música drill es un estilo de música hip hop que se originó en Chicago a principios de la década de 2010.',
                'description' => 'La música drill se caracteriza por sus letras agresivas y ritmos sombríos, a menudo discutiendo la vida en la calle y la violencia.',
            ],
            [
                'name' => 'Drum and Bass',
                'history' => 'El drum and bass es un género de música electrónica que se originó en el Reino Unido a principios de la década de 1990.',
                'description' => 'La música drum and bass se caracteriza por sus rápidos breakbeats y líneas de bajo pesadas, a menudo con influencias de la música jungle y dub.',
            ],
            [
                'name' => 'Garage',
                'history' => 'La música garage es un género de música electrónica que se originó en el Reino Unido a principios de la década de 1990.',
                'description' => 'La música garage se caracteriza por sus ritmos sincopados, muestras cortadas y voces soul.',
            ],
            [
                'name' => 'Flamenco',
                'history' => 'El flamenco es un género de música y baile que se originó en la región andaluza de España en el siglo XVIII.',
                'description' => 'La música flamenca se caracteriza por su intensidad emocional, ritmos intrincados y voces y guitarra apasionadas.',
            ],
            [
                'name' => 'Pasodoble',
                'history' => 'El pasodoble es un estilo animado de música de baile que se originó en España en el siglo XVIII.',
                'description' => 'La música pasodoble a menudo se asocia con las corridas de toros y las marchas militares, y se caracteriza por su fuerte ritmo parecido a una marcha.',
            ],
            [
                'name' => 'Heavy Metal',
                'history' => 'El heavy metal es un género de música rock que se originó a finales de los años 60 y principios de los 70, principalmente en el Reino Unido y Estados Unidos.',
                'description' => 'La música heavy metal se caracteriza por sus guitarras distorsionadas y fuertes, voces agresivas y potente percusión, a menudo con temas de rebeldía y angustia.',
            ],
            [
                'name' => 'Salsa',
                'history' => 'La salsa es un género de música latina que se originó en el Caribe, particularmente en Cuba, en la década de 1960 y 1970.',
                'description' => 'La música salsa se caracteriza por sus ritmos contagiosos, beats sincopados y una instrumentación animada, a menudo con trompetas, percusión y piano.',
            ],
            [
                'name' => 'Bachata',
                'history' => 'La bachata es un género de música latinoamericana que se originó en la República Dominicana a principios del siglo XX.',
                'description' => 'La música bachata se caracteriza por sus letras románticas, melodías melancólicas y un estilo distintivo de guitarra, a menudo con temas de amor, desamor y anhelo.',
            ],
            [
                'name' => 'Mambo',
                'history' => 'El mambo es un género de música de baile latino que se originó en Cuba a finales de la década de 1930.',
                'description' => 'La música mambo se caracteriza por sus ritmos sincopados, arreglos con énfasis en los metales y ritmos de baile enérgicos, a menudo incorporando elementos de jazz y música afrocubana.',
            ],
            [
                'name' => 'Cumbia',
                'history' => 'La cumbia es un género de música y baile que se originó en Colombia en el siglo XVII.',
                'description' => 'La música cumbia se caracteriza por su ritmo contagioso, instrumentación melódica y voces de llamada y respuesta, a menudo con acordeón, guitarra y percusión.',
            ],
            [
                'name' => 'Tango',
                'history' => 'El tango es un género de música y baile que se originó en la región del Río de la Plata de Argentina y Uruguay a finales del siglo XIX.',
                'description' => 'La música tango se caracteriza por sus melodías melancólicas, letras dramáticas e instrumentación apasionada, a menudo con acordeón, violín y bandoneón.',
            ],
            [
                'name' => 'Rumba',
                'history' => 'La rumba es un género de música y baile afrocubano que se originó a principios del siglo XX.',
                'description' => 'La música rumba se caracteriza por sus ritmos sincopados, voces de llamada y respuesta y percusión enérgica, a menudo con tambores, claves y otros instrumentos de percusión de mano.',
            ],
            [
                'name' => 'Bolero',
                'history' => 'El bolero es un género de música latina que se originó en Cuba a finales del siglo XIX.',
                'description' => 'La música bolero se caracteriza por su tempo lento, letras románticas y una instrumentación exuberante, a menudo con guitarra, piano y cuerdas.',
            ],
            [
                'name' => 'Grunge',
                'history' => 'El grunge es un género de música rock alternativa que se originó en la región del noroeste del Pacífico de los Estados Unidos a mediados de la década de 1980.',
                'description' => 'La música grunge se caracteriza por sus guitarras distorsionadas, letras llenas de angustia y un sonido crudo y sin pulir, a menudo con influencias del punk y el heavy metal.',
            ],
            [
                'name' => 'Punk',
                'history' => 'El punk rock es un género de música rock que se originó a mediados de la década de 1970, principalmente en los Estados Unidos y el Reino Unido.',
                'description' => 'La música punk se caracteriza por sus tempos rápidos, canciones cortas y simples, y letras anti-establishment, a menudo con producción casera y una actitud rebelde.',
            ],
            [
                'name' => 'Bossa Nova',
                'history' => 'La Bossa Nova es un género de música brasileña que se originó a finales de la década de 1950 y principios de la década de 1960.',
                'description' => 'La música Bossa Nova se caracteriza por sus ritmos suaves, melodías fluidas y armonías sutiles, a menudo con guitarra, piano y percusión.',
            ],
            [
                'name' => 'Fado',
                'history' => 'El fado es un género de música portuguesa que se originó en Lisboa a principios del siglo XIX.',
                'description' => 'La música fado se caracteriza por sus voces melancólicas, expresivos toques de guitarra y melodías conmovedoras, a menudo con temas de amor, añoranza y destino.',
            ],
            [
                'name' => 'Ranchera',
                'history' => 'La ranchera es un género de música mexicana que se originó a finales del siglo XIX.',
                'description' => 'La música ranchera se caracteriza por sus ritmos animados, voces emotivas y temas de amor, patriotismo y vida rural, a menudo con acordeón, guitarra y trompeta.',
            ],
            [
                'name' => 'Dembow',
                'history' => 'El dembow es un género de música reggaeton que se originó en Jamaica y más tarde se hizo popular en la República Dominicana a finales de la década de 1990.',
                'description' => 'La música dembow se caracteriza por su ritmo rápido, beat repetitivo y letras explícitamente sexuales, a menudo con sonidos electrónicos y sintetizadores.',
            ],
            [
                'name' => 'Dancehall',
                'history' => 'El dancehall es un género de música popular jamaicana que se originó a finales de la década de 1970.',
                'description' => 'La música dancehall se caracteriza por sus líneas de bajo pesadas, instrumentación escasa y contenido lírico centrado en temas sociales y políticos, así como en el baile y la fiesta.',
            ],
            [
                'name' => 'New Age',
                'history' => 'La música New Age es un género de música que se originó en la década de 1970 y está asociado con la relajación, la meditación y la espiritualidad.',
                'description' => 'La música New Age a menudo presenta sintetizadores, sonidos ambientales y sonidos de la naturaleza, creando un ambiente pacífico y tranquilo para los oyentes.',
            ],
            [
                'name' => 'Rock & Roll',
                'history' => 'El rock and roll es un género de música popular que se originó en los Estados Unidos a finales de la década de 1940 y principios de la década de 1950.',
                'description' => 'La música rock and roll se caracteriza por sus ritmos enérgicos, melodías pegajosas y letras a menudo rebeldes, a menudo con guitarra eléctrica, bajo y batería.',
            ],
            [
                'name' => 'Dance',
                'history' => 'La música de baile es un género de música electrónica que se originó en la década de 1980, principalmente en clubes nocturnos y discotecas.',
                'description' => 'La música de baile se caracteriza por su ritmo frenético, ritmos repetitivos y melodías de sintetizador, a menudo con voces y muestras.',
            ],
            [
                'name' => 'K-Pop',
                'history' => 'El K-Pop es un género de música popular que se originó en Corea del Sur en la década de 1990.',
                'description' => 'La música K-Pop se caracteriza por sus melodías pegajosas, coreografías elaboradas y videos musicales visualmente impresionantes, a menudo con grupos de cantantes y bailarines.',
            ],
            [
                'name' => 'Experimental',
                'history' => 'La música experimental es un género de música que empuja los límites de las convenciones musicales tradicionales y explora nuevos sonidos, técnicas e ideas.',
                'description' => 'La música experimental puede abarcar una amplia gama de estilos y enfoques, desde composiciones de vanguardia hasta paisajes sonoros electrónicos y presentaciones improvisadas.',
            ],
            [
                'name' => 'Benga',
                'history' => 'El Benga es un género de música popular de Kenia que se originó en Nairobi a finales de la década de 1940.',
                'description' => 'La música Benga se caracteriza por su tempo animado, melodías impulsadas por la guitarra eléctrica y letras en suajili, a menudo con voces de llamada y respuesta y ritmos africanos tradicionales.',
            ],
            [
                'name' => 'Afro-beat',
                'history' => 'El Afro-beat es un género de música que se originó en Nigeria a finales de la década de 1960 y principios de la década de 1970, combinando elementos de la música tradicional del oeste africano con jazz, funk y highlife.',
                'description' => 'La música Afro-beat se caracteriza por sus ritmos complejos, líneas de bajo funk, y letras socialmente conscientes, a menudo con secciones instrumentales extendidas y solos improvisados.',
            ],
            [
                'name' => 'Fuji',
                'history' => 'El Fuji es un género de música popular nigeriana que se originó en Lagos a finales de la década de 1960.',
                'description' => 'La música Fuji se caracteriza por su tempo rápido, ritmos energéticos, y voces de llamada y respuesta, a menudo con instrumentos de percusión y modernos.',
            ],
            [
                'name' => 'Chaabi',
                'history' => 'El Chaabi es un género de música marroquí que se originó a principios del siglo XX, fusionando ritmos y melodías tradicionales del norte de África con influencias de la música andaluza y árabe.',
                'description' => 'La música Chaabi se caracteriza por sus ritmos animados, voces soulful, y rica instrumentación, a menudo con oud, violín y percusión.',
            ],
            [
                'name' => 'Highlife',
                'history' => 'El Highlife es un género de música del oeste de África que se originó en Ghana a principios del siglo XX.',
                'description' => 'La música Highlife se caracteriza por sus ritmos pegajosos, líneas melódicas de guitarra, y tempo animado, a menudo con voces de llamada y respuesta y secciones de metales.',
            ],
            [
                'name' => 'Clásica',
                'history' => 'La música clásica es un género de música que se originó en Europa occidental en el período comprendido entre los siglos IX y XX.',
                'description' => 'La música clásica es conocida por su complejidad musical, riqueza armónica y expresión emocional, y abarca una amplia variedad de estilos y formas, desde la música de cámara y la sinfonía hasta la ópera y el concierto.',
            ],
            [
                'name' => 'Jazz',
                'history' => 'El jazz es un género de música que se originó en los Estados Unidos en la segunda mitad del siglo XIX.',
                'description' => 'El jazz es conocido por su improvisación, ritmo sincopado y expresividad emocional, y abarca una amplia variedad de estilos, desde el ragtime y el swing hasta el bebop y el jazz fusion.',
            ],
            [
                'name' => 'Blues',
                'history' => 'El blues es un género de música que se originó en los Estados Unidos en el siglo XIX, influenciado por la música africana, el folk y los espirituales.',
                'description' => 'El blues es conocido por su estructura de acordes de 12 compases, letras melancólicas y expresión emocional, y ha sido una influencia importante en la música popular moderna, incluyendo el rock and roll y el jazz.',
            ],
            [
                'name' => 'Soul',
                'history' => 'El soul es un género de música que se originó en los Estados Unidos en la década de 1950 y alcanzó su apogeo en la década de 1960.',
                'description' => 'El soul es conocido por sus vocales emotivas, ritmos sincopados y letras profundas, y ha sido una influencia importante en la música popular, incluyendo el R&B, el funk y el hip hop.',
            ],
            [
                'name' => 'Disco',
                'history' => 'La música disco es un género de música que se originó en Estados Unidos en la década de 1970, con influencias del funk, el soul y la música electrónica.',
                'description' => 'La música disco es conocida por su ritmo de cuatro tiempos, ritmos de batería pulsantes y letras pegadizas, y se asoció con la cultura de la discoteca y la moda de la época.',
            ],
            [
                'name' => 'Reggae',
                'history' => 'El reggae es un género de música que se originó en Jamaica en la década de 1960, influenciado por el ska, el rocksteady y el rhythm and blues.',
                'description' => 'El reggae es conocido por su ritmo característico, llamado el "ritmo de reggae", y sus letras que abordan temas como la justicia social, la espiritualidad y la resistencia política.',
            ],
            [
                'name' => 'Rap',
                'history' => 'El rap es un género de música que se originó en la década de 1970 en la comunidad afroamericana en los Estados Unidos, como una forma de expresión artística y protesta social.',
                'description' => 'El rap es conocido por sus letras rítmicas y rimadas, que se recitan en un patrón rítmico sobre un fondo musical, a menudo acompañado de ritmos de percusión y muestras de otros géneros musicales.',
            ],
            [
                'name' => 'Reggaeton',
                'history' => 'El reguetón es un género de música que se originó en Puerto Rico en la década de 1990, influenciado por el reggae, el hip hop y la música latina.',
                'description' => 'El reguetón es conocido por su ritmo pegajoso y bailable, letras explícitas y temáticas sexuales, y se ha convertido en un género popular en toda América Latina y el mundo.',
            ],
            [
                'name' => 'Funk',
                'history' => 'El funk es un género de música que se originó en los Estados Unidos en la década de 1960, influenciado por el soul, el jazz y el rhythm and blues.',
                'description' => 'El funk es conocido por su ritmo sincopado, grooves pegajosos y líneas de bajo prominentes, y ha sido una influencia importante en la música popular, incluyendo el hip hop, el R&B y la música electrónica.',
            ],
            [
                'name' => 'Indie',
                'history' => 'El indie es un género de música que se caracteriza por su enfoque independiente y DIY (hazlo tú mismo), y su rechazo de las convenciones y expectativas de la industria musical mainstream.',
                'description' => 'El indie abarca una amplia variedad de estilos y sonidos, y a menudo se asocia con bandas y artistas que no están firmados con grandes sellos discográficos y que se centran en la creatividad y la autenticidad en lugar del éxito comercial.',
            ],
            [
                'name' => 'Pop',
                'history' => 'El pop es un género de música que se originó en los Estados Unidos en la década de 1950, como una forma comercial de la música rock and roll.',
                'description' => 'El pop es conocido por su estructura de canciones accesibles, melodías pegadizas y producción pulida, y ha sido una influencia dominante en la música popular desde su surgimiento.',
            ],
            [
                'name' => 'House',
                'history' => 'El house es un género de música electrónica que se originó en Chicago en la década de 1980, influenciado por el disco, el funk y la música electrónica europea.',
                'description' => 'El house es conocido por sus ritmos de cuatro tiempos, pulsaciones de bajo profundo y vocales sampleadas, y ha evolucionado en una amplia variedad de subgéneros y estilos.',
            ],
        ];

        foreach ($genres as $genreData) {
            $genre = new Genre();
            $genre->name = $genreData['name'];
            $genre->history = $genreData['history'];
            $genre->description = $genreData['description'];
            $genre->save();
        }
    }
}
