@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="max-w-md mx-auto my-10 bg-white p-8 rounded-lg shadow-md">
    <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Register</h2>
    
    <form method="POST" action="{{ url('/register') }}">
        @csrf

        <div class="mb-4">
            <label for="name" class="block text-gray-700 text-sm font-medium mb-2">Name</label>
            <input id="name" type="text" 
                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 @error('name') border-red-500 @enderror" 
                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Email Address</label>
            <input id="email" type="email" 
                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 @error('email') border-red-500 @enderror" 
                name="email" value="{{ old('email') }}" required autocomplete="email">
            @error('email')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="phone" class="block text-gray-700 text-sm font-medium mb-2">Phone Number</label>
            <input id="phone" type="text" 
                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 @error('phone') border-red-500 @enderror" 
                name="phone" value="{{ old('phone') }}" required autocomplete="tel">
            @error('phone')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="location" class="block text-gray-700 text-sm font-medium mb-2">Location</label>
            <input id="location" type="text" 
                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 @error('location') border-red-500 @enderror" 
                name="location" value="{{ old('location') }}" required>
            @error('location')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="password" class="block text-gray-700 text-sm font-medium mb-2">Password</label>
            <input id="password" type="password" 
                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 @error('password') border-red-500 @enderror" 
                name="password" required autocomplete="new-password">
            @error('password')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password-confirm" class="block text-gray-700 text-sm font-medium mb-2">Confirm Password</label>
            <input id="password-confirm" type="password" 
                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" 
                name="password_confirmation" required autocomplete="new-password">
        </div>

        <div class="mb-6">
            <button type="submit" 
                class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors">
                Register
            </button>
        </div>
    </form>

    <div class="text-center text-sm">
        <p class="text-gray-600">
            Already have an account? 
            <a href="{{ route('login') }}" class="text-blue-600 hover:text-blue-800 hover:underline">
                Login
            </a>
        </p>
    </div>
</div>
@endsection