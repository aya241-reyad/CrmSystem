@extends('dashboard.master')
@section('content')
    <div class="container mt-3">
        <div class="card">
            <div class="row">
                <div class="card-header">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>Users</h2>
                        </div>
                        <div class="pull-right">
                        
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                
                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                    <?php $i = 0; ?>
                    @foreach ($users as $key => $user)
                        <?php $i++; ?>
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
