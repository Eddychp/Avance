<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;
    public function Families(){
        return $this->hasMany(Family::class);
    }

    public function Associates(){
        return $this->hasMany(Associate::class);
    }

    public function Location(){
        return $this->belongsTo(Location::class);
    }
}
