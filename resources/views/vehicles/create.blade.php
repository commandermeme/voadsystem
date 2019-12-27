@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <h2 class="my-4">Vehicles</h2>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <i class="fa fa-user-plus"></i> <span class="lead">Add Vehicle</span>
                        </div>
                        <form action="{{ route('vehicles.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="clien_id" value="">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="type">Type</label>
                                            <input type="text" id="type" class="form-control" name="type">
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
                                <input class="btn btn-success" type="submit" value="Register">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection