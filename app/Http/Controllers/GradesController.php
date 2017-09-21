<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB, Input;
use App\Repositories\GradesRepository;
use App\Http\Requests\GradesUpdateRequest;

class GradesController extends Controller
{

    public function __construct(GradesRepository $gradesRepository)
    {
        $this->gradesRepository = $gradesRepository;
    }

    public function index(){
        return view('grades');
    }

    public function showGrades(){

        $students = DB::table('student')->select('student_number', 'firstname_student', 'lastname_student')->get();

        $grades = DB::table('grades')->get();

        return view('grades', compact('students', 'grades'));
    }

    public function edit($id)
    {
        $grade = $this->gradesRepository->getById($id);

        $std = DB::table('grades')->where('id', $id)->get();

        return view('edit_grades', compact('grade', 'std'));
    }

    public function update(GradesUpdateRequest $request, $id)
    {
        $this->gradesRepository->update($id, $request->all());

        return redirect('grades')->withOk("The grade number " . $id . " has been updated.");
    }

}
