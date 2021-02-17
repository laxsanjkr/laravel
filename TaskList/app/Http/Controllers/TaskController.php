<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {   
        //Verifie si l'utilisateur et connecté

        $tasks = Item::orderBy('created_at', 'DESC')->get();
        
        return view('tasks', ['tasksList'=>$tasks]);

        // return array_reverse($tasks);      
    }

    public function store(Request $request)
    {
        $task = new Task([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'color' => $request->input('color'),
            'level' => $request->input('level'),
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
