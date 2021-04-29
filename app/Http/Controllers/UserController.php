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

    public function edit($id)
    {
        $user = User::find($id);
        return view('artikel.editProfile', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        if($request->input('password'))
        {
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
        } else 
        {
            $user->name = $request->name;
            $user->email = $request->email;
        }
        $user->save();
        return redirect('/user')->with('pesan','Data User Berhasil Di Update');
    } 

}
