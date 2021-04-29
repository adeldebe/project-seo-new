<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\User;



class LoginController extends Controller
{
    public function login() {
    	return view('auth.login');
    }

    public function postlogin(Request $request)
    {
    	if( Auth::attempt($request->only('email','password'))) 
        {
    		return redirect('/');
    	}
    	return redirect('/login');
    }

    public function logout() {
    	Auth::logout();
    	return redirect('/login');
    }

    public function register() {
        return view('auth.register');
    }

    public function postregister(Request $request) {
        $user = User::create([
            'name'     => $request->input('name'),
            'email'    => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);

        // event(new Registered($user));

        return redirect('/login');
    }

}
