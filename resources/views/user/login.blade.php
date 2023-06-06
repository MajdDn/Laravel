@extends('layouts.base')


@section('content')

@if(session('error'))
<p>{{ session('error') }}</p>
    @endif

<form action="{{ route('user.handleLogin') }}" method="POST">
@csrf

<div class="row mb-3">
    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

    <div class="col-md-6">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="row mb-3">
    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

    <div class="col-md-6">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="row mb-0">
    <div class="col-md-8 offset-md-4">
        <button type="submit" class="btn btn-primary">
            {{ __('Login') }}
        </button>
    </div>
</div>

<div>
    <hr>
    <label for="User" class="col-md-4 col-form-label text-md-end">user name : user@gmail.com</label>
    <hr>
    <label for="Password" class="col-md-4 col-form-label text-md-end">password : 12312312</label>
    <hr>
</div>
{{-- <input type="text" name="email"/>
<input type="password" name="password"/>
<button type="submit" class="btn btn-primary">
    {{ __('Login') }} --}}
</button>
</form>

@endsection
