<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function player(){

        return $this->belongsTo('App\Models\Player');
    }

    public function field(){

        return $this->belongsTo('App\Models\Field');
    }
}
