<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    // Relaciones Uno a Muchos
    public function movements(){
        return $this->hasMany(Movement::class);
    }
    
    public function environments(){
        return $this->hasMany(Environment::class);
    }
    
    public function processors(){
        return $this->hasMany(Processor::class);
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
    
    // Relaciones Uno a Muchos Inversa
    public function status(){
        return $this->belongsTo(Status::class);
    }

    public function manufacturer(){
        return $this->belongsTo(Manufacturer::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function usage(){
        return $this->belongsTo(Usage::class);
    }

    public function placement(){
        return $this->belongsTo(Placement::class);
    }

    // public function people(){
    //     return $this->belongsTo(People::class);
    // }

}
