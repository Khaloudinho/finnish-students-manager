<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class QueriesController extends Controller
{
    public function index(){
        return view('queries');
    }

    public function printQ1(){
        $query1 = DB::table('query1')->get();

        return view('query1', compact('query1'));
    }

    public function printQ2(){
        $query2 = DB::table('query2')->get();

        return view('query2', compact('query2'));
    }

    public function printQ3(){
        $query3 = DB::table('query3')->get();

        return view('query3', compact('query3'));
    }

    public function printQ4(){
        $query4 = DB::table('query4')->get();

        return view('query4', compact('query4'));
    }
}
