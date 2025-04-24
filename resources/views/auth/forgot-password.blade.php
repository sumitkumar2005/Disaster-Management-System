@extends('layouts.app')

@section('title', 'Forgot Password')

@section('content')
<div class="auth-card">
    <h2 class="text-center mb-4">Forgot Password</h2>
    
    <p class="text-center mb-4">Enter your email address and we'll send you a link to reset your password.</p>
    
    <form method="POST" action="{{ route('password.email') }}">
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

        <div class="d-grid mb-3">
            <button type="submit" class="btn btn-primary">Send Reset Link</button>
        </div>
    </form>

    <div class="mt-4 text-center">
        <p>Remember your password? <a href="{{ route('login') }}" class="text-decoration-none">Login</a></p>
    </div>
</div>
@endsection
