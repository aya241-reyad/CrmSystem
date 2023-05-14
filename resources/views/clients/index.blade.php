@extends('dashboard.master')
@section('content')
    <div class="container mt-3">
        <div class="card">
            <div class="row">
                <div class="card-header">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>Clients</h2>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('clients.create') }}"> Create Client</a>
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
                        <th>Phone</th>
                        <th>Image</th>
                        <th>actions</th>
                    </tr>
                    <?php $i = 0; ?>
                    @foreach ($clients as $key => $client)
                        <?php $i++; ?>
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $client->name }}</td>
                            <td>{{ $client->email }}</td>
                            <td>{{ $client->phone }}</td>
                            <td>
                                <img src="{{ asset($client->attachmentRelation[0]->path) }}"width="50" height="50">

                            </td>
                            <td>
                                <a class="btn btn-sm round btn-outline-primary m-2"
                                    href="{{ route('clients.edit', $client->id) }}">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <br>
                                <form action="{{ route('clients.destroy', ['client' => $client->id]) }}" method="POST">
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
