<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayerindexController extends Controller
{
    public function index (){

        return view('Player\index');
        
    }

    public function show($id){

    }
}
