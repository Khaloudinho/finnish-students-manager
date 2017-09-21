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
            <div class="panel-heading">Create a student</div>

                <div class="panel-body">
                    {!! Form::open(['route' => 'add/student']) !!}
                    <div class="form-group {!! $errors->has('firstname_student') ? 'has-error' : '' !!}">
                        {!! Form::label('First name : ') !!}
                        {!! Form::text('firstname_student', null, ['class' => 'form-control', 'placeholder' => 'John', 'style' => 'text-align:center;']) !!}
                        {!! $errors->first('firstname_student', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('lastname_student') ? 'has-error' : '' !!}">
                        {!! Form::label('Last name : ') !!}
                        {!! Form::text('lastname_student', null, ['class' => 'form-control', 'placeholder' => 'Doe', 'style' => 'text-align:center;']) !!}
                        {!! $errors->first('lastname_student', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('dateofbirth_student') ? 'has-error' : '' }}">
                        {!! Form::label('Date of birth : ') !!}
                        {!! Form::date('dateofbirth_student', null, ['class' => 'form-control', 'style' => 'text-align:center;']) !!}
                        {!! $errors->first('dateofbirth_student', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('dateofbirth_student') ? 'has-error' : '' }}">
                        {!! Form::label('Gender : ') !!}
                        {!! Form::select('gender_student', [
                            'M' => 'Male',
                            'F' => 'Female']
                            , ['class' => 'form-control']) !!}
                        {!! $errors->first('dateofbirth_student', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('id_university') ? 'has-error' : '' }}">
                        {!! Form::label('University : ') !!}
                        <select name="id_university">
                            @foreach ($universities as $uni)
                                <option value="{{ $uni->id_university }}">{!! $uni->name_university !!}</option>
                            @endforeach
                        </select>
                        {!! $errors->first('id_university', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {{ $errors->has('id_degree') ? 'has-error' : '' }}">
                        {!! Form::label('Degree : ') !!}
                        <select name="id_degree">
                            @foreach ($degrees as $deg)
                                @if ($deg->id_degree)
                                <option value="{{ $deg->id_degree }}">{!! $deg->name_degree !!}</option>
                                @endif
                            @endforeach
                        </select>
                        {!! $errors->first('id_degree', '<small class="help-block">:message</small>') !!}
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