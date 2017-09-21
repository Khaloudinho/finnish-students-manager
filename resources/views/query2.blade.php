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
            <div class="panel-heading" style="font-weight: bold;">How many students there are in each class ?</div>
            <div class="panel-body">

                <p>Here you can see how many students are attending each class.</p>

                <p>
                    <table class="table">
                        <th>Class name</th>
                        <th>Number of students</th>

                    @foreach($query2 as $q2)
                        <tr>
                            <td>{!! $q2->name_class !!}</td>
                            <td>{!! $q2->number_of_students !!}</td>
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