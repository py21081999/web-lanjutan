<?php

namespace App\Http\Controllers;

class NewPyController extends Controller
{
	public function tarik()
	{
		return view("tarik");
	}

	public function sist()
	{
		return view("sist");
	}

	public function semongko()
	{
		return view("semongko");
	}
}