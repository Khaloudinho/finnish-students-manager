<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\StudentRepository;
use App\Repositories\ClassesRepository;
use App\Repositories\ModuleRepository;
use App\Http\Requests\StudentCreateRequest;
use App\Http\Requests\ClassesCreateRequest;
use App\Http\Requests\ModuleCreateRequest;
use DB;

class AddController extends Controller
{
    public function __construct(StudentRepository $studentRepository,
                                ModuleRepository $moduleRepository,
                                ClassesRepository $classesRepository)
    {
        $this->studentRepository = $studentRepository;
        $this->moduleRepository = $moduleRepository;
        $this->classesRepository = $classesRepository;
    }

    public function index()
    {
        return view('add');
    }

    public function createModule()
    {
        $teachers = DB::table('teacher')->select('teacher_number', 'firstname_teacher', 'lastname_teacher')->get();

        return view('create_module', compact('teachers'));
    }

    public function storeModule(ModuleCreateRequest $request)
    {
        $module = $this->moduleRepository->store($request->all());

        return redirect('/')->withOk("The student number " . $module->id_module. " has been created.");
    }

    public function createClass()
    {
        $modules = DB::table('study_module')->select('id_module', 'name_module')->get();

        return view('create_class', compact('modules'));
    }

    public function storeClass(ClassesCreateRequest $request)
    {
        $class = $this->classesRepository->store($request->all());

        return redirect('/')->withOk("The student number " . $class->id_class. " has been created.");

    }

    public function createStudent()
    {
        $universities = DB::table('university')->select('id_university', 'name_university')->get();

        $degrees = DB::table('degree')->select('id_degree', 'name_degree')->get();

        return view('create_student', compact('universities', 'degrees'));
    }

    public function storeStudent(StudentCreateRequest $request)
    {
        $request->id_university = DB::table('offers')->where('id_degree', $request->id_degree)->get();

        $student = $this->studentRepository->store($request->all());

        return redirect('/')->withOk("The student number " . $student->student_number. " has been created.");
    }
}
