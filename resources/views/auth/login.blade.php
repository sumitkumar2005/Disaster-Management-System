@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="auth-card">
    <h2 class="text-center mb-4">Login</h2>
    
    <form method="POST" action="{{ url('/login') }}">
        @csrf

        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">Remember Me</label>
        </div>

        <div class="d-grid mb-3">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>

        <div class="text-center">
            <a href="{{ route('password.request') }}" class="text-decoration-none">Forgot Your Password?</a>
        </div>
    </form>

    <div class="mt-4 text-center">
        <p>Don't have an account? <a href="{{ route('register') }}" class="text-decoration-none">Register</a></p>
    </div>
</div>
@endsection
