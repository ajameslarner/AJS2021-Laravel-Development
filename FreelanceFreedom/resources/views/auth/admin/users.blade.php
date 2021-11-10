@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>User Management</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vitae congue mauris rhoncus aenean. Non pulvinar neque laoreet suspendisse interdum consectetur libero id faucibus. Aliquet eget sit amet tellus cras. Rhoncus aenean vel elit scelerisque.</p>
    </div>
    @if (count($users) > 0)
        <div class="card-header">
            Manage Accounts
        </div>
        <div class="card">
            @foreach ($users as $user)
                <div class="card-body">
                    <h5 class="card-title">{{$user->name}}</h5>
                    <p class="card-text">{{$user->email}}</p>
                    <a href="/auth/dashboard/users/{{$user->id}}/edit" class="btn btn-success">Edit Permissions</a>
                    {!! Form::open(['action' => ['App\Http\Controllers\UsersController@destroy',$user->id], 'method' => 'POST',  'class' => 'btn pull-right'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                    {!! Form::close() !!}
                </div>
                <div class="card-footer">
                    <small class="text-muted">Permission Level: {{$user->user_role}}</small>
                </div>
            @endforeach
            <div class="pagination-block">
                {{ $users->links('include.paginationlinks') }}
            </div> 
        </div>
    @else
        <div class="card-header">
            You have no users!
        </div>
    @endif
@endsection