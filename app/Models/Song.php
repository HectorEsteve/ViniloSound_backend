<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model{
    use HasFactory;

    protected $fillable = [
        'name',
        'duration',
        'lyrics',
        'video_url',
        'audio_url'
    ];

    //Recupera los vinilos con esa cancion (relación m:n).
    public function vinyls(){
        return $this->belongsToMany(Vinyl::class);
    }

    //genero de la cancion (relación 1:N inversa).
    public function genre(){
        return $this->belongsTo(Genre::class);
    }

    //Grupo de la cancion (relación 1:N inversa).
    public function band(){
        return $this->belongsTo(Band::class);
    }

}
