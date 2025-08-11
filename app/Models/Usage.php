<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usage extends Model
{
    use HasFactory;

    // Relaciones Uno a Muchos
    public function assets(){
        return $this->hasMany(Asset::class);
    }
}
