@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vitae congue mauris rhoncus aenean. Non pulvinar neque laoreet suspendisse interdum consectetur libero id faucibus. Aliquet eget sit amet tellus cras. Rhoncus aenean vel elit scelerisque.</p>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h5 class="card-header">Register Your Account</h5>
                <div class="card-body">
                    <h5 class="card-title">Sign up today!</h5>
                    <p class="card-text">You can start post your listings and finding listings.</p>
                    <a href="/register" class="btn btn-primary">Register</a>
                </div>
            </div>
        </div>
    </div>
@endsection