@extends('dashboard.master')

@section('content')
    <form action="{{ route('tasks.store') }} " method="post" enctype="multipart/form-data">
        @csrf
        <div class="container mt-3">

            <div class="row">
                <div class="col-xl">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">New Task</h5>
                        </div>
                        <div class="card-body">


                            <div class="mb-3">
                                <label class="form-label">Title </label>
                                <input type="text" class="form-control w-50" name="title">
                            </div>
                            <div class="alert-danger">{{ $errors->first('title') }}</div>

                            <div class="mb-3">
                                <label class="form-label"> Description </label>
                                <textarea type="text" class="form-control w-50" name="description"></textarea>
                            </div>
                            <div class="alert-danger">{{ $errors->first('description') }}</div>


                            <br>
                            <button
                                type="submit"onclick="this.disabled=true;this.value='Submitting...'; this.form.submit();"
                                class="btn btn-primary">Add</button>
                        </div>
                    </div>
                </div>
    </form>
@endsection
