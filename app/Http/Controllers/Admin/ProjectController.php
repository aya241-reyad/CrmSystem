<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Client;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;

class ProjectController extends Controller
{
    public function index()
    {
        $projects=Project::all();
        return view('projects.index',compact('projects'));
    }


    public function create()
    {
        $users=User::all();
        $clients=Client::all();
        return view('projects.create',compact('users','clients'));
    }


public function store(Request $request)
    {

        $project=Project::create([
            'title' => $request->title,
            'description' => $request->description,
            'deadline' => $request->deadline,
            'user_id' => $request->user_id,
            'client_id'=>$request->client_id
        ]);
        $project->save();
        return redirect('/projects');
    }

    public function edit( $id)
    {
        $project=Project::find($id);
        $users=User::all();
        $clients=Client::all();
    return view('projects.edit',compact('project','users','clients'));
    }


     public function update(ProjectRequest $request,  $id)
    {
 $project=Project::find($id);
    $project->update([
           'title' => $request->title,
            'description' => $request->description,
            'deadline' => $request->deadline,
            'user_id' => $request->user_id,
            'client_id'=>$request->client_id
       ]);

    return redirect('/projects');
    }


     public function destroy($id)
    {
$project=Project::find($id);
    $project->delete();
    return redirect('/projects');
    }















}
