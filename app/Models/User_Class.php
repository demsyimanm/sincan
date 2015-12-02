<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User_Class extends Model
{
	use SoftDeletes;

	protected $table = 'user_class';
	protected $primaryKey = 'id';
	public $timestamps = true;
	public $incrementing = true;

	protected $fillable = array(
		'user_id',
		'class_id',
		'jumlah',
	);

	protected $SoftDelete = true;
	protected $dates = ['deleted_at'];

}
