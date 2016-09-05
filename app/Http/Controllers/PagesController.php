<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class PagesController extends Controller
{
    public function getIndex() {
        $posts = Post::orderBy('created_at','desc')->limit(4)->get();
    	return view('pages.welcome')->withPosts($posts);

    }

    public function getAbout() {

    	$first = 'Guiller';
    	$last = 'Celestino';

    	$fullname = $first . " " . $last;
    	$email = 'gcelestino@yahoo.com';

    	//creating array
    	$data = [];
    	$data['email'] = $email;
    	$data['fullname'] = $fullname;
    	#return view('pages/about')->with("fullname", $fullname);
    	#return view('pages/about')->withFullname($fullname)->withEmail($email); // passing multiple variable and values to view
    	return view('pages/about')->withData($data); //passing array to view
    }

    public function getContact() {
    	return view('pages.contact');
    }
}
