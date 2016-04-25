@extends('layout')

@section('content')

<h1>All Cards</h1>

    @foreach ($cards as $card)
    {{$card->title}}
    {{$card->created_at}}



    @endforeach

 @stop