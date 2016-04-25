<?php

namespace App\Http\Controllers;
use App\Card;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class CardsController extends Controller
{

    //
    public function index(){

//        //$cards= \DB::table('cards')->get();
//        $cards = DB::connection('mysql')
//            ->table('cards')
//            ->get();
//
        //ELOQUENT STYLIN'
        
        $cards =Card::all();
       return view('cards.index',compact('cards'));


    }

    
    public function show(Card $card){

        //ELOQUENT STYLE BY CREATING THE MODEL OF CARD IT FIGURES IT OUT

     //   $card = Card::find($id);

        //spits out JSON version to see specific JSON object
        // return $card;

        return view('cards.show', compact('card'));




    }


}
