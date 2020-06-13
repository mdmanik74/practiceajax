<?php

namespace App\Http\Controllers;
use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

public function index(){

    	$contact=Contact::latest()->paginate(10);
    	return view('welcome',compact('contact'));
    }

    // public function show(){

    // 	$contact=Contact::latest()->pagenate(10);
    // 	return view('welcome',compact('contact'))
    // }
}
