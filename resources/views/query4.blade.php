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
            <div class="panel-heading" style="font-weight: bold;">Bonus: what classes have he/she passed from his/her degree ?</div>
            <div class="panel-body">

                <p>Here you can see each class passed by the student with his grade and the credits he got.</p>

                <p>
                    <table class="table">
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Courses passed</th>
                        <th>Grade</th>
                        <th>Credits</th>

                    @foreach($query4 as $q4)
                        <tr>
                            <td>{!! $q4->firstname_student !!}</td>
                            <td>{!! $q4->lastname_student !!}</td>
                            <td>{!! $q4->courses_passed !!}</td>
                            <td>{!! $q4->grade !!}</td>
                            <td>{!! $q4->credits_module !!}</td>
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