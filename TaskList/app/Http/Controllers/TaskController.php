<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {   
        //Verifie si l'utilisateur et connecté
        $user = auth()->user();

        $tasks = Task::all()->toArray();
        
        return view('tasks', ['tasksList'=>$tasks]);

        // return array_reverse($tasks);      
    }

    public function store(Request $request)
    {
        $task = new Task([
            'name' => $request->input('name'),
            'detail' => $request->input('detail')
        ]);
        $task->save();

        return response()->json('Task created!');
    }

    public function show($id)
    {
        $task = Task::find($id);
        return response()->json($task);
    }

    public function update($id, Request $request)
    {
        $task = Task::find($id);
        $task->update($request->all());

        return response()->json('Task updated!');
    }

    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();

        return response()->json('Task deleted!');
    }
}
