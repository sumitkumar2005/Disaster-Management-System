@extends('layouts.app')

@section('title', 'Forgot Password')

@section('content')
<div class="max-w-md mx-auto my-10 bg-white p-8 rounded-lg shadow-md">
    <h2 class="text-2xl font-bold text-center text-gray-800 mb-4">Forgot Password</h2>
    
    <p class="text-center text-gray-600 mb-6">Enter your email address and we'll send you a link to reset your password.</p>
    
    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="mb-6">
            <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Email Address</label>
            <input id="email" type="email" 
                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 @error('email') border-red-500 @enderror" 
                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button type="submit" 
                class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors">
                Send Reset Link
            </button>
        </div>
    </form>

    <div class="text-center text-sm">
        <p class="text-gray-600">
            Remember your password? 
            <a href="{{ route('login') }}" class="text-blue-600 hover:text-blue-800 hover:underline">
                Login
            </a>
        </p>
    </div>
</div>
@endsection