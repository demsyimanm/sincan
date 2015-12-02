<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class User extends Model implements AuthenticatableContract
{
	use SoftDeletes;

	protected $table = 'user';
	protected $primaryKey = 'id';
	public $timestamps = true;
	public $incrementing = true;

	protected $fillable = array(
		'name',
		'password',
		'username',
		'remember_token',
	);

	protected $SoftDelete = true;
	protected $dates = ['deleted_at'];

	public function posts()
	{
		return $this->hasMany('App\Models\Post');
	}

	public function comments()
	{
		return $this->hasMany('App\Models\Comment');
	}

	public function classes_1()
	{
		return $this->belongsToMany('App\Models\Classes','user_class', 'user_id', 'class_id');
	}

	public function getAuthIdentifier()
	{
		return $this->id;
	}

	public function getAuthPassword()
	{
		return $this->password;
	}

	public function getRememberTokenName()
	{
		return 'remember_token';
	}

	public function getRememberToken()
	{
		return $this->{$this->getRememberTokenName()};
	}

	public function setRememberToken($value)
	{
		$this->{$this->getRememberTokenName()} = $value;
	}

}
