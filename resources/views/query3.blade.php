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
            <div class="panel-heading" style="font-weight: bold;">How many credits have a specific student had ?</div>
            <div class="panel-body">

                <p>We consider that in order to pass a course the student should have at least 1/5 and then he gets the credits.</p>
                <p></p>Otherwise, he does not get the credits from the course.</p>

                <p>
                    <table class="table">
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Credits</th>

                    @foreach($query3 as $q3)
                        <tr>
                            <td>{!! $q3->firstname_student !!}</td>
                            <td>{!! $q3->lastname_student !!}</td>
                            <td>{!! $q3->credits !!}</td>
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