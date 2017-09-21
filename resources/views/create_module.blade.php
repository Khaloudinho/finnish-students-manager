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
            <div class="panel-heading">Create a module</div>

            <div class="panel-body">
                {!! Form::open(['route' => 'add/module']) !!}
                <div class="form-group {!! $errors->has('name_module') ? 'has-error' : '' !!}">
                    {!! Form::label('Module name : ') !!}
                    {!! Form::text('name_module', null, ['class' => 'form-control', 'placeholder' => 'Probabilities & statistics', 'style' => 'text-align:center;']) !!}
                    {!! $errors->first('name_module', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="form-group {!! $errors->has('credits_module') ? 'has-error' : '' !!}">
                    {!! Form::label('Credits module : ') !!}
                    {!! Form::text('credits_module', null, ['class' => 'form-control', 'placeholder' => '5', 'style' => 'text-align:center;']) !!}
                    {!! $errors->first('credits_module', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="form-group {{ $errors->has('teacher_responsible') ? 'has-error' : '' }}">
                    {!! Form::label('Teacher responsible of the module : ') !!}
                    <select name="teacher_responsible">
                        @foreach ($teachers as $tc)
                            <option value="{{ $tc->teacher_number }}">{!! $tc->firstname_teacher !!}{{ ' ' }}{!! $tc->lastname_teacher !!}</option>
                        @endforeach
                    </select>
                    {!! $errors->first('teacher_responsible', '<small class="help-block">:message</small>') !!}
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