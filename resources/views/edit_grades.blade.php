@extends('template')

@section('contenu')
    <style>
        h1, th { text-align:center; }
        .link:hover { font-weight: bold; size: 14px; }
        th { background-color: #add8e6; }
        a, input.btn { width: 150px; }
    </style>
    <br>
    <h1 >UEF, Karelia and Savonia website</h1>
    <br>
    <div class="col-sm-offset-4 col-sm-4" style="text-align: center;">
        <div class="panel panel-info">
            <div class="panel-heading">Update a grade</div>
            <div class="panel-body">

                {!! Form::model($grade, ['route' => ['grades/update/{id}', $grade->id], 'method' => 'post',
                'class' => 'form-horizontal panel']) !!}

                @foreach($std as $s)
                <div id="grade" class="form-group-has-feedback {!! $errors->has('firstname_student') ? 'has-error' : '' !!}">
                    {!! Form::label('First name student : ') !!}
                    {!! $s->firstname_student !!}
                    {!! $errors->first('firstname_student', '<small class="help-block">:message</small>') !!}
                </div>

                <br>

                <div id="grade" class="form-group-has-feedback {!! $errors->has('lastname_student') ? 'has-error' : '' !!}">
                    {!! Form::label('Last name student : ') !!}
                    {!! $s->lastname_student !!}
                    {!! $errors->first('lastname_student', '<small class="help-block">:message</small>') !!}
                </div>

                <br>

                <div id="grade" class="form-group-has-feedback {!! $errors->has('name_module') ? 'has-error' : '' !!}">
                    {!! Form::label('Module : ') !!}
                    {!! $s->name_module !!}
                    {!! $errors->first('name_module', '<small class="help-block">:message</small>') !!}
                </div>
                @endforeach

                <br>

                <div id="grade" class="form-group-has-feedback {!! $errors->has('grade') ? 'has-error' : '' !!}">
                    {!! Form::label('Grade : ') !!}
                    {!! Form::text('grade', null, ['class' => 'form-control', 'style' => 'text-align:center;']) !!}
                    {!! $errors->first('grade', '<small class="help-block">:message</small>') !!}
                </div>

                <br>

                <div class="form-group-has-feedback">
                    {!! Form::submit('Submit changes', ['class' => 'btn btn-info']) !!}
                    {!! Form::close() !!}
                </div>

                <a href="javascript:history.back()" class="btn btn-primary">
                    <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
                </a>

            </div>
        </div>
    </div>
@endsection