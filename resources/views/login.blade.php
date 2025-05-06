@extends('layouts.app')

@section('content')
    <h2>Login</h2>
    <form method="POST" action="{{ route('handleLogin') }}">
        @csrf
        <label>Username: <input type="text" name="username"></label><br>
        <label>Password: <input type="password" name="password"></label><br>
        <button type="submit">Login</button>
    </form>
@endsection
