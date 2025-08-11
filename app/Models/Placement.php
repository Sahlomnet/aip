<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Placement extends Model
{
    use HasFactory;

    // Relaciones Uno a Muchos
    public function assets(){
        return $this->hasMany(Asset::class);
    }

    public function movements(){
        return $this->hasMany(Movement::class);
    }
    
    // Relaciones Uno a Muchos Inversa
    public function location(){
        return $this->belongsTo(Location::class);
    }

    public function people(){
        return $this->belongsTo(People::class);
    }
}
