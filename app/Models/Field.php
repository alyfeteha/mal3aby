<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;
    
    protected $guarded=[];
    public $timestamps = false;

    public function description(){

        return $this->hasOne('App\Models\Description');
    }

    public function owner(){

        return $this->belongsTo('APP\Models\Owner');
    }

    public function ratings(){

        return $this->hasMany('App\Models\Rating');
    }

    public function reservations(){

        return $this->hasMany('App\Models\Reservation');
    }
}
