<?php

namespace App\Dao;

use App\Contracts\Dao\TaskDaoInterface;
use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Validator;

/**
 * Interface for Data Accessing Object of task
 */
class TaskDao implements TaskDaoInterface
{
    /**
     * To get task list
     * @return $taskList
     */
    public function getTaskList()
    {
        return Task::orderBy('created_at', 'asc')->get();
        
    }

    /**
     * To store post
     * @param Request $request request with inputs
     * @return Object $task saved task
     */
    public function saveTask(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('test.index')
                ->withInput()
                ->withErrors($validator);
        }
        
        $task = new Task;
        $task->name = $request->name;
        $task->save();

        return $task;
    }

    /**
     * To update task
     * @param Request $request request with inputs
     * @param \App\Models\Task  $task
     * @return Object $task Post Object
     */
   /* public function updateTask(Request $request, Task $task)
    {
        
    }*/

    /**
     * To delete task
     * @param \App\Models\Task  $task
     * @return string $message message success or not
     */
    public function deleteTask(Task $task)
    {
        return $task->delete();
    }
}
