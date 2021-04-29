<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Comment;

class BlogController extends Controller
{
    public function index(Article $article) 
    {
    	$data = $article->orderBy('created_at')->get();
    	return view('blog', compact('data'));
    }

    public function isi_article($slug) 
    {
        $article = Article::where('slug', $slug)->first();
        $prev_id = Article::where('id', '<', $article->id)->max('id');
        $next_id = Article::where('id', '>', $article->id)->min('id');

        $prev_article = Article::find($prev_id);
        $next_article = Article::find($next_id);
        $komen = Comment::where('id_article', $article->id)->get();
        return view('isi' , compact('article','komen', 'prev_article', 'next_article'));
    }

    public function cari(Request $request){
        $data = Article::Where('judul', 'like', '%'.$request->cari.'%')->get();
        return view('blog', compact('data'));
    }

}
