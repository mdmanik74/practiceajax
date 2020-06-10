<?php

namespace App\Http\Controllers;
use App\Item;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function index(){

		$item=Item::latest()->paginate(8);
		 return view('welcome',compact('item'));
	}

	public function create(Request $request){
	
	    $item= new Item();
        $item->items=$request->items;
        $item->save();
        return 'Data Successfully insert';
	}
   
}
