@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Listings</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vitae congue mauris rhoncus aenean. Non pulvinar neque laoreet suspendisse interdum consectetur libero id faucibus. Aliquet eget sit amet tellus cras. Rhoncus aenean vel elit scelerisque.</p>
    </div>
    @if (count($listings) > 0)
        @foreach ($listings as $listing)
            <div class="card-group">
                <div class="card">
                    @if ($listing->image != NULL)
                        <a href="/listings/{{$listing->id}}"><img class="card-img-top" src="/storage/images/{{$listing->image}}" alt="Card image cap"></a>
                    @else
                        <a href="/listings/{{$listing->id}}"><img class="card-img-top"  src="https://mba.reviews/wp-content/uploads/2018/07/University-of-Huddersfield.png" alt="Card image cap"></a>
                    @endif
                    <div class="card-body">
                        <h5 class="card-title"><a href="/listings/{{$listing->id}}">{{$listing->title}}</a></h5>
                        <p class="card-text">{{$listing->short}}</p>
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
        <p>No Listings Found!</p>
    @endif
@endsection