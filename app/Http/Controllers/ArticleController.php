<?php

namespace App\Http\Controllers;

use App\Category;
use App\Article;
use App\Tags;
use App\Comment;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article = Article::all();
        $user = User::All();
        return view('artikel.index',compact('article','user'));  
    }

    public function article($id)
    {
        $hasil = Article::find($id);
        $komen = Comment::where('id_article', $id)->get();
        return view('isi', compact('hasil','komen','id'));
    }

    public function golek(Request $request)
    {
        $golek = $request->golek;

        $article = Article::Where('judul', 'like', "%".$request->golek."%")->get();
        return view('artikel.index', compact('article'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tags::all();
        $category = Category::all();
        return view('artikel.create', compact('category','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'judul' => 'required',
            'category_id' => 'required',
            'gambar' => 'required'
        ]);

        $gambar = $request->gambar;
        $new_gambar = time().$gambar->getClientOriginalName();

        $article = new Article([
            'judul'         => $request->input('judul'),
            'url_artikel'   => $request->input('url_artikel'),
            'permalink'     => $request->input('permalink'),
            'isi_artikel'   => $request->input('isi_artikel'),
            'penulis'       => $request->input('penulis'),
            'category_id'   => $request->input('category_id'),
            'gambar'        => 'public/uploads/article/'.$new_gambar,
            'slug'          => Str::slug($request->judul)
            
        ]);

        $gambar->move('public/uploads/article/', $new_gambar);

        $article->save();
        
        $article->tags()->attach($request->input('tags'));
        return redirect('/article')->with('Pesan', 'Data Berhasil Di Tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category   = Category::all();
        $tags       = Tags::all();
        $article    = Article::find($id);
        return view('artikel.edit',compact('article','tags','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $article = Article::find($id);

        if ($request->has('gambar')) {
            $gambar = $request->gambar;
        $new_gambar = time().$gambar->getClientOriginalName();
        $gambar->move('public/uploads/article/', $new_gambar);

        $article->judul          = $request->input('judul');
        $article->category_id    = $request->input('category_id');
        $article->url_artikel    = $request->input('url_artikel');
        $article->permalink      = $request->input('permalink');
        $article->isi_artikel    = $request->input('isi_artikel');
        $article->penulis        = $request->input('penulis');
        $article->gambar = 'public/uploads/article/'. $new_gambar;
        }

        else {
        $article->judul          = $request->input('judul');
        $article->category_id    = $request->input('category_id');
        $article->url_artikel    = $request->input('url_artikel');
        $article->permalink      = $request->input('permalink');
        $article->isi_artikel    = $request->input('isi_artikel');
        $article->penulis        = $request->input('penulis');
        }

        
        
        $article->save();
        $article->tags()->sync($request->input('tags'));

        return redirect('/article')->with('Pesan', 'Data Berhasil Di Edit');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $article = Article::find($id);
        $article->delete($article);
        return redirect('/article')->with('sukses', 'delete data berhasil');
    }

    public function insertData(Request $req, $id)
    {
        $hasil = Article::find($id);
        $user = new Comment();
        $user->name = $req->name;
        $user->comment = $req->komentar;
        $user->id_article = $req->id;
        $user->save();
        return redirect()->action('ArticleController@article',compact('id'));
    }

    public function store_comment (Request $request)
    {
        $data = [
            'name' => $request->name,
            'comment' => $request->komentar,
            'id_article' => $request->id_article,
        ];
        $act = Comment::create($data);
    }
}
