<?php

namespace App\Service;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Contracts\Dao\StudentDaoInterface;
use App\Contracts\Service\StudentServiceInterface;

/**
 * Service class for task.
 */
class StudentService implements StudentServiceInterface
{
    /**
     * task dao
     */
    private $studentDao;
    public function __construct(StudentDaoInterface $studentDao)
    {
        $this->studentDao = $studentDao;
    }
    public function getStudentList()
    {
        return $this->studentDao->getStudentList();
    }
    public function saveStudent(Request $request)
    {
        return $this->studentDao->saveStudent($request);  
    }
    public function editStudent($id){
        return $this->studentDao->editStudent($id);
    }
    public function updateStudent(Request $request,$id){
        return $this->studentDao->updateStudent($request,$id);
    }
    public function deleteStudent($id){
        return $this->studentDao->deleteStudent($id);
    }
    public function getimportexcel(Request $request)
    {
        return $this->studentDao->getimportexcel($request);
    }
    public function search(Request $request)
    {
        return $this->studentDao->search($request);
    }
  }