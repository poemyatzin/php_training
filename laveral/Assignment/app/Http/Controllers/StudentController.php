<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Major;
use App\Contracts\Service\StudentServiceInterface;
use Illuminate\Support\Facades\Validator;


class StudentController extends Controller
{
    private $studentInterface;
    public function __construct(StudentServiceInterface $studentServiceInterface)
    {
        $this->studentInterface = $studentServiceInterface;
    }
    public function index()
    {
        $student=$this->studentInterface->getStudentList();
        return view('student.index',compact('student'));

    }
    public function creat()
    {
        $data = Major::all();
        return view('student.create', [
            'majors' => $data
        ]);

    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'dob' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'majorid' => 'required',

        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $student = $this->studentInterface->saveStudent($request);
        if ($student) {
            return redirect('/test');
        }
    }
    public function edit($id)
    {
        $data = Major::all();
        $student = $this->studentInterface->editStudent($id);
        return view('student.edit', [
            'student' => $student,
            'majors' => $data,
        ]);
    }
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'dob' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'majorid' => 'required',

        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }
        $student = $this->studentInterface->updateStudent($request, $id);
        if ($student) {
            return redirect('/test');
        }
    }
    public function delete($id)
    {
        $student = $this->studentInterface->deleteStudent($id);
        if ($student) {
            return redirect()->back();
        }
    }


}
