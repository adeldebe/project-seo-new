<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocmedController extends Controller
{
    public function socmed()
    {
    	return view('artikel.socmed');
    }

    public function sharingbuttons()
    {
    	return view('artikel.sharingbuttons');
    }
}
