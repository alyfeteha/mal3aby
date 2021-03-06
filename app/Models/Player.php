<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $guarded=[];
    public $timestamps = false;
    public function ratings(){

        return $this->hasMany('App\Models\Rating');
    }

    public function reservations(){

        return $this->hasMany('App\Models\Reservation');
    }
}
