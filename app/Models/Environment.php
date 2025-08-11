<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Environment extends Model
{
    use HasFactory;

    // Relaciones Uno a Muchos Inversa
    public function asset(){
        return $this->belongsTo(Asset::class);
    }
    
}
