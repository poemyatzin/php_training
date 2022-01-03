<?php

namespace App\Contracts\Service;


use Illuminate\Http\Request;


interface StudentServiceInterface
{
    public function getStudentList();
    public function saveStudent(Request $request);
    public function editStudent($id);
    public function updateStudent(Request $request,$id);
    public function deleteStudent($id);
  
}