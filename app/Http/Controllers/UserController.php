<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Auth;


class UserController extends Controller
{
	public function index()
    {
        $user = User::All();
        //dd(Auth::user());
        return view('artikel.profile', compact('user'));
    }

    public function show()
    {
    	return view('artikel.profile');
    }

    

}
