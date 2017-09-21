@extends('template')

@section('contenu')
    <style>
        h1, h4 { text-align:center; }
        h4 a { color: black; }
        h4 a:hover { text-decoration: underline;}
        .link:hover { font-weight: bold; size: 14px; }
        a { color: white; width: 450px; }
        p a:hover { color: white;  text-decoration: none;}
    </style>
    <br>
    <h1>UEF, Karelia and Savonia website</h1>
    <br>
    <h4><a href="/">Click here to go back to the home page</a></h4>
    <br>
    <div class="col-sm-offset-3 col-sm-6" style="text-align: center;">
        <div class="panel panel-info">
            <div class="panel-heading">Click on the query which you would like to see</div>
            <div class="panel-body">

                <p>
                    {!! link_to_route('queries/q1', 'What modules and classes does a degree hold ?', [], ['class' => 'btn btn-info']) !!}
                </p>

                <p>
                    {!! link_to_route('queries/q2', 'How many students there are in each class ?', [], ['class' => 'btn btn-info']) !!}
                </p>

                <p>
                   {!! link_to_route('queries/q3', 'How many credits have a specific student had ?', [], ['class' => 'btn btn-info']) !!}
                </p>

                <p>
                   {!! link_to_route('queries/q4', 'Bonus: what classes have he/she passed from his/her degree ?', [], ['class' => 'btn btn-info']) !!}
                </p>

                <br>
                <br>

                <a href="javascript:history.back()" class="btn btn-primary">
                    <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
                </a>

            </div>
        </div>
    </div>
@endsection