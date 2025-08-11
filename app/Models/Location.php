<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    // Relaciones Uno a Muchos
    // public function people(){
    //     return $this->hasMany(People::class);
    // }

    public function placements(){
        return $this->hasMany(Placement::class);
    }

    // public function assets(){
    //     return $this->hasMany(Asset::class);
    // }



}
