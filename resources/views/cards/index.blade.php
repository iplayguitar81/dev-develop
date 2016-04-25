@extends('layout')

@section('content')

<h1>All Cards</h1>

    @foreach ($cards as $card)
    <p>{{$card->title}}</p>

    <p>{{$card->created_at}}</p>

    @endforeach

 @stop