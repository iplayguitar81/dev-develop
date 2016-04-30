@extends('layout')

@section('content')

    <h1>Post</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Title</th><th>Body</th><th>Img</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $post->id }}</td> <td> {{ $post->title }} </td><td> {{ $post->body }} </td>

                    @if($post->img_string != "")
                        <td><img class="img-thumbnail" src="../images/{{$post->img_string}}"></td>
                    @else
                        <td>No image for this post</td>

                    @endif
                </tr>
            </tbody>    
        </table>
    </div>

    <a href="{{ url('posts') }}">
        <button type="submit" class="btn btn-primary btn-xs">Back to All Posts</button>
    </a>

@endsection