<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

class PagesController extends Controller
{

	public function getIndex(){
		return view('blog.template');

	}

	public function getAbout(){
		return view('about');
		
	}

	public function getContact(){
		return view('contact');
		
	}

	public function postContact(Request $request){
		$this->validate($request,[
			'email'=>'required|email',
			'subject'=>'min:3',
			'message'=>'required|min:10',

			]);

		$data = array(
		'email'=> $request->email,
		'subject'=>$request->subject,
		'emailMessage'=>$request->message

		);

		Mail::send('emails.contact',$data,function($message) use ($data){
			$message->from($data['email']);
			$message->to('himanshu94uppal@gmail.com');
			$message->subject($data['subject']);

		});

		return view('contact');
		
	}


    
}
