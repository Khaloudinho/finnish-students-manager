@extends('template')

@section('contenu')
    <style>
        h1 { text-align:center; }
        .link:hover { font-weight: bold; font-size: 22px; }
        .link { font-size: 20px; }
    </style>
    <br>
    <h1 >UEF, Karelia and Savonia website</h1>
    <br>
    <div class="col-sm-offset-3 col-sm-6" style="text-align: center;">
        <div class="panel panel-info">
            <div class="panel-heading">Welcome to my website created for the Data Management project</div>
            <div class="panel-body">

                    <p>Welcome to UEF, Karelia and Savonia website ! You can use a lot of functionalities here such as
                    give a grade to a student, saw the degrees, classes and teachers in each university for instance.</p>

                    <p>You can add a module, a student or a class. Basically this site has been made to simplify the work
                    of the UEF, Karelia and Savonia universities staff.</p>

                    <p>Follow one of these following links to use some of the functionalities : </p>

                    <br>

                    <p class="link"> {!! link_to_route('add', 'Add a module, a student or a class') !!} </p> <br>
                    <p class="link"> {!! link_to_route('grades', 'Add or update the grade of a student') !!} </p> <br>
                    <p class="link"> {!! link_to_route('queries', 'Show the result of the different queries') !!} </p> <br>

                    <br>

                    <p>Made by <strong>Khaled Bouguettoucha</strong>, student number : <strong>288546</strong></p>

            </div>
        </div>
    </div>
@endsection