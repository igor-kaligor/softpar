<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{

    public function index()
    {
        return Task::all();
    }

    public function store(Request $request)
    {
        $task = new Task();
        $task->name = $request->input('name');
        $task->init = $request->input('init');
        $task->end = $request->input('end');
        $task->description = $request->input('description');
        $task->conclude = false;
        if( $task->save() ){
            return $task;
        }
    }


    public function show($id)
    {
        $task = Task::findOrFail( $id );
        return $task;
    }



    public function update(Request $request, $id)
    {
        $task = Task::findOrFail( $id );
        $task->name = $request->input('name');
        $task->init = $request->input('init');
        $task->end = $request->input('end');
        $task->description = $request->input('description');
        $task->conclude = $request->input('conclude');
        if( $task->save() ){
            return $task;
        }

    }
    public function conclude( $id, $conclude)
    {
        $task = Task::findOrFail( $id );
        $task->conclude = $conclude;
        if( $task->save() ){
            return $task;
        }

    }
    public function destroy($id)
    {
        $task = Task::findOrFail( $id );
        if( $task->delete() ){
            return $task;
        }
    }
}
