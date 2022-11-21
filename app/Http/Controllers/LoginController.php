<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

   public function index(){  
    return view('/login');
   }
   public function register(){
      return view('register');
  }
  public function regis(Request $req){
    User::create([
        'name' => $req->name,
        'email' => $req->email,
        'password' =>bcrypt($req->password),
        'remember_token' => Str::random(60),
     ]);
     return redirect('/login');
  }
   
   public function loginuser(Request $req){
      if(Auth::attempt($req->only('email','password'))){
         return redirect('/companiesdata');
      }
      return redirect('/login');
   }
   public function logout(){
      Auth::logout();
      return redirect('/login');
  }
}
