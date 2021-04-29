<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Article;

class CommentsController extends Controller
{
    public function index()
    {
    	$komen = Comment::all();
    	$article = Article::all();
    	return view('artikel.comments', compact('komen'));
    }

    public function trash()
    {
    	return view('artikel.trash');
    }

    public function destroy($id)
    {
        $komen = Comment::findorfail($id);
        $komen->delete();

        return redirect()->back()->with('Pesan', 'Komentar Berhasil Di Hapus');
    }

    public function tampil_hapus()
    {
        $komen = Comment::onlyTrashed()->get();
        return view('artikel.trashed', compact('komen'));
    }

    public function restore($id)
    {
        $komen = Comment::withTrashed()->where('id', $id)->first();
        $komen->restore();

        return redirect()->back()->with('Pesan', 'Komentar berhasil di restore');
    }

    public function kill($id)
    {
        $komen = Comment::withTrashed()->where('id', $id)->first();
        $komen->forceDelete();

        return redirect()->back()->with('Pesan', 'Komentar berhasil di dihapus');
    }
}
