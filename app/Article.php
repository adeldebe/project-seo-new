<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';
    protected $fillable = ['judul', 'url_artikel', 'permalink', 'isi_artikel', 'penulis', 'gambar', 'category_id','slug'];

    public function category(){
    	return $this->belongsTo('App\Category');
    }

    public function tags(){
    	return $this->belongsToMany('App\Tags');
    }

}
