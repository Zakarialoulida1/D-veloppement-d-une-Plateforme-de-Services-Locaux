<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class informationcontroller extends Controller
{
    public function index(){
        return view('settings');
    }
}
