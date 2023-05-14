<?php

namespace App\Http\Controllers\Admin;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;
use App\Http\Controllers\Controller;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $tasks=Task::all();
return view('tasks.index',compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskRequest $request)
    {
      $task= Task::create([
'title'=>$request->title,
'description'=>$request->description,
      ]);
      $task->save();
      return redirect('/tasks');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $task=Task::find($id);
    return view('tasks.edit',compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TaskRequest $request,  $id)
    {
          $task=Task::find($id);
          $task->update([
            'title'=>$request->title,
            'description'=>$request->description,
 ]);
          return redirect('/tasks');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $task=Task::find($id);
        $task->delete();
        return redirect('/tasks');
    }
}
