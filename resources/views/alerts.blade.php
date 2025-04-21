<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Disaster Alerts - DMS</title>
    <style>
        @keyframes pulse {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.7;
            }
        }

        .animate-pulse {
            animation: pulse 2s infinite;
        }
    </style>
</head>

<body class="flex flex-col min-h-screen bg-[#fdfaf6] text-[#333] transition-colors duration-300">

    <!-- Header -->
    <header class="bg-[#2e2a4f] text-white sticky top-0 z-50 shadow-md">
        <nav class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-white focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>

                <!-- Logo and Navigation -->
                <div class="flex items-center">
                    <a href="/" class="text-2xl font-bold">DMS</a>
                    <div class="hidden md:flex ml-10 space-x-8">
                        <a href="/" class="hover:text-[#ff6584] transition">Home</a>
                        <a href="/alerts" class="hover:text-[#ff6584] transition">Alerts</a>
                        <a href="/resources" class="hover:text-[#ff6584] transition">Resources</a>
                        <a href="/contact" class="hover:text-[#ff6584] transition">Shelters&Contact</a>
                    </div>
                </div>

                <!-- Auth Links -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="#" class="hover:text-[#ff6584] transition">Login</a>
                    <a href="#" class="px-4 py-2 bg-[#6c63ff] rounded hover:bg-[#5b56e0] transition">
                        Sign Up
                    </a>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden bg-[#2e2a4f] text-white px-6 py-4">
                <div class="flex flex-col space-y-4">
                    <a href="/" class="hover:text-[#ff6584]">Home</a>
                    <a href="/alerts" class="hover:text-[#ff6584]">Alerts</a>
                    <a href="/resources" class="hover:text-[#ff6584]">Resources</a>
                    <a href="/contact" class="hover:text-[#ff6584]">Shelters&Contact</a>
                    <div class="border-t pt-4">
                        <a href="#" class="block py-2">Login</a>
                        <a href="#" class="block py-2 px-4 bg-[#6c63ff] rounded">Sign Up</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <!-- Alerts Section -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Header Section -->
        <section class="mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Live Disaster Alerts and Weather Info</h1>
            <p class="text-gray-600 mt-2">Stay informed with the latest emergency alerts and critical information.</p>
        </section>
    
        <!-- City Search Form -->
        <section class="mb-8">
            <form method="GET" action="/alerts" class="mb-6">
                <div class="flex flex-col sm:flex-row gap-4">
                    @csrf
                    <input type="text" name="city" placeholder="Enter your city name" value="{{ $city ?? '' }}"
                        class="flex-grow px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <button type="submit"
                        class="px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition-colors shadow-sm">
                        Get Current weather info
                    </button>
                </div>
            </form>
    
            @if(session('error'))
                <div class="p-4 bg-red-50 border-l-4 border-red-500 text-red-700 rounded">
                    <p>{{ session('error') }}</p>
                </div>
            @endif
        </section>
    
        <!-- Weather Section -->
        @if(isset($weather))
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-4 text-gray-800">Weather Information</h2>
            <div class="grid gap-6 md:grid-cols-1 lg:grid-cols-2">
                <div class="p-6 bg-white border border-gray-200 rounded-xl shadow-md hover:shadow-lg transition-shadow">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xl font-semibold text-gray-800">Current Weather in {{ $weather['name'] }}</h3>
                        <span class="text-2xl">
                            @if(str_contains($weather['weather'][0]['description'], 'rain'))
                                🌧️
                            @elseif(str_contains($weather['weather'][0]['description'], 'cloud'))
                                ☁️
                            @else
                                ☀️
                            @endif
                        </span>
                    </div>
                    <div class="space-y-3">
                        <div class="flex items-center">
                           
                            <span class="text-gray-700">{{ round($weather['main']['temp']) }}°C (Feels like {{ round($weather['main']['feels_like']) }}°C)</span>
                        </div>
                        <div class="flex items-center">
                           
                            <span class="text-gray-700">Humidity: {{ $weather['main']['humidity'] }}%</span>
                        </div>
                        <div class="flex items-center">
                            
                            <span class="text-gray-700">Wind: {{ $weather['wind']['speed'] }} m/s</span>
                        </div>
                        <div class="flex items-center">
                           
                            <span class="text-gray-700">Pressure: {{ $weather['main']['pressure'] }} hPa</span>
                        </div>
                        <div class="pt-3 mt-3 border-t border-gray-100 text-sm text-gray-500">
                            Updated: {{ \Carbon\Carbon::now()->diffForHumans() }}
                        </div>
                    </div>
                </div>
    
                <!-- Weather Forecast Card (if available) -->
                @if(isset($weather['forecast']))
                <div class="p-6 bg-white border border-gray-200 rounded-xl shadow-md hover:shadow-lg transition-shadow">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Weather Forecast</h3>
                    <!-- Forecast content would go here -->
                </div>
                @endif
            </div>
        </section>
        @endif
    
        <!-- Earthquake Section -->
        <section class="mb-12">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-2xl font-bold text-gray-800">Recent Earthquakes in Asia</h2>
                <span class="text-sm text-gray-500">Updated: {{ \Carbon\Carbon::now()->format('M d, Y H:i') }}</span>
            </div>
    
            @if(count($earthquakes) > 0)
            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                @foreach($earthquakes as $quake)
                <div class="p-6 bg-white border border-red-100 rounded-xl shadow-md hover:shadow-lg transition-shadow bg-gradient-to-br from-red-50 to-white earthquake-alert">
                    <div class="flex items-start">
                       
                        <div>
                            <h3 class="text-xl font-semibold text-red-600 mb-1">Earthquake Alert</h3>
                            <p class="text-lg font-bold text-red-800 mb-2">
                                Magnitude {{ $quake['properties']['mag'] }} 
                                <span class="text-sm font-normal text-gray-600">
                                    (Depth: {{ $quake['geometry']['coordinates'][2] }} km)
                                </span>
                            </p>
                            <p class="text-gray-700 mb-3">{{ $quake['properties']['place'] }}</p>
                            <div class="flex items-center text-sm text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                {{ \Carbon\Carbon::createFromTimestamp($quake['properties']['time'] / 1000)->diffForHumans() }}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @else
            <div class="p-6 bg-green-50 border border-green-200 rounded-lg text-center">
                <p class="text-green-700">No significant earthquake activity detected in Asia recently.</p>
            </div>
            @endif
        </section>
    
        <!-- Official Resources Section -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 text-gray-800">Official Disaster Control Agencies and Organizations</h2>
            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                <a href="https://ndma.gov.in" target="_blank" class="group p-5 bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                    <div class="flex flex-col h-full">
                        <div class="flex items-center mb-3">
                            <div class="p-2 bg-blue-100 rounded-lg mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                            </div>
                            <h4 class="font-medium text-gray-800 group-hover:text-blue-600">NDMA</h4>
                        </div>
                        <p class="text-sm text-gray-600 flex-grow">National Disaster Management Authority</p>
                        <div class="mt-3 text-sm text-blue-600 flex items-center">
                            Visit site
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                        </div>
                    </div>
                </a>
    
                <a href="https://mausam.imd.gov.in" target="_blank" class="group p-5 bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                    <div class="flex flex-col h-full">
                        <div class="flex items-center mb-3">
                            <div class="p-2 bg-blue-100 rounded-lg mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                                </svg>
                            </div>
                            <h4 class="font-medium text-gray-800 group-hover:text-blue-600">IMD</h4>
                        </div>
                        <p class="text-sm text-gray-600 flex-grow">India Meteorological Department</p>
                        <div class="mt-3 text-sm text-blue-600 flex items-center">
                            Visit site
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                        </div>
                    </div>
                </a>
    
                <a href="https://www.redcross.org" target="_blank" class="group p-5 bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                    <div class="flex flex-col h-full">
                        <div class="flex items-center mb-3">
                            <div class="p-2 bg-blue-100 rounded-lg mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <h4 class="font-medium text-gray-800 group-hover:text-blue-600">Red Cross</h4>
                        </div>
                        <p class="text-sm text-gray-600 flex-grow">Indian Red Cross Society</p>
                        <div class="mt-3 text-sm text-blue-600 flex items-center">
                            Visit site
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                        </div>
                    </div>
                </a>
    
                <a href="https://www.ndrf.gov.in" target="_blank" class="group p-5 bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                    <div class="flex flex-col h-full">
                        <div class="flex items-center mb-3">
                            <div class="p-2 bg-blue-100 rounded-lg mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <h4 class="font-medium text-gray-800 group-hover:text-blue-600">NDRF</h4>
                        </div>
                        <p class="text-sm text-gray-600 flex-grow">National Disaster Response Force</p>
                        <div class="mt-3 text-sm text-blue-600 flex items-center">
                            Visit site
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                        </div>
                    </div>
                </a>
            </div>
        </section>
    </main>
    
    <!-- Footer -->
    <footer class="bg-[#2e2a4f] text-white mt-20">
        <div class="container mx-auto px-6 py-10">
            <div class="grid md:grid-cols-3 gap-10">
                <div>
                    <h4 class="text-xl font-bold mb-4">About DMS</h4>
                    <p class="text-gray-300">A comprehensive platform for disaster preparedness, response, and recovery.
                    </p>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="/resources" class="text-gray-300 hover:text-white transition">Emergency Procedures</a></li>
                        <li><a href="/contact" class="text-gray-300 hover:text-white transition">Evacuation Routes</a></li>
                        <li><a href="/contact" class="text-gray-300 hover:text-white transition">Shelter Locations</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-4">Contact</h4>
                    <div>
                        <h4 class="text-xl font-bold mb-4">Contact</h4>
                        <ul class="text-gray-300 space-y-2">
                            <a href="/contact">Click here</a>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-600 mt-10 pt-4 text-center text-gray-400">
                <p>&copy; 2023 Disaster Management System. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile Menu Toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', (e) => {
            e.stopPropagation();
            mobileMenu.classList.toggle('hidden');
        });

        document.addEventListener('click', (event) => {
            if (!mobileMenu.contains(event.target) && !mobileMenuButton.contains(event.target)) {
                mobileMenu.classList.add('hidden');
            }
        });



    </script>
</body>

</html>