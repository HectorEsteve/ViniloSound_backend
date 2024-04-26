<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'number_vinyls',
        'rating',
        'public',
        'user_id',
    ];

    protected $hidden = [
        'user_id',
    ];

    //Usuario al que pertenece la coleccion (relación 1:1).
    public function user(){
        return $this->belongsTo(User::class);
    }

    // Obtiene los vinilos asociados a la colección (relación m:n).
    public function vinyls(){
        return $this->belongsToMany(Vinyl::class);
    }
}
