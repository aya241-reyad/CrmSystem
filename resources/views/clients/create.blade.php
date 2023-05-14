@extends('dashboard.master')

@section('content')
    <form action="{{ route('clients.store') }} " method="post" enctype="multipart/form-data">
        @csrf
        <div class="container mt-3">

            <div class="row">
                <div class="col-xl">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">New Client</h5>
                        </div>
                        <div class="card-body">


                            <div class="mb-3">
                                <label class="form-label"> Name </label>
                                <input type="text" class="form-control w-50" name="name">
                            </div>
                            <div class="alert-danger">{{ $errors->first('name') }}</div>

                            <div class="mb-3">
                                <label class="form-label"> Email </label>
                                <input type="text" class="form-control w-50" name="email">
                            </div>
                            <div class="alert-danger">{{ $errors->first('email') }}</div>



                            <div class="mb-3">
                                <label class="form-label">Phone</label>
                                <input type="text" class="form-control w-50" name="phone">
                            </div>
                            <div class="alert-danger">{{ $errors->first('phone') }}</div>

                            <div class="mb-3">
                                <label for="img">Select image:</label>
                                <input class="btn btn-primary" type="file" id="img" name="attachment" accept="image/*">
                            </div>


                            </br>
                            <div class="alert-danger">{{ $errors->first('attachment') }}</div>
                            <button
                                type="submit"onclick="this.disabled=true;this.value='Submitting...'; this.form.submit();"
                                class="btn btn-primary">Add</button>
                        </div>
                    </div>
                </div>
    </form>
@endsection
