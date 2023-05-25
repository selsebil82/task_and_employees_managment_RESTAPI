<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return view('taskinter', ['tasks' => $tasks]);
    }

    public function show($id)
    {
        $task = Task::find($id);
    
        if (!$task) {
            return response()->json(['error' => 'Task not found'], 404);
        }
    
        return view('show', ['task' => $task]);
    }
    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'description' => 'required|string|max:255',
            'employee_id' => 'required',
                
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $task = new Task;
        $task->description = $request->description;
        $task->employee_id = $request->employee_id;
        $task->save();

        return redirect()->route('tasks.index')->with('success', 'Task stored successfully!');
    }




    
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'description' => 'required|string|max:255',
            'employee_id' => 'required|exists:employees,id',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $task = Task::findOrFail($id);
    
        $task->description = $request->description;
        $task->employee_id = $request->employee_id;
        $task->save();
    
        return redirect()->route('tasks.index', ['id' => $task->id])->with('success', 'Task updated successfully!');
    }
    

    public function edit($id)
{
    $task = Task::findOrFail($id);

    return view('edit', ['task' => $task]);
}

    

    
    


    public function destroy($id)
    {
        $task = Task::find($id);

        if (!$task) {
            return response()->json(['error' => 'Task not found'], 404);
        }

        $task->delete();

        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully!');
    }
}
