@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Edit User Account</h1>
        <p>Admin Access Only</p>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>Editing</h1>
                </div>
                <div class="card-body">
                    {!! Form::open(['action' => ['App\Http\Controllers\UsersController@update', $user->id ], 'method' => 'POST']) !!}
                        <div class="form-group">
                            {{Form::label('name', $user->name)}}
                        </div>
                        <div class="form-group">
                            {{Form::label('email', $user->email)}}
                        </div>
                        <div class="form-group">
                              {!! Form::select('user_role',['Admin' => 'Admin','User'=>'User'],$user->user_role,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {{Form::hidden('_method', 'PUT')}}
                            {{Form::submit('Save', ['class' => 'btn btn-primary'])}}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection