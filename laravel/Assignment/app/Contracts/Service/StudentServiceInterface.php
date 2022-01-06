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
    public function getimportexcel(Request $request);
    public function search(Request $request);
  
}