@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Listings Overview</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vitae congue mauris rhoncus aenean. Non pulvinar neque laoreet suspendisse interdum consectetur libero id faucibus. Aliquet eget sit amet tellus cras. Rhoncus aenean vel elit scelerisque.</p>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
    </div>
    <div class="card-header">
        Manage Listings
    </div>
    @if (count($listings) > 0)
        @foreach ($listings as $listing)
            <div class="card-group">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><a href="/listings/{{$listing->id}}">{{$listing->title}}</a></h5>
                        <p class="card-text">{{$listing->short}}</p>
                        <a href="/listings/{{$listing->id}}/edit" class="btn btn-success">Edit Listing</a>
                        {!! Form::open(['action' => ['App\Http\Controllers\ListingsController@destroy', $listing->id], 'method' => 'POST',  'class' => 'btn pull-right'])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                        {!! Form::close() !!}
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Posted on: {{$listing->created_at}} by {{$listing->user->name}}.</small>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="pagination-block">
            {{ $listings->links('include.paginationlinks') }}
        </div> 
    @else
        <div class="card-header">
            You have no listings!
        </div>
    @endif
@endsection
