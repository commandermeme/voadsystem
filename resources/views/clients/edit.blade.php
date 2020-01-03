@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <h2 class="my-4"><i class="fa fa-edit"></i> Edit Client</h2>
            <div class="card">
                <div class="card-header bg-primary">
                    <i class="fa fa-user"></i> <span class="lead">Registered Client</span>
                </div>
                <div class="card-body">
                    <form action="{{ route('clients.update', $client->id) }}" id="signupForm" method="POST">
                        @method('PUT')
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fname">First Name</label>
                                    <input type="text" id="fname" class="form-control" name="fname" value="{{ $client->fname }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lname">Last Name</label>
                                    <input type="text" id="lname" class="form-control" name="lname" value="{{ $client->lname }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" id="address" class="form-control" name="address" value="{{ $client->address }}">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Phone No.</label>
                                    <input type="text" id="phone" class="form-control" name="phone" value="{{ $client->phone }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="licence">Licence No.</label>
                                    <input type="text" id="licence" class="form-control" name="licence" value="{{ $client->licence }}">
                                </div>
                            </div>
                        </div>
                        <input class="btn btn-primary" type="submit" value="Save">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection