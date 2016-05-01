<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
//
//use App\Http\Requests;
use App\Post;

class PagesController extends Controller

{
    //

    public function home() {


            $people= ['Taylor', 'Matt','Jeffrey'];

        $posts = Post::paginate(15);

    return view('welcome', compact($posts));

    }

    public function about() {


        return view('pages.about');

    }

    public function contact() {


        return view('pages.contact');

    }

}
