<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Song;

class DefaultSongSeeder extends Seeder{
    public function run() {

        $genre_id = 28;
        $band_id = 1;

        (new Song(['name' => '20th Century Fox Fanfare', 'lyrics' => $this->generateLyrics(), 'genre_id' => $genre_id, 'duration' => 210, 'band_id' => $band_id]))->save();
        (new Song(['name' => 'Somebody To Love', 'lyrics' => $this->generateLyrics(), 'genre_id' => $genre_id, 'duration' => 255, 'band_id' => $band_id]))->save();
        (new Song(['name' => 'Doing All Right - Smile', 'lyrics' => $this->generateLyrics(), 'genre_id' => $genre_id, 'duration' => 225, 'band_id' => $band_id]))->save();
        (new Song(['name' => 'Keep Yourself Alive', 'lyrics' => $this->generateLyrics(), 'genre_id' => $genre_id, 'duration' => 300, 'band_id' => $band_id]))->save();
        (new Song(['name' => 'Killer Queen', 'lyrics' => $this->generateLyrics(), 'genre_id' => $genre_id, 'duration' => 270, 'band_id' => $band_id]))->save();
        (new Song(['name' => 'Fat Bottomed Girls', 'lyrics' => $this->generateLyrics(), 'genre_id' => $genre_id, 'duration' => 195, 'band_id' => $band_id]))->save();
        (new Song(['name' => 'Bohemian Rhapsody', 'lyrics' => $this->generateLyrics(), 'genre_id' => $genre_id, 'duration' => 345, 'band_id' => $band_id]))->save();
        (new Song(['name' => 'Now I\'m Here', 'lyrics' => $this->generateLyrics(), 'genre_id' => $genre_id, 'duration' => 240, 'band_id' => $band_id]))->save();
        (new Song(['name' => 'Crazy Little Thing Called Love', 'lyrics' => $this->generateLyrics(), 'genre_id' => $genre_id, 'duration' => 210, 'band_id' => $band_id]))->save();
        (new Song(['name' => 'Love Of My Life', 'lyrics' => $this->generateLyrics(), 'genre_id' => $genre_id, 'duration' => 285, 'band_id' => $band_id]))->save();
        (new Song(['name' => 'We Will Rock You', 'lyrics' => $this->generateLyrics(), 'genre_id' => $genre_id, 'duration' => 210, 'band_id' => $band_id]))->save();
        (new Song(['name' => 'Another One Bites The Dust', 'lyrics' => $this->generateLyrics(), 'genre_id' => $genre_id, 'duration' => 255, 'band_id' => $band_id]))->save();
        (new Song(['name' => 'I Want To Break Free', 'lyrics' => $this->generateLyrics(), 'genre_id' => $genre_id, 'duration' => 300, 'band_id' => $band_id]))->save();
        (new Song(['name' => 'Under Pressure', 'lyrics' => $this->generateLyrics(), 'genre_id' => $genre_id, 'duration' => 270, 'band_id' => $band_id]))->save();
        (new Song(['name' => 'Who Wants To Live Forever', 'lyrics' => $this->generateLyrics(), 'genre_id' => $genre_id, 'duration' => 285, 'band_id' => $band_id]))->save();
        (new Song(['name' => 'Bohemian Rhapsody', 'lyrics' => $this->generateLyrics(), 'genre_id' => $genre_id, 'duration' => 345, 'band_id' => $band_id]))->save();
        (new Song(['name' => 'Radio Ga Ga', 'lyrics' => $this->generateLyrics(), 'genre_id' => $genre_id, 'duration' => 270, 'band_id' => $band_id]))->save();
        (new Song(['name' => 'AyOh', 'lyrics' => $this->generateLyrics(), 'genre_id' => $genre_id, 'duration' => 240, 'band_id' => $band_id]))->save();
        (new Song(['name' => 'Hammer To Fall', 'lyrics' => $this->generateLyrics(), 'genre_id' => $genre_id, 'duration' => 195, 'band_id' => $band_id]))->save();
        (new Song(['name' => 'We Are The Champions', 'lyrics' => $this->generateLyrics(), 'genre_id' => $genre_id, 'duration' => 285, 'band_id' => $band_id]))->save();

        Song::factory()->count(500)->create();
    }

    private function generateLyrics(){
        return 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ullamcorper auctor condimentum. Fusce quis tortor id dolor lacinia rhoncus. Quisque suscipit ultricies quam, sed ultricies odio accumsan vel. Sed imperdiet consequat ligula, a aliquam leo convallis eu. Vestibulum nec purus velit. Proin vitae finibus velit. Nullam vel eros nec elit vestibulum faucibus. Maecenas volutpat enim a metus condimentum, eget vehicula libero gravida. Integer vel lacinia turpis. Nullam id mi et nisl venenatis laoreet.';
    }
}
