<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vinyl extends Model{
    use HasFactory;

    protected $fillable = [
        'name',
        'cover_url',
        'publication_year',
        'edition_year',
    ];

    //Recupera las colecciones asociadas al vinilo (relación m:n).
    public function collections(){
        return $this->belongsToMany(Collection::class);
    }

    //Formato del vinilo (relación 1:N inversa).
    public function format(){
        return $this->belongsTo(Format::class);
    }

    //Discografica del vinilo (relación 1:N inversa).
    public function recordCompany(){
        return $this->belongsTo(RecordCompany::class);
    }

    //Recupera las bandas asociadas al vinilo (relación m:n).
    public function bands(){
        return $this->belongsToMany(Band::class);
    }

    //Recupera las canciones asociadas al vinilo (relación m:n).
    public function songs(){
        return $this->belongsToMany(Song::class);
    }
}
