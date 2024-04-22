<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Format extends Model{
    use HasFactory;

    protected $fillable = [
        'name',
        'diameter',
        'rpm',
        'duration_side',
    ];

    //vinilos con ese formato (relación 1:N).
    public function vinyls() {
        return $this->hasMany(Vinyl::class);
    }
}
