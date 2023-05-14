@extends('dashboard.master')
@section('title')
    home page
@endsection
@inject('tasks', 'App\Models\Task')
@inject('users', 'App\Models\User')
@inject('clients', 'App\Models\Client')
@inject('projects', 'App\Models\Project')

@section('content')
<div class="container mt-3">
    <div class="card">
        <div class="row ">

            <div class="col-lg-6 col-6">

                <div class="small-box m-3 p-3"  style="background-color:hotpink; color:#fff">
                    <div class="inner">

                        <h4 style="color:#fff; font-size:2rem"><i class="menu-icon tf-icons bx bx-package"></i> projects</h4>
                        <p style="font-size:1.5rem">No : {{ $projects->count() }}</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-6">

                <div class="small-box  m-3 p-3" style="background-color:rgb(132, 212, 154); color:#fff">
                    <div class="inner">
                        <h4  style="color:#fff; font-size:2rem"><i class="menu-icon tf-icons bx bx-poll"></i> tasks</h4>
                        <p  style="font-size:1.5rem">No : {{ $tasks->count() }}</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">

            <div class="col-lg-6 col-6">

                <div class="small-box bg-secondary  m-3 p-3"style="background-color:rgb(132, 212, 154); color:#fff" >
                    <div class="inner">
                        <h4 style="color:#fff; font-size:2rem"><i class="menu-icon tf-icons bx bx-user"></i> clients</h4>
                        <p style="font-size:1.5rem">No : {{ $clients->count() }}</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                </div>
            </div>


            <div class="col-lg-6 col-6">

                <div class="small-box   m-3 p-3" style="background-color:rgb(132, 193, 212); color:#fff">
                    <div class="inner">
                        <h4 style="color:#fff; font-size:2rem"><i class="menu-icon tf-icons bx bx-user-circle"></i> users</h4>
                        <p style="font-size:1.5rem">No : {{ $users->count() }}</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                </div>
            </div>












        </div>



    </div>
    </div>
@endsection
