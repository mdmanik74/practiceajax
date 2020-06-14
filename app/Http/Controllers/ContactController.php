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

     public function store(Request $request){

    	{
        $rules = array(
            'name'    =>  'required',
            'phone'     =>  'required',
            'email'         =>  'required'
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

       

        $form_data = array(
            'name'        =>  $request->name,
            'phone'         =>  $request->phone,
            'email'             =>  $email
        );

        Contact::create($form_data);

        return response()->json(['success' => 'Data Added successfully.']);
    }
     }
}
