<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Http\Controllers\Controller\Auth\Auth;
use App\Http\Controllers\Auth\AuthController\Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(){
        return view('auth/login');
    }

    public function signup(){
        return view('auth/signup');
    }

    public function postSignup(Request $request){
        
      $input = $request->all();

      User::create([
        'name' => $input['name'],
        'email' => $input['email'],
        'password' => Hash::make($input['password'])

      ]);
      return view('auth/login');
      
        
    }

    public function logout(){
        Session::flush();
        Auth::logout();

        return redirect('login');
    }

   
} 