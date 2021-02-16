<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Requests\TaskRequest;

class TaskController extends Controller
{
    public function index(Request $request){
        return view('welcome');
        //return $request->path();
    }
    

    public function taskCreate(Request $request){
       $task = new Task();

        $task->title = $request->input('title');
        $task->description = $request->input('description');
        $task->color = $request->input('color');
        $task->level = $request->input('level');
 
        $task->save();

        if($task){
            return ["reussit lors de l'insertion"];
        }
        else{
            return ["probleme lors de l'insertion"];
        }
        //return response()->json($task);
    }
}
