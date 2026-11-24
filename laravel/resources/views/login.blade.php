@extends('template')

@section('content')
    <h1>Login Page</h1>

    @if ($errors->any())
        <div>
            <p>{{ $errors->first() }}</p>
        </div>
    @endif

    <form method="POST" action="{{ route('login.submit') }}" class="login-form">
        @csrf

        <div>
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
        </div>

        <div>
            <label for="password">Password</label>
            <input id="password" type="password" name="password" required>
        </div>

        <div>
            <button type="submit">Ok</button>
            <a href="{{ route('home') }}">Cancel</a>
        </div>
    </form>
@endsection