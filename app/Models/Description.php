<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    use HasFactory;
    
    protected $guarded=[];
    public $timestamps = false;

    public function field(){

        return $this->belongsTo('App\Models\Field');
    }
}
