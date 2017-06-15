<?php

namespace App\Http\Controllers;

class PagesController extends Controller{

	public function getIndex(){
		return view('pages.welcome');
		# process variable data or params
		# talk to the model
		# receive from the model
		# compile or process data
		# pass the data into correct view
	}

	public function getAbout(){
		return view('pages.about');
	}
}