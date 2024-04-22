<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model{
    use HasFactory;

    protected $fillable = [
        'name',
        'history',
        'description',
    ];

    //canciones de un genero (relación 1:N).
    public function songs(){
        return $this->hasMany(Song::class);
    }
}
