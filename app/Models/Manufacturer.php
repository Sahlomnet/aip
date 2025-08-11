<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    use HasFactory;

    // Relaciones Uno a Muchos
    public function assets(){
        return $this->hasMany(Asset::class);
    }

    public function procesors(){
        return $this->hasMany(Procesor::class);
    }

    public function rams(){
        return $this->hasMany(Ram::class);
    }

    public function storages(){
        return $this->hasMany(Storage::class);
    }

    public function networks(){
        return $this->hasMany(Network::class);
    }

    public function licenses(){
        return $this->hasMany(License::class);
    }

    
    
}
