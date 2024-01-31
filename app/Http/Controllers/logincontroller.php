<?php

namespace App\Http\Controllers;

use App\Http\Requests\loginformrequest;
use App\Http\Requests\storeuserrequest;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class logincontroller extends Controller
{
  public function show(){
    return view('login.show');
  }

  public function login(loginformrequest $request){
   
    $validated=$request->validated();
    if(Auth::attempt($validated)){
      $request->session()->regenerate();
     return redirect()->intended(route('profil.index')) ;
    }
    return to_route('login.show')->withErrors([
      'email'=>'invalid email or password incorrect',
    ])->onlyInput('email');
  }
   public function logout(){
    Auth::logout();
    return to_route('login.show');
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
