@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <h2 class="my-4">Vehicles</h2>
            <button type="button" class="btn btn-lg btn-primary mb-3" data-toggle="modal" data-target="#addVehicle">
                <i class="fa fa-plus"></i> Add Vehicle
            </button>

            

            <div class="card">
                <div class="card-header bg-primary">
                    <i class="fa fa-car"></i> <span class="lead">Registered Vehicles of {{ $client->fname .' '. $client->lname }}</span>
                </div>
                <div class="card-body">
                    <div class="table-responsive-xl">
                        <table  class="table table-striped table-borderless datatable">
                            <thead>
                                <tr>
                                    <th>Type</th>
                                    <th>Plate No.</th>
                                    <th>System ID</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($vehicles as $vehicle)
                                    <tr>
                                        <td>{{ $vehicle->type }}</td>
                                        <td>{{ $vehicle->plate_no }}</td>
                                        <td>{{ $vehicle->system_id }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ route('vehicles.edit', $vehicle->id) }}" class="btn btn-outline-primary mr-1"><i class="fa fa-edit"></i></a>
                                                <form class="d-inline mr-1" action="{{ route('vehicles.destroy', $vehicle->id) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" onclick="return confirm('Are you sure to delete?')" class="btn btn-outline-primary"><i class="fa fa-close"></i></button>
                                                </form>
                                                <a href="#" class="btn btn-outline-primary"><i class="fa fa-warning"></i></a>
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
            <!--add vehicel modal-->
            <div class="modal fade" id="addVehicle" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form action="{{ route('vehicles.store') }}" method="POST" id="signupForm">
                            @csrf
                            <input type="hidden" name="client_id" value="{{ $client->id }}">    
                            <div class="modal-header bg-primary">
                                <div class="modal-title" id="exampleModalLabel">
                                    <i class="fa fa-plus"></i><i class="fa fa-car"></i> <span class="lead">Add Vehicle</span>
                                </div>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="type">Type</label>
                                            <select id="type" class="form-control" name="type">
                                                <option value="sedan">Sedan</option>
                                                <option value="suv">SUV</option>
                                                <option value="van">Van</option>
                                                <option value="bus">Bus</option>
                                                <option value="motorcyle">Motorcyle</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="plate_no">Plate No.</label>
                                            <input type="text" id="plate_no" class="form-control" name="plate_no">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="system_id">System ID</label>
                                    <input type="text" id="system_id" class="form-control" name="system_id">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <input class="btn btn-primary" type="submit" value="Save">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection