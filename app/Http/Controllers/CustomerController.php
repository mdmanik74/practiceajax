<?php

namespace App\Http\Controllers;
use App\Customer;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
   public function index(){

    $customers=Customer::latest()->paginate(8);
   	return view('welcome',compact('customers'));
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

    public function edit(){
      return view('edit',compact('customers'));
    }

    public function view(Request $get){
      $id=$get->id;
      $custom=Customer::find($id);
      return $custom;
    }
}
