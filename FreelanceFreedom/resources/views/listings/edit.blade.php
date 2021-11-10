@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Edit Listing</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vitae congue mauris rhoncus aenean. Non pulvinar neque laoreet suspendisse interdum consectetur libero id faucibus. Aliquet eget sit amet tellus cras. Rhoncus aenean vel elit scelerisque.</p>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>Editing</h1>
                </div>
                <div class="card-body">
                    {!! Form::open(['action' => ['App\Http\Controllers\ListingsController@update', $listing->id ], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                        <div class="form-group">
                            {{Form::text('title', $listing->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
                        </div>
                        <div class="form-group">
                            {{Form::text('short', $listing->short, ['class' => 'form-control', 'placeholder' => 'Short Description'])}}
                        </div>
                        <div class="form-group">
                            {{Form::textarea('body', $listing->body, ['id' => 'editor', 'class' => 'form-control', 'placeholder' => 'Listing Information'])}}
                        </div>
                        <div class="form-group">
                            {{Form::file('image')}}
                        </div>
                        <div class="form-group">
                            {{Form::hidden('_method', 'PUT')}}
                            {{Form::submit('Save', ['class' => 'btn btn-primary'])}}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        @include('include.ckeditor')
    </div>
@endsection