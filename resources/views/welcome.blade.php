@extends('layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page. Poop

                    @foreach($posts as $item)
                    <p>{{ $item->title }}</p>
                    <p>{{ $item->body }}</p>
                        <img class="img-thumbnail" src="../images/{{$item->img_string}}">

                    @endforeach

                    <p>START CARDS DB CALL:</p>
                    @foreach($cards as $item)
                        <p>{{ $item->title }}</p>

                        @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
