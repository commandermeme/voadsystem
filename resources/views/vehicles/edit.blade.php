@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <h2 class="my-4"><i class="fa fa-edit"></i> Edit Vehicle</h2>
            <div class="card">
                <div class="card-header bg-primary">
                    <i class="fa fa-car"></i> <span class="lead">Registered Vehicle</span>
                </div>
                <div class="card-body">
                    <form action="{{ route('vehicles.update', $vehicle->id) }}" method="POST">
                        @method('PUT')
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="type">Type</label>
                                    <input type="text" id="type" class="form-control" name="type" value="{{ $vehicle->type }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="plate_no">Plate No.</label>
                                    <input type="text" id="plate_no" class="form-control" name="plate_no" value="{{ $vehicle->plate_no }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="system_id">System ID</label>
                            <input type="text" id="system_id" class="form-control" name="system_id" value="{{ $vehicle->system_id }}">
                        </div>
                        <input class="btn btn-primary" type="submit" value="Save">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection