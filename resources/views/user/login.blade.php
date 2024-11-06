@extends('app')
@section('content')

<div class="row justify-content-center align-items-center">
<div class="col-md-6 login-form-container">
        @if(session('success'))
            <p class="alert alert-success">{{ session('success') }}</p>
        @endif
        @if($errors->any())
            @foreach($errors->all() as $err)
                <p class="alert alert-danger">{{ $err }}</p>
            @endforeach
        @endif
        <form action="{{ route('login.action') }}" method="POST" class="custom-form">
            @csrf
            <div class="mb-3">
                <label>Username <span class="text-danger">*</span></label>
                <input class="form-control" type="username" name="username" value="{{ old('username') }}" />
            </div>
            <div class="mb-3">
                <label>Password <span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="password" />
            </div>
            <div class="mb-3 d-flex justify-content-center">
                <button class="btn btn-primary me-2">Login</button>
                
            </div>
        </form>
    </div>
    <div class="mb-3 d-flex justify-content-center">
    <a class="link" href="{{ route('register') }}">Register</a>
    </div>
    </div>
</div>
@endsection
