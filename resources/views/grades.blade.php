@extends('template')

@section('contenu')
    <style>
        h1, th, h4 { text-align:center; }
        h4 a { color: black; }
        h4 a:hover { text-decoration: underline;}
        .link:hover { font-weight: bold; size: 14px; }
        th { background-color: #add8e6; }
        a { color: white; }
        p a:hover { color: white;  text-decoration: none;}
    </style>
    <br>
    <h1 >UEF, Karelia and Savonia website</h1>
    <br>
    <h4><a href="/">Click here to go back to the home page</a></h4>
    <br>
    <div class="col-sm-offset-2 col-sm-8" style="text-align: center;">
        <div class="panel panel-info">
            <div class="panel-heading">This is all the grades</div>
            <div class="panel-body">

                <p>If you want to add a grade to someone who is not graded yet,</p>
                <p>you just have to click on add on a student who has the field grade as 'Not graded'</p>

                <p>

                <table class="table">
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Module</th>
                    <th>Grade</th>
                    <th>Teacher</th>
                    <th>Action</th>

                    @foreach($grades as $gd)
                        <tr>
                            <td>{{ $gd->firstname_student }}</td>
                            <td>{{ $gd->lastname_student }}</td>
                            <td>{{ $gd->name_module }}</td>
                            <td>@if (is_null($gd->grade)) Not graded @else {{ $gd->grade }} @endif</td>
                            <td>{{ $gd->firstname_teacher }}{{ ' ' }}{{ $gd->lastname_teacher }}</td>
                            <td>@if (is_null($gd->grade))
                                    {!! link_to_route('grades/update/{id}', 'Add', [$gd->id], ['class' => 'btn btn-success']) !!}
                                @else
                                    {!! link_to_route('grades/update/{id}', 'Update', [$gd->id], ['class' => 'btn btn-warning']) !!}
                                @endif
                            </td>
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