<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Share;
use Redirect;


class ShareController extends Controller
{

	public function twitterShareWebsite(){
		$url = Share::load('http://www.lifeinsidebraces.com', 'Lifeinsidebraces')->twitter();
		return Redirect::to($url);


	}

	public function facebookShareWebsite(){
		//$url = Share::load('http://www.lifeinsidebraces.com', 'Lifeinsidebraces')->facebook();
		$url="https://www.facebook.com/sharer/sharer.php?u="."http://www.lifeinsidebraces.com/blog/demo-post";
		
		return Redirect::to($url);


	}

	public function pinterestShareWebsite(){
		$url = Share::load('http://www.lifeinsidebraces.com', 'Lifeinsidebraces')->pinterest();
		return Redirect::to($url);


	}



	


    
}
