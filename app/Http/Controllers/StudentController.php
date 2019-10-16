<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index(){
        $students = Student::all();
        return view('pages.index')->with('students',$students);
    }

    public function create(){

        return view('pages.create');
    }

    public function edit($id){
        $student = Student::find($id);
        return view('pages.edit')->with('student',$student);
    }

    public function store(Request $request){

        //check validation
        $this->validate($request,[
            'name'              => 'required|string|max:10',
            'registration_id'   => 'required |integer',
            'department_name'   => 'required |string',
            'info'   => 'nullable',


        ]);



        //Insert Data into Student Table

        $student = new Student;
        $student->name= $request->name;
        $student->department_name= $request->department_name;
        $student->registration_id= $request->registration_id;
        $student->info= $request->info;

        $student->save();

        return redirect()->route('index');
    }

    public function update(Request $request, $id){

        //Insert Data into Student Table

        $student = Student::find($id);

        $student->name = $request->name;
        $student->department_name= $request->department_name;
        $student->registration_id= $request->registration_id;
        $student->info= $request->info;
        $student->save();


        return redirect()->route('index');
    }


    public function delete($id){

        //Insert Data into Student Table

        $student = Student::find($id);

        $student->delete();

        return redirect()->route('index');
    }
}
