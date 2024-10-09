<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){
        $sati = date('h');
  
        $time = date('h:i:s');
        return view('welcome', compact('time','sati'));
    }
}

