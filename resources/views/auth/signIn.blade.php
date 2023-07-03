@extends('layouts.home')

@section('content')
    <form method="POST" action="{{ route('signInCreate') }}">
        @csrf
        <div>
            <input placeholder="E-mail" type="text" name="email" value="{{ old('email') }}">
        </div>
        <div>
            <input placeholder="Password" type="password" name="password">
        </div>
        <button type="submit">
            Sign In
        </button>
    </form>
@endsection
