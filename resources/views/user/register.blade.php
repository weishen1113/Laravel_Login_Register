@extends('app')
@section('content')

<div class="row justify-content-center align-items-center">
<div class="col-md-6 login-form-container">
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <form action="{{ route('register.action') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Name <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="name" value="{{ old('name') }}" />
            </div>
            <div class="mb-3">
                <label>Username <span class="text-danger">*</span></label>
                <input class="form-control" type="username" name="username" value="{{ old('username') }}" />
            </div>
            <div class="mb-3">
                <label>Password <span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="password" />
            </div>
            <div class="mb-3">
                <label>Password Confirmation<span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="password_confirm" />
            </div>
            <div class="mb-3 d-flex justify-content-center">
                <button class="btn btn-primary me-2">Register</button>
                
            </div>
        </form>
    </div>
    <div class="mb-3 d-flex justify-content-center">
    <a class="link me-2" href="{{ route('login') }}">Back to Login</a>
    </div>
</div>
@endsection