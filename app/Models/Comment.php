<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
	use SoftDeletes;

	protected $table = 'comment';
	protected $primaryKey = 'id';
	public $timestamps = true;
	public $incrementing = true;

	protected $fillable = array(
		'post_id',
		'user_id',
		'konten',
		'waktu',
	);

	protected $SoftDelete = true;
	protected $dates = ['deleted_at'];

	public function post()
	{
		return $this->belongsTo('App\Models\Post');
	}

	public function user()
	{
		return $this->belongsTo('App\Models\User');
	}
}
