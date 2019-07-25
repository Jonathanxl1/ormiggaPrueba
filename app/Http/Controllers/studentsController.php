<?php

namespace App\Http\Controllers;

use App\students;
use Illuminate\Http\Request;

class studentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {
        
         return view('students.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
     return view('students.addStudents');

        
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            
        $newStudent = $request->all();
        $table = new Students;
        $table->name_student=$newStudent['name_student'];
        $table->age=$newStudent['age'];
        $table->course=$newStudent['course'];
        $table->save();

        return redirect('/add');


            }

    /**
     * Display the specified resource.
     *
     * @param  \App\students  $students
     * @return \Illuminate\Http\Response
     */
    
    public function view(){
        $students = Students::all();
        return view('students.showStudents',[
            "students"=>$students
        ]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\students  $students
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Students::findOrFail($id);

        return view('students.editStudents',[
            "student"=>$student
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\students  $students
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $upStudent = $request->all();
        $student=Students::find($upStudent['id']);
        $student->name_student=$upStudent['name_student'];
        $student->age=$upStudent['age'];
        $student->course=$upStudent['course'];
        $student->save();

        return redirect('view');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\students  $students
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Students::findOrFail($id);
        $student->delete();

        return redirect('view');

    }
}
