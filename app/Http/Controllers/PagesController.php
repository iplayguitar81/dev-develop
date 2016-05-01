<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
//
//use App\Http\Requests;

class PagesController extends Controller
{
    //

    public function home() {

        $data = array(
            'home_posts'  => Post::all(),
            'home_cards' => Card::all(),

        );

        return View::make('index', $data);

    }

    public function about() {


        return view('pages.about');

    }

    public function contact() {


        return view('pages.contact');

    }

}
