<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Student;

class StudentController extends Controller
{
    public function index(){
        $students=Student::all();
        return view('students.index',compact('students'));
    }
    public function show($id){
        $student=Student::find($id);
        return view('students.show',compact('student'));
    }
    public function sortBy($sort){
        $students=Student::orderBy($sort,'asc')->get();
        return view('students.index',compact('students'));
    }
    public function create(){
        // $student=new Student;
        // $student->name="MgSan";
        // $student->remark="He is tall";
        // $student->age=34;
        // $student->save();

        Student::create([
            'name'=>'MgKaung',
            'remark'=>'He is photographer',
            'age'=>25
        ]);

        return redirect()->route('students.index');
    }
    public function update(){
        $student=Student::find(4);
        $student->age=24;
        $student->save();
        return redirect()->route('students.index');
    }
    public function delete(){
        // $student=Student::find(1);
        // $student->delete();

        Student::destroy(2);

        return redirect()->route('students.index');
    }
    public function trash($id){
        Student::find($id)->delete();
        return redirect()->route('students.index');
    }
    public function trashData(){
        $students=Student::onlyTrashed()->get();
        return view('students.trash',compact('students'));
    }
    public function trashRestore($id){
        Student::withTrashed()->where('id',$id)->restore();
        return redirect()->route('students.index');
    }
    public function forcedelete($id){
        Student::find($id)->forceDelete();
        return redirect()->route('students.index');
    }
}
