@extends('layouts.base')


@section('content')

@if(session('error'))
<p>{{ session('error') }}</p>
    @endif

<form action="{{ route('user.handleLogin') }}" method="POST">
@csrf
<input type="text" name="email"/>
<input type="password" name="password"/>
<button type="submit" class="btn btn-primary">
    {{ __('Login') }}
</button>
</form>

@endsection
