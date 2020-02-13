@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <h2 class="my-4">Clients</h2>
            <button type="button" class="btn btn-lg btn-primary mb-3" data-toggle="modal" data-target="#addClient">
                <i class="fa fa-plus"></i> Add Client
            </button>

            <div class="card">
                <div class="card-header bg-primary">
                    <i class="fa fa-users"></i> <span class="lead">Registered Clients</span>
                </div>
                <div class="card-body">
                    <div class="table-responsive-xl">
                        <table  class="table table-striped table-borderless datatable">
                            <thead>
                                <tr>
                                    <th>Licence No.</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clients as $client)
                                    <tr>
                                        <td>{{ $client->licence }}</td>
                                        <td>{{ $client->fname }}</td>
                                        <td>{{ $client->lname }}</td>
                                        <td>{{ $client->address }}</td>
                                        <td>{{ $client->phone }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-outline-primary mr-1">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <form class="d-inline mr-1" action="{{ route('clients.destroy', $client->id) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" onclick="return confirm('Are you sure to delete?')" class="btn btn-outline-primary"><i class="fa fa-close"></i></button>
                                                </form>
                                                <a href="{{ route('vehicles.show', $client->id) }}" class="btn btn-outline-primary">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> 
            
            <!--MODALS-->
            <!--add client modal-->
            <div class="modal fade" id="addClient" tabindex="-1" role="dialog" aria-labelledby="addClientLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <form action="{{ route('clients.store') }}" method="POST" id="signupForm">
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <div class="modal-title" id="addClientLabel">
                                    <i class="fa fa-user-plus"></i> <span class="lead">Register CLient</span>
                                </div>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
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
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <input class="btn btn-primary" type="submit" value="Save">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection