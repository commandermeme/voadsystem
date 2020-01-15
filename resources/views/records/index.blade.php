@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <h2 class="my-4">Violations</h2>
            <div class="card">
                <div class="card-header bg-primary">
                    <i class="fa fa-warning"></i> <span class="lead">Records</span>
                </div>
                <div class="card-body">
                    <table  class="table table-striped table-borderless datatable">
                        <thead>
                            <tr>
                                <th>System ID</th>
                                <th>Speed</th>
                                <th>Speed Limit</th>
                                <th>Location</th>
                                <th>Date</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($records as $record)
                                <tr>
                                    <td>{{ $record->system_id }}</td>
                                    <td>{{ $record->speed }}</td>
                                    <td>{{ $record->speed_limit }}</td>
                                    <td>{{ $record->location }}</td>
                                    <td>{{ $record->created_at }}</td>
                                    <td>
                                        <a href="#" class="btn btn-outline-primary"><i class="fa fa-close"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div> 
        </div>
    </div>
@endsection