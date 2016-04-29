@extends('layout')

@section('content')

    <h1>Posts @can('isAdmin')<a href="{{ url('posts/create') }}" class="btn btn-primary pull-right btn-sm">Add New Post</a>@endcan</h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Title</th><th>Body</th><th>Img</th>
                    @can('isAdmin')
                    <th>Actions</th>
                    @endcan

                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($posts as $item)
                {{-- */$x++;/* --}}
                <tr>
                    {{--<td>{{ $x }}</td>--}}
                    <td><a href="{{ url('posts', $item->id) }}">{{ $item->title }}</a></td><td>{{ $item->body }}</td>
                    @if($item->img_string != "")
                    <td><img class="img-thumbnail" src="../images/{{$item->img_string}}"></td>
                    @else
                        <td>No image for this post</td>

                    @endif
                        {{--<img src="{{route('image',['filename'=>])}}">--}}
                    @can('isAdmin')
                    <td>
                        <a href="{{ url('posts/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['posts', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>

@endcan


                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $posts->render() !!} </div>
    </div>

@endsection
