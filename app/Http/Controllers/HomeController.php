<?php

namespace App\Http\Controllers;
use App\Item;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function index(){
		 return view('welcome');
	}

	public function create(Request $request){
	
	    $item= new Item();
        $item->items=$request->items;
        $item->save();
        return 'Data Successfully insert';
	}
   
}
