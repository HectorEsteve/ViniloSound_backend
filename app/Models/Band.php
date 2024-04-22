<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Band extends Model{
    use HasFactory;

    protected $fillable = [
        'name',
        'members_count',
        'members',
        'formation_year',
        'country',
    ];

    //recupera los vinilos de la banda (relaciion N:M)
    public function vinyls(){
        return $this->belongsToMany(Vinyl::class);
    }

    //recupera las canciones de la banda (relaciion 1:N)
    public function songs(){
        return $this->hasMany(Song::class);
    }
}
