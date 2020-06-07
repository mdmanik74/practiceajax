<?php

namespace App\Http\Controllers;
use App\Customer;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
   public function index(){

   	return view('welcome');
   }
    public function store(Request $get){

    	$insert=Customer::insert([
    		"Fname" =>$get->Fname,
    		"phn" =>$get->phn,
    		"email" =>$get->email,
    		"dist" =>$get->dist,
    		"created_at"=>Carbon::now(),
    	
    	]);
    	return back()->with('successMsg','Data Successfully Saved');

    }
}
