@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <h2 class="my-4">Violations</h2>
            <div class="card">
                <div class="card-header bg-primary">
                    <i class="fa fa-warning"></i> <span class="lead">Records of {{ $vehicle->system_id }}</span>
                </div>
                <div class="card-body">
                    <table  class="table table-striped table-borderless datatable table-responsive-xl">
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
                                        <div class="btn-group">
                                            <form action="{{ route('records.destroy', $record->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf

                                                <button type="submit" onclick="return confirm('Are you sure to delete?')" class="btn btn-outline-primary mr-1"><i class="fa fa-close"></i></button>
                                            </form>
                                        </div>
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