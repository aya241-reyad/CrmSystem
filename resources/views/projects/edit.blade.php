@extends('dashboard.master')

@section('content')
   <form action="{{ url('projects/' . $project->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('Patch')
        <div class="container mt-3">

            <div class="row">
                <div class="col-xl">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Edit Project</h5>
                        </div>
                        <div class="card-body">


                             <div class="mb-3">
                                <label class="form-label">Title </label>
                                <input type="text" class="form-control w-50" name="title" value="{{$project->title}}">
                            </div>
                            <div class="alert-danger">{{ $errors->first('title') }}</div>

                            <div class="mb-3">
                                <label class="form-label"> Description </label>
                                <textarea type="text" class="form-control w-50" name="description">{{$project->description}}</textarea>
                            </div>
                            <div class="alert-danger">{{ $errors->first('description') }}</div>


                            <div class="mb-3">
                                <label class="form-label">Deadline</label>
                                <input type="date" class="form-control w-50" name="deadline" value="{{$project->deadline}}"></input>
                            </div>
                            <div class="alert-danger">{{ $errors->first('deadline') }}</div>


                            <div class="mb-3">
                        <label for="defaultSelect" class="form-label">Asigned User</label>
                        <div class="form-group">
                            <select class="form-control w-50" name="user_id" aria-label="Default select example">
                                <option value="{{ $project->user_id }}">{{ $project->user->name }}</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="alert-danger">{{ $errors->first('user_id') }}</div>


                     <div class="mb-3">
                        <label for="defaultSelect" class="form-label">Asigned Client</label>
                        <div class="form-group">
                            <select class="form-control w-50" name="client_id" aria-label="Default select example">
                                <option value="{{ $project->client_id }}">{{ $project->client->name }}</option>
                                @foreach ($clients as $client)
                                    <option value={{ $client->id }}>{{ $client->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="alert-danger">{{ $errors->first('client_id') }}</div>



                            <br>
                            <button
                                type="submit"onclick="this.disabled=true;this.value='Submitting...'; this.form.submit();"
                                class="btn btn-primary">Edit</button>
                        </div>
                    </div>
                </div>
    </form>
@endsection
