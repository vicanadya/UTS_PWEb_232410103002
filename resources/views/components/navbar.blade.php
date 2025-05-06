@php
    $username = request()->query('username');
@endphp

<nav>
    <a href="{{ route('dashboard', ['username' => $username]) }}">Dashboard</a> |
    <a href="{{ route('profile', ['username' => $username]) }}">Profile</a> |
    <a href="{{ route('pengelolaan', ['username' => $username]) }}">Pengelolaan</a>
</nav>
