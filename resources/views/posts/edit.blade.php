@extends('layout')

@section('content')

    @can('isAdmin')
    <h1>Edit Post</h1>
    <hr/>
    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::model($post, [
        'method' => 'PATCH',
        'url' => ['posts', $post->id],
        'class' => 'form-horizontal',
        'files'=>true
    ]) !!}

                <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
                {!! Form::label('title', 'Title: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('body') ? 'has-error' : ''}}">
                {!! Form::label('body', 'Body: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('body', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

@if($post->img_string !="")
<img class="img-thumbnail" src="../../images/{{$post->img_string}}">

@endif

    {{csrf_field()}}

    <div class="form-group">

        <div class="col-sm-offset-3 col-sm-3">

            {!! Form::label('img_string', 'Image String: ', ['class' => 'col-sm-3 control-label img_string']) !!}

            {!! Form::text('img_string', null, ['class' => 'form-control filename']) !!}
            {!! $errors->first('img_string', '<p class="help-block">:message</p>') !!}

        </div>

    </div>

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            <input type="file" name="file" id="file" />
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @else
       <?php
       header("Location: /");
        die();
       ?>

@endcan


@endsection

@section('footer')
    <script  src="{{URL::to(asset('/js/jquery.js'))}}"></script>
    <script type="text/javascript">

        $(function() {
            $("input:file").change(function (){
                //need to make it so it strips first 12 characters before saving as filename in javascript...
                var fileName = $(this).val();
                $(".filename").val(fileName.substring(12));
                $(".filename").show();
                $(".img_string").show();


            });
        });


        $(document).ready(function(){
            $(".filename").hide();
            $(".img_string").hide();


        });
    </script>

@endsection