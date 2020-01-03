@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <h2 class="my-4">Records</h2>
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
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div> 
        </div>
    </div>
@endsection