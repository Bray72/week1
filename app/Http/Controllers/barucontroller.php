<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pp;

class barucontroller extends Controller
{
    public function barunovel(){
       
        return view('baru.barunovel');
    }
    public function barubiografi(){
       
        return view('baru.barubiografi');
    }
    public function barukomik(){
       
        return view('baru.barukomik');
    }
    public function store()
    {
        
        return view('baru.store');
    }
}