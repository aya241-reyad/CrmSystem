@extends('dashboard.master')
@section('content')
    <div class="container mt-3">
        <div class="card">
            <div class="row">
                <div class="card-header">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>Projects</h2>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('projects.create') }}">Create Project</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Deadline</th>
                        <th>Asigned User</th>
                        <th>Asigned Client</th>
                        <th width="280px">actions</th>
                    </tr>
                    <?php $i = 0; ?>
                    @foreach ($projects as $key => $project)
                        <?php $i++; ?>
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $project->title}}</td>
                            <td>{{ $project->description}}</td>
                            <td>{{ $project->deadline}}</td>
                            <td>{{ $project->user->name}}</td>
                            <td>{{ $project->client->name}}</td>
                            <td>
                                <a class="btn btn-sm round btn-outline-primary m-2"
                                    href="{{ route('projects.edit', $project->id) }}">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <br>
                                <form action="{{ route('projects.destroy', ['project' => $project->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-sm round btn-outline-danger m-2"> <i
                                            class="fa-solid fa-trash"></i></button>

                                </form>


                            </td>





                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
