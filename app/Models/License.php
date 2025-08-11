<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    use HasFactory;

    // Relaciones Uno a Muchos Inversa
    public function manufacturer(){
        return $this->belongsTo(Manufacturer::class);
    }

    public function asset(){
        return $this->belongsTo(Asset::class);
    }

    
}
