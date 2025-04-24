@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="flex justify-center items-center mb-6">
        <div class="w-full md:w-2/3 lg:w-1/2">
            <!-- Profile Information Card -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="bg-blue-600 px-6 py-4">
                    <h2 class="text-xl font-semibold text-white">My Profile</h2>
                </div>
                <div class="p-6">
                    <form method="POST" action="{{ route('profile.update') }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 text-sm font-medium mb-2">Name</label>
                            <input id="name" type="text" 
                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 @error('name') border-red-500 @enderror" 
                                name="name" value="{{ old('name', $user->name) }}" required autocomplete="name" autofocus>
                            @error('name')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Email Address</label>
                            <input id="email" type="email" 
                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 @error('email') border-red-500 @enderror" 
                                name="email" value="{{ old('email', $user->email) }}" required autocomplete="email">
                            @error('email')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="phone" class="block text-gray-700 text-sm font-medium mb-2">Phone Number</label>
                            <input id="phone" type="text" 
                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 @error('phone') border-red-500 @enderror" 
                                name="phone" value="{{ old('phone', $user->phone) }}" required autocomplete="tel">
                            @error('phone')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="location" class="block text-gray-700 text-sm font-medium mb-2">Location</label>
                            <input id="location" type="text" 
                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 @error('location') border-red-500 @enderror" 
                                name="location" value="{{ old('location', $user->location) }}" required>
                            @error('location')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors">
                                Update Profile
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            
            <!-- Password Change Section -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden mt-6">
                <div class="bg-blue-600 px-6 py-4">
                    <h2 class="text-xl font-semibold text-white">Change Password</h2>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-2">To change your password, please use the 
                        <a href="{{ route('password.request') }}" class="text-blue-600 hover:text-blue-800 hover:underline">password reset</a> functionality.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection