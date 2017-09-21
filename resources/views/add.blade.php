@extends('template')

@section('contenu')
    <style>
        h1, h4 { text-align:center; }
        h4 a { color: black; }
        h4 a:hover { text-decoration: underline;}
        .link:hover { font-weight: bold; size: 14px; }
        a { width: 300px; color: white; }
        p a:hover { color: white; text-decoration: none;}
    </style>
    <br>
    <h1>UEF, Karelia and Savonia website</h1>
    <br>
    <h4><a href="/">Click here to go back to the home page</a></h4>
    <br>
    <div class="col-sm-offset-3 col-sm-6" style="text-align: center;">
        <div class="panel panel-info">
            <div class="panel-heading">What do you want to create ?</div>
            <div class="panel-body">

                <p>{!! link_to_route('add/module', 'Add a module', [], ['class' => 'btn btn-info']) !!}</p>

                <p>{!! link_to_route('add/class', 'Add a class', [], ['class' => 'btn btn-info']) !!}</p>

                <p>{!! link_to_route('add/student', 'Add a student', [], ['class' => 'btn btn-info']) !!}</p>

            </div>

            <a href="javascript:history.back()" class="btn btn-primary">
                <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
            </a>

            <br>
            <br>

        </div>
    </div>
@endsection