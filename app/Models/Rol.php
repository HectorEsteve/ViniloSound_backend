<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model{
    protected $table = 'roles';
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    // Obtiene los usuarios asociados a un rol (relación m:n).
    public function users(){
        return $this->belongsToMany(User::class);
    }
}
