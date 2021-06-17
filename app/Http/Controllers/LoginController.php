<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use PhpParser\Node\Expr\FuncCall;

class LoginController extends Controller
{
    public function login(LoginRequest $request){
         //  $credentials = request()->only('email','password');
  /*  $credentials = $request->validate([
        'email' => ['required','email','string'],
        'password'=>['required','string']
    ]);*/
    $credentials = $request->validated();
    $remember = $request->filled('remember');
    if ( Auth::attempt($credentials,$remember)){
        $request->session()->regenerate();
        return redirect()->intended('dashboard')->with('estatus','inicio de sesion exitoso');
    }
        throw ValidationException::withMessages([
            'email'=> __('auth.failed')
        ]);
        //return redirect('login');
    }
    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
