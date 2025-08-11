<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    // Relaciones Uno a Muchos
    public function placements(){
        return $this->hasMany(Placement::class);
    }
}
