@extends('dashboard.master')
@section('content')
    <div class="container mt-3">
        <div class="card">
            <div class="row">
                <div class="card-header">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>Tasks</h2>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('tasks.create') }}"> Create Task</a>

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
                        <th>Actions</th>
                    </tr>
                    <?php $i = 0; ?>
                    @foreach ($tasks as $key => $task)
                        <?php $i++; ?>
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $task->title }}</td>
                            <td>{{ $task->description }}</td>
                            <td class="d-flex">

                                <a class="btn btn-sm round btn-outline-primary m-2" href="{{ route('tasks.edit', $task->id) }}">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <br>
                                <form action="{{ route('tasks.destroy', ['task' => $task->id]) }}" method="POST" >
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
