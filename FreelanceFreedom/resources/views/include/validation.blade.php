@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif

{{-- Small Validators --}}

@if (session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
@endif

@if (session('warning'))
    <div class="alert alert-warning">
        {{session('warning')}}
    </div>
@endif

@if (session('info'))
    <div class="alert alert-info">
        {{session('info')}}
    </div>
@endif

{{-- Bigger Validators --}}

@if (session('welldone'))
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">{{session('welldone')}}</h4>
        <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
        <hr>
        <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
    </div>
@endif

@if (session('closewarning'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{session('closewarning')}}</strong> You might want to create another one? <a href="/listings/create" class="stretched-link">Click Here</a>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>        
    </div>
@endif

    
    