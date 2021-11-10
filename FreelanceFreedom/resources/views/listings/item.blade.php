@extends('layouts.app')

@section('content')
    @if ($listing)
        <div class="jumbotron text-center">
            <h1>{{$listing->title}}</h1>
            <hr>
            <small>{{$listing->created_at}} by {{$listing->user->name}}</small>
            <hr>
            @if ($listing->image != NULL)
                <img class="card-img-top" src="/storage/images/{{$listing->image}}" alt="Card image cap">
            @else
                <img class="card-img-top" src="https://mba.reviews/wp-content/uploads/2018/07/University-of-Huddersfield.png" alt="Card image cap">
            @endif
        </div>
        <a href="/listings" class="btn btn-dark">Go Back</a>
        <hr>
        <div class="well">
            <ul class="list-group">
                <li class="list-group-item">
                    {{$listing->short}}
                    <hr>
                    {!!$listing->body!!}
                </li>
            </ul>
            <hr>
            <div>
                {{-- Condition to check if user is logged in or not --}}
                @if (!Auth::guest())
                    {{-- Switch condition to determine ownership controls over a post or admin full access to delete/edit posts --}}
                    @switch(Auth::user()->user_role)
                        @case('Admin')
                            <small>Admin Access Controls</small>
                            <br>
                            <a href="/listings/{{$listing->id}}/edit" class="btn btn-success">Edit</a>
                            {!! Form::open(['action' => ['App\Http\Controllers\ListingsController@destroy', $listing->id], 'method' => 'POST', 'class' => 'btn pull-right'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                            {!! Form::close() !!}
                            @break
                        @case('User')
                            @if (Auth::user()->id == $listing->user->id)
                                <small>User Access Controls</small>
                                <br>
                                <a href="/listings/{{$listing->id}}/edit" class="btn btn-success">Edit</a>
                                {!! Form::open(['action' => ['App\Http\Controllers\ListingsController@destroy', $listing->id], 'method' => 'POST', 'class' => 'btn pull-right'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                {!! Form::close() !!}
                                @break
                            @endif
                            @break
                        @default
                            @break
                    @endswitch
                @endif
            </div>
        </div>
    @else
        <div class="jumbotron text-center">
            <h1>Listing Unavailable.</h1>
        </div>
    @endif
@endsection
