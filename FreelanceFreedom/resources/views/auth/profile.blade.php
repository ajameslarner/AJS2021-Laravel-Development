@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>User Profile</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vitae congue mauris rhoncus aenean. Non pulvinar neque laoreet suspendisse interdum consectetur libero id faucibus. Aliquet eget sit amet tellus cras. Rhoncus aenean vel elit scelerisque.</p>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
    </div>
    <div class="card">
        @if (count($listings) > 0)
            <div class="card-header">
                Your Listings
            </div>
            @foreach ($listings as $listing)
                <div class="card-body">
                    <h5 class="card-title">{{$listing->title}}</h5>
                    <p class="card-text">{{$listing->short}}</p>
                    <a href="/listings/{{$listing->id}}/edit" class="btn btn-success">Edit</a>
                    {!! Form::open(['action' => ['App\Http\Controllers\ListingsController@destroy', $listing->id], 'method' => 'POST',  'class' => 'btn pull-right'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                    {!! Form::close() !!}
                    <hr>
                </div>
            @endforeach
        @else
            <div class="card-header">
                You have no listings!
            </div>
        @endif
    </div>
@endsection
