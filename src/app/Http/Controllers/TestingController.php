<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
{
	/**
	* Display a listing of the resource.
	*
	* @param  string  $post_type
	* @return \Illuminate\Http\Response
	*/
    public function index()
    {
    	'latest';
        return view('welcome');
    }
}
