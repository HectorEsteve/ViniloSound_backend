<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'points',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    //Obtiene los roles asociados a un usuaio (relación m:n).
    public function roles(){
        return $this->belongsToMany(Rol::class);
    }

    //coleccion asociada al usuario (relación 1:1).
    public function collection(){
        return $this->hasOne(Collection::class);
    }
}
