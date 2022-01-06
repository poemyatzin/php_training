<?php

namespace App\Contracts\Dao;

use Illuminate\Http\Request;

interface StudentDaoInterface
{
    public function getStudentList();
    public function saveStudent(Request $request);
    public function editStudent($id);
    public function updateStudent(Request $request,$id);
    public function deleteStudent($id);
    public function getimportexcel(Request $request);
    public function search(Request $request);
  
}
