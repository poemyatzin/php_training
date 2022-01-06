<?php

namespace App\Dao;

use App\Contracts\Dao\StudentDaoInterface;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Exports\StudentExport;
use App\Imports\StudentImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;

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
    public function search(Request $request)
    {
        $s_date=$request->input('startdate');
        $end_date=$request->input('enddate');
        $n=$request->input('searchname');
       $student=DB::table('students')
       ->join('majors','majors.id','=','students.majorid')
       ->select('students.id','students.name','students.dob','students.phone','students.address','majors.major')
       ->where('students.name','LIKE','%'.$n.'%')
       ->where('students.created_at','>=',$s_date)
       ->where('students.updated_at','<=',$end_date)
       ->get();
       return $student;
    }
}