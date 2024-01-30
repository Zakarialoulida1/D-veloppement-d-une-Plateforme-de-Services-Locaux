<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeuserrequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class logincontroller extends Controller
{
  public function show(){
    return view('login.show');
  }
  public function register(){

    return view('auth.show');
  }
  public function storeUser(storeuserrequest $request){
    $validated = $request->validated();
    $validated['password'] = Hash::make($request->password);
    User::create($validated);
    return redirect()->route('login.show')->with('success', '  votre Compte est bien crée ');
  }
}
