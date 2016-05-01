<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
//
//use App\Http\Requests;

class PagesController extends Controller
{
    //

    public function home() {

        return View::make('welcome')
            ->with('index_slider', Posts::all());

    }

    public function about() {


        return view('pages.about');

    }

    public function contact() {


        return view('pages.contact');

    }

}
