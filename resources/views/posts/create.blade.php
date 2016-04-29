@extends('layout')

@section('content')

    <h1>Create New Post</h1>
    <hr/>

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@can('isAdmin')
    {!! Form::open(['url' => 'posts', 'class' => 'form-horizontal', 'files'=>true]) !!}


                <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
                {!! Form::label('title', 'Title: ', ['class' => 'col-sm-3 control-label']) !!}



                <div class="col-sm-6">
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
                </div>
                    {!! Form::label('img_string', 'Image String: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::text('img_string', null, ['class' => 'form-control filename']) !!}
                        {!! $errors->first('img_string', '<p class="help-block">:message</p>') !!}
                    </div>
            </div>
            <div class="form-group {{ $errors->has('body') ? 'has-error' : ''}}">
                {!! Form::label('body', 'Body: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('body', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
        <input type="file" name="file" id="file" />
            </div>
        </div>
        {{csrf_field()}}

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
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
                var fileName = $(this).val();
                $(".filename").val(fileName);
            });
        });
    </script>

    @endsection