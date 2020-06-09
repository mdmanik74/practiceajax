<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function index(){
		 return view('welcome');
	}

	public function create(requst $requst){
		$item= New Item;
		$item->items= $requst->items;
		$item->save();
		 return 'done';
	}
   
}
