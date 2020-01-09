@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <h4 class="my-4">Tracking</h4>
            <form action="">
                <input type="text" name="lat">
                <input type="text" name="long">
                <input type="submit" value="sabmit">
            </form>
        </div>
    </div>
@endsection