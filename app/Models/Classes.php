<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Classes extends Model
{
	use SoftDeletes;

	protected $table = 'class';
	protected $primaryKey = 'id';
	public $timestamps = true;
	public $incrementing = true;

	protected $fillable = array(
		'nama',
		'kuota',
	);

	protected $SoftDelete = true;
	protected $dates = ['deleted_at'];

	public function users()
	{
		return $this->belongsToMany('App\Models\User','user_class', 'class_id', 'user_id');
	}
}
