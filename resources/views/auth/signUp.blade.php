@extends('layouts.home')

@section('content')
    <form method="POST" action="{{ route('signUpCreate') }}">
        @csrf
        <div>
            <input placeholder="Name" type="text" name="name" value="{{ old('name') }}">
        </div>
        <div>
            <input placeholder="E-mail" type="text" name="email" value="{{ old('email') }}">
        </div>
        <div>
            <input placeholder="Password" type="password" name="password">
        </div>
        <button type="submit">
            Sign Up
        </button>
    </form>
@endsection
