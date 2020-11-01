<?php

namespace App\Http\Controllers;

class PyController extends Controller
{
	public function satu()
	{
		return view("py");
	}

	public function dua()
	{
		return view("py1");
	}

	public function tiga()
	{
		return view("py2");
	}
}