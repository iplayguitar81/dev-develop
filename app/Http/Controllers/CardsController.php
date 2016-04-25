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
        //ELOQUIN
        $cards =Card::all();
       return view('cards.index',compact('cards'));


    }

    public function show(Card $card){

        //ELOQUIN???

     //   $card = Card::find($id);

        //spits out JSON version to see specific JSON object
        // return $card;

        return view('cards.show', compact('card'));




    }


}
