<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentsController extends Controller
{
    public function index()
    {
    	$komen = Comment::all();
    	return view('artikel.comments', compact('komen'));
    }

    public function trash()
    {
    	return view('artikel.trash');
    }
}
