<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
	use SoftDeletes;

    protected $table = 'comments';
    protected $fillable = ['id','name','comment','id_article'];
    protected $primayKey = 'id';

    public static function totalSampah()
    {
    	return Comment::count();
    }
}
