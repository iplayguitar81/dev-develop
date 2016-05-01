<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
//
//use App\Http\Requests;
use App\Post;
use App\Card;

class PagesController extends Controller

{
    //

    public function home() {


            $people= ['Taylor', 'Matt','Jeffrey'];

        $posts = Post::paginate(15);

        $cards=Card::paginate(15);

    return view('welcome', compact('posts','cards'));

    }

    public function about() {


        return view('pages.about');

    }

    public function contact() {


        return view('pages.contact');

    }

}
