<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movement extends Model
{
    use HasFactory;

    // Relaciones Uno a Muchos Inversa
    public function placement(){
        return $this->belongsTo(Placement::class);
    }

    public function asset(){
        return $this->belongsTo(Asset::class);
    }

    // public function people(){
    //     return $this->belongsTo(People::class);
    // }

}
