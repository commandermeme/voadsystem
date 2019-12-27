@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <h2 class="my-4">Clients</h2>
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header bg-success">
                            <i class="fa fa-user-plus"></i> <span class="lead">Register CLient</span>
                        </div>
                        <form action="{{ route('clients.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fname">First Name</label>
                                            <input type="text" id="fname" class="form-control" name="fname">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lname">Last Name</label>
                                            <input type="text" id="lname" class="form-control" name="lname">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" id="address" class="form-control" name="address">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone">Phone No.</label>
                                            <input type="text" id="phone" class="form-control" name="phone">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="licence">Licence No.</label>
                                            <input type="text" id="licence" class="form-control" name="licence">
                                        </div>
                                    </div>
                                </div>
                                <input class="btn btn-success" type="submit" value="Register">
                            </div>
                        </form>
                    </div>
                </div>  
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-header bg-success">
                            <i class="fa fa-users"></i> <span class="lead">Registered Clients</span>
                        </div>
                        <div class="card-body">
                            <table  class="table table-striped table-borderless datatable">
                                <thead>
                                    <tr>
                                        <th>Licence No.</th>
                                        <th>Last Name</th>
                                        <th>First Name</th>
                                        <th>Address</th>
                                        <th>Phone</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clients as $client)
                                        <tr>
                                            <td>{{ $client->licence }}</td>
                                            <td>{{ $client->lname }}</td>
                                            <td>{{ $client->lname }}</td>
                                            <td>{{ $client->address }}</td>
                                            <td>{{ $client->phone }}</td>
                                            <td>
                                                <a href="" class="btn btn-outline-success"><i class="fa fa-edit"></i></a>
                                                <a href="" class="btn btn-outline-success"><i class="fa fa-close"></i></a>
                                                <a href="{{ route('vehicles.show', $client->id) }}" class="btn btn-outline-success"><i class="fa fa-plus"></i> <i class="fa fa-car"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>  
                </div>   
            </div>   
        </div>
    </div>
@endsection