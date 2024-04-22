<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecordCompany extends Model{
    protected $table = 'record_companies';
    use HasFactory;

    protected $fillable = [
        'name',
        'logo_url',
        'active',
        'website_url',
    ];

    //Recupera los vinilos asociados a la discográfica (relación 1:N).
    public function vinyls(){
        return $this->hasMany(Vinyl::class);
    }
}
