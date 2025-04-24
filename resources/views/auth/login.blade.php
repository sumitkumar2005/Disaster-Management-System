@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="max-w-md mx-auto my-10 bg-white p-8 rounded-lg shadow-md">
    <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Login</h2>
    
    <form method="POST" action="{{ url('/login') }}">
        @csrf

        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Email Address</label>
            <input id="email" type="email" 
                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 @error('email') border-red-500 @enderror" 
                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="password" class="block text-gray-700 text-sm font-medium mb-2">Password</label>
            <input id="password" type="password" 
                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 @error('password') border-red-500 @enderror" 
                name="password" required autocomplete="current-password">
            @error('password')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center mb-4">
            <input type="checkbox" id="remember" name="remember" 
                class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" 
                {{ old('remember') ? 'checked' : '' }}>
            <label class="ml-2 block text-sm text-gray-700" for="remember">
                Remember Me
            </label>
        </div>

        <div class="mb-6">
            <button type="submit" 
                class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors">
                Login
            </button>
        </div>

        <div class="text-center text-sm">
            <a href="{{ route('password.request') }}" class="text-blue-600 hover:text-blue-800 hover:underline">
                Forgot Your Password?
            </a>
        </div>
    </form>

    <div class="mt-6 text-center text-sm">
        <p class="text-gray-600">
            Don't have an account? 
            <a href="{{ route('register') }}" class="text-blue-600 hover:text-blue-800 hover:underline">
                Register
            </a>
        </p>
    </div>
</div>
@endsection