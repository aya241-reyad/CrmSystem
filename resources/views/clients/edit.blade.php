@extends('dashboard.master')

@section('content')
    <form action="{{ url('clients/' . $client->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('Patch')
        <div class="container mt-3">
            <div class="card mb-4">
                <h5 class="card-header">Edit Client</h5>
                <div class="card-body">

                    <div class="mb-3">
                        <label class="form-label"> Name </label>
                        <input type="text" class="form-control w-50" name="name" value="{{ $client->name }}">
                    </div>
                    <div class="alert-danger">{{ $errors->first('name') }}</div>

                    
                  <div class="mb-3">
                        <label class="form-label"> Email </label>
                        <input type="text" class="form-control w-50" name="email" value="{{ $client->email}}">
                    </div>
                    <div class="alert-danger">{{ $errors->first('email') }}</div>


                    <div class="mb-3">
                        <label class="form-label"> Phone </label>
                        <input type="text" class="form-control w-50" name="phone" value="{{ $client->phone}}">
                    </div>
                    <div class="alert-danger">{{ $errors->first('phone') }}</div>

                    
                    

                    <div class="mb-3">
                        <label for="img">Select image:</label>
                        <input class="btn btn-primary" type="file" id="img" name="attachment" accept="image/*">
                    </div>


                    </br>
                    <div class="alert-danger">{{ $errors->first('attachment') }}</div>



                    <button type="submit"onclick="this.disabled=true;this.value='Submitting...'; this.form.submit();"
                        class="btn btn-outline-primary"> Edit</button>














    </form>
@endsection
