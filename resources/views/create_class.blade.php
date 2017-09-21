@extends('template')

@section('contenu')
    <style>
        h1, th, h4 { text-align:center; }
        h4 a { color: black; }
        h4 a:hover { text-decoration: underline;}
        .link:hover { font-weight: bold; size: 14px; }
        th { background-color: #add8e6; }
        a, input.btn { width: 150px; }
    </style>
    <br>
    <h1 >UEF, Karelia and Savonia website</h1>
    <br>
    <h4><a href="/">Click here to go back to the home page</a></h4>
    <br>
    <div class="col-sm-offset-4 col-sm-4" style="text-align: center;">
        <div class="panel panel-info">
            <div class="panel-heading">Create a class</div>

            <div class="panel-body">
                {!! Form::open(['route' => 'add/class']) !!}
                <div class="form-group {!! $errors->has('name_class') ? 'has-error' : '' !!}">
                    {!! Form::label('Class name : ') !!}
                    {!! Form::text('name_class', null, ['class' => 'form-control', 'placeholder' => 'Exercise session of maths', 'style' => 'text-align:center;']) !!}
                    {!! $errors->first('name_class', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="form-group {!! $errors->has('room_class') ? 'has-error' : '' !!}">
                    {!! Form::label('Class room : ') !!}
                    {!! Form::text('room_class', null, ['class' => 'form-control', 'placeholder' => 'TB299', 'style' => 'text-align:center;']) !!}
                    {!! $errors->first('room_class', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="form-group {{ $errors->has('id_module') ? 'has-error' : '' }}">
                    {!! Form::label('Module corresponding to the class : ') !!}
                    <select name="id_module">
                        @foreach ($modules as $mod)
                            <option value="{{ $mod->id_module }}">{!! $mod->name_module !!}</option>
                        @endforeach
                    </select>
                    {!! $errors->first('id_module', '<small class="help-block">:message</small>') !!}
                </div>

                <div class="form-group {{ $errors->has('start_at') ? 'has-error' : '' }}">
                    {!! Form::label('Start at : ') !!}
                    {!! Form::text('start_at',  null, ['class' => 'form-control', 'placeholder' => '17:00', 'style' => 'text-align:center;']) !!}
                    {!! $errors->first('start_at', '<small class="help-block">:message</small>') !!}
                </div>

                <div class="form-group {{ $errors->has('end_at') ? 'has-error' : '' }}">
                    {!! Form::label('End at : ') !!}
                    {!! Form::text('end_at',  null, ['class' => 'form-control', 'placeholder' => '19:00', 'style' => 'text-align:center;']) !!}
                    {!! $errors->first('end_at', '<small class="help-block">:message</small>') !!}
                </div>
                {!! Form::submit('Submit', ['class' => 'btn btn-info pull-center']) !!}
                {!! Form::close() !!}
            </div>

            <a href="javascript:history.back()" class="btn btn-primary">
                <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
            </a>

            <br>
            <br>

        </div>
    </div>
    </div>
@endsection