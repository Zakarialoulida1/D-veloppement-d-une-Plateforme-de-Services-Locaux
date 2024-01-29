<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    //
    public function  index(Request $request)
    {   
       $users=[
        ['id'=>1 , 'name'=>'zakaria', 'lastname'=>'loulida'],
        ['id'=>2 , 'name'=>'ahmed', 'lastname'=>'loulida'],
        ['id'=>3 , 'name'=>'hamza', 'lastname'=>'loulida'],
       ];
        return view('home',compact('users'));
    }
}
