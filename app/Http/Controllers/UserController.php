<?php

namespace App\Http\Controllers;

use Request;
use Auth;
use Input;
use App\Models\User;
use App\Models\Classes;

class UserController extends Controller
{
	protected $data = array();
	public function index()
    {
        // SELECT * FROM post
        $data['users'] = User::with('classes_1')->orderby('id','DESC')->get();
        return view('pages.classes.index',$data);               
    }	

    public function addClass()
    {
    	if(Request::isMethod('get'))
    	{
    		return view('pages.classes.index'); 
    	}
    	else if(Request::isMethod('post'))
    	{
    		$post = Post::create(Input::all());
    		//update
    		$post->waktu = Carbon::now()->addHours(7);
    		$post->user_id = Auth::user()->id;
    		$post->save();

    		return redirect('post');
    	}
    }

    public function coba()
    {
    	$data['users'] = User::find(1);
    	$data['users']->classes_1()->attach(11);
    	//
        return view('login');   
    }
}
