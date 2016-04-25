@extends('layout')

@section('content')

<h1>All Cards</h1>

    @foreach ($cards as $card)
    <p>{{$card->title}}</p>

    <p>{{$card->created_at}}</p>

    <!-- Project One -->
    <div class="row">
        <div class="col-md-7">
            <a href="#">
                <img class="img-responsive" src="http://placehold.it/700x300" alt="">
            </a>
        </div>
        <div class="col-md-5">
            <h3>{{$card->title}}</h3>
            <h4>{{$card->created_at}}</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
            <a class="btn btn-primary" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>
    </div>

    @endforeach




 @stop