@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            
            <div class="card">
                <div class="card-header bg-primary">
                    <i class="fa fa-car"></i> <span class="lead">Registered Vehicles</span>
                </div>
                <div class="card-body">
                    <table  class="table table-striped table-borderless datatable">
                        <thead>
                            <tr>
                                <th>Type</th>
                                <th>Owner</th>
                                <th>Plate No.</th>
                                <th>System ID</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vehicles as $vehicle)
                                @foreach ($clients as $client)
                                    @if ($vehicle->client_id == $client->id)
                                        <tr>
                                            <td>{{ $vehicle->type }}</td>
                                            <td>{{ $client->fname .' '. $client->lname }}</td>
                                            <td>{{ $vehicle->plate_no }}</td>
                                            <td>{{ $vehicle->system_id }}</td>
                                            <td>
                                                <a href="#" class="btn btn-outline-primary"><i class="fa fa-edit"></i></a>
                                                <a href="#" class="btn btn-outline-primary"><i class="fa fa-close"></i></a>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div> 
        </div>
    </div>
@endsection