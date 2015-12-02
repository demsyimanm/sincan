<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
	use SoftDeletes;

	protected $table = 'order';
	protected $primaryKey = 'id';
	public $timestamps = true;
	public $incrementing = true;

	protected $fillable = array(
		'nama',
		'alamat',
		'no_telp',
		'waktu',
		'kode_pos',
		'bukti_transfer',
		'flag_bukti_transfer',
		'flag_pengiriman'
	);

	protected $SoftDelete = true;
	protected $dates = ['deleted_at'];

	public function user()
	{
		return $this->belongsTo('App\Models\User');
	}

	public function comments()
	{
		return $this->hasMany('App\Models\Comment');
	}
}
