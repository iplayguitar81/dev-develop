@extends('layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page. Poop

                    @foreach($posts as $item){

                    {{ $item->title }}

                    }
                        @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
