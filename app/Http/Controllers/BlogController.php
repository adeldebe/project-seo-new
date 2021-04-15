<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Comment;

class BlogController extends Controller
{
    public function index(Article $article) {
    	$data = $article->orderBy('created_at')->get();
    	return view('blog', compact('data'));
    }

    public function isi_article($slug) {
    	$article = Article::where('slug', $slug)->first();
 		$komen = Comment::all();
    	return view('isi' , compact('article','komen'));
    }

    public function insertData(Request $request)
    {
        $komen = Comment::create([
        	'comment' => $request->comment,
        	'name' => $request->name,
        	'email' => $request->email
        ]);

        $komen->save();

        return redirect()->back();
    }
}
