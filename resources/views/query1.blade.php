@extends('template')

@section('contenu')
    <style>
        h1, h4, th { text-align:center; }
        h4 a { color: black; }
        h4 a:hover { text-decoration: underline;}
        .link:hover { font-weight: bold; size: 14px; }
        button { width: 450px; }
        th { background-color: #add8e6; }
    </style>
    <br>
    <h1>UEF, Karelia and Savonia website</h1>
    <br>
    <h4><a href="/">Click here to go back to the home page</a></h4>
    <br>
    <div class="col-sm-offset-2 col-sm-8" style="text-align: center;">
        <div class="panel panel-info">
            <div class="panel-heading" style="font-weight: bold;">What modules and classes does a degree hold ?</div>
            <div class="panel-body">

                <p>Here you can see all the degrees, and which modules are contained into these degrees.</p>
                <p>For each degree, you also can find every class which corresponds to it.</p>

                <p>
                    <table class="table">
                        <th>Degree name</th>
                        <th>Module name</th>
                        <th>Class name</th>

                    @foreach($query1 as $q1)
                        <tr>
                            <td>{!! $q1->name_degree !!}</td>
                            <td>{!! $q1->name_module !!}</td>
                            <td>{!! $q1->name_class !!}</td>
                        </tr>
                    @endforeach
                    </table>
                </p>

                <a href="javascript:history.back()" class="btn btn-primary">
                    <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
                </a>

            </div>
        </div>
    </div>
@endsection