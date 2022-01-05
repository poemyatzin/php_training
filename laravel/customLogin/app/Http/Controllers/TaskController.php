<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\Services\TaskServiceInterface;
use App\Models\Task;
use App\Http\Controllers\Controller;

class TaskController extends Controller
{
    private $taskInterface;
    public function __construct(TaskServiceInterface $taskServiceInterface)
    {
        $this->taskInterface = $taskServiceInterface;
    }
   
    public function index()
    {
        $tasks = $this->taskInterface->getTaskList();
        return view('tasks', ['tasks' => $tasks]);
    }


    public function store(Request $request)
    {
        $task = $this->taskInterface->saveTask($request);

        if ($task) {
            return redirect()
                ->route('test.index');
               
        }         
    }
   
    public function destroy(Task $task)
    {
        $result = $this->taskInterface->deleteTask($task);

        if ($result) {
            return redirect()
                ->route('test.index');
        }
    }
}
