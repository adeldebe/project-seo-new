<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
	protected $table = 'tags';
    protected $fillable = ['name','slug'];

    public function article(){
    	return $this->belongsToMany('App\Article');
    }
}
