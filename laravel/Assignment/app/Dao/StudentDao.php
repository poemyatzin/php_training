<?php

namespace App\Dao;

use App\Contracts\Dao\StudentDaoInterface;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Exports\StudentExport;
use App\Imports\StudentImport;
use Maatwebsite\Excel\Facades\Excel;



class StudentDao implements StudentDaoInterface
{

    public function getStudentList()
    {
        return Student::all();
     }
    public function saveStudent(Request $request)
    {
     
    $student = new Student;
        $student->name = $request->input('name');
        $student->dob = $request->input('dob');
        $student->phone = $request->input('phone');
        $student->address = $request->input('address');
        $student->majorid = $request->input('majorid');
        
        $student->save();
        return $student;
    }
    public function editStudent($id){
        return Student::find($id);
    }
    public function updateStudent(Request $request, $id)
    {
     
    $student = Student::find($id);
    $student->name = $request->input('name');
    $student->dob = $request->input('dob');
    $student->phone = $request->input('phone');
    $student->address = $request->input('address');
    $student->majorid = $request->input('majorid');
    $student->update();
        return $student;
    }
    public function deleteStudent($id)
    {
        $student = Student::find($id);
       
        $student->delete();
        return $student;
    }
    public function getimportexcel(Request $request)
    {
       $data=$request->file('file');

        return $data;
    }
   
}