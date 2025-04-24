<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Disaster Management System</title>
    <style>
        :root {
            --primary: #1d3557;
            --accent: #e63946;
            --secondary: #457b9d;
            --light: #f1faee;
            --dark: #1d3557;
        }
        .alert-pulse {
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(230, 57, 70, 0.7); }
            70% { box-shadow: 0 0 0 10px rgba(230, 57, 70, 0); }
            100% { box-shadow: 0 0 0 0 rgba(230, 57, 70, 0); }
        }
    </style>
</head>

<body class="flex flex-col min-h-screen bg-gray-50 text-gray-800 transition-colors duration-300">

    <!-- Header -->
    <header class="bg-gray-900 text-white sticky top-0 z-50 shadow-md">
        <div class="bg-red-600 text-white py-1 px-4 text-center font-medium">
            <div class="container mx-auto">
                Current Alert: Severe Floods in Assam - <a href="/alerts" class="underline">Get Updates</a>
            </div>
        </div>
        <nav class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-white focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>

                <!-- Logo and Navigation -->
                <div class="flex items-center">
                    <a href="/" class="text-2xl font-bold flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        DMS
                    </a>
                    <div class="hidden md:flex ml-10 space-x-8">
                        <a href="/" class="hover:text-red-400 transition font-medium">Home</a>
                        <a href="/alerts" class="hover:text-red-400 transition font-medium">Alerts</a>
                        <a href="/resources" class="hover:text-red-400 transition font-medium">Resources</a>
                        <a href="/contact" class="hover:text-red-400 transition font-medium">Shelters&Contacts</a>
                    </div>
                </div>

                <!-- Auth Links -->
                <div class="hidden md:flex items-center space-x-4">
                    @guest
                        <a href="{{ route('login') }}" class="hover:text-red-400 transition">Login</a>
                        <a href="{{ route('register') }}" class="px-4 py-2 bg-blue-600 rounded hover:bg-blue-700 transition">
                            Sign Up
                        </a>
                    @else
                        <div class="relative dropdown">
                            <button id="profileDropdownBtn" class="flex items-center space-x-2 hover:text-red-400 transition focus:outline-none">
                                <span>{{ Auth::user()->name }}</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <div id="profileDropdown" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50 hidden">
                                <a href="{{ route('profile') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Profile</a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="block w-full text-left px-4 py-2 text-gray-800 hover:bg-gray-100">
                                        Logout
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endguest
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden bg-gray-800 text-white px-6 py-4 mt-2 rounded">
                <div class="flex flex-col space-y-4">
                    <a href="/" class="hover:text-red-400">Home</a>
                    <a href="/alerts" class="hover:text-red-400">Alerts</a>
                    <a href="/resources" class="hover:text-red-400">Resources</a>
                    <a href="/contact" class="hover:text-red-400">Shelters&Contacts</a>
                    <div class="border-t border-gray-700 pt-4">
                        @guest
                            <a href="{{ route('login') }}" class="block py-2">Login</a>
                            <a href="{{ route('register') }}" class="block py-2 px-4 bg-blue-600 rounded">Sign Up</a>
                        @else
                            <div class="flex items-center py-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                </svg>
                                <span>{{ Auth::user()->name }}</span>
                            </div>
                            <a href="{{ route('profile') }}" class="block py-2 hover:text-red-400">Profile</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="block w-full text-left py-2 hover:text-red-400">
                                    Logout
                                </button>
                            </form>
                        @endguest
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="flex-grow container mx-auto px-6 py-8">
        <!-- Hero Section -->
        <section class="mb-16 bg-white p-8 rounded-lg shadow-md">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 text-center md:text-left">
                    <h1 class="text-4xl md:text-5xl font-bold mb-4 text-gray-900">Disaster Management System</h1>
                    <p class="text-xl mb-8 text-gray-600">Providing critical support and resources during emergencies</p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="/alerts" class="inline-block">
                            <button class="bg-red-600 text-white px-8 py-3 rounded-lg hover:bg-red-700 transition alert-pulse w-full sm:w-auto">
                                Emergency Alerts
                            </button>
                        </a>
                        <a href="/resources" class="inline-block">
                            <button class="bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 transition w-full sm:w-auto">
                                Find Resources
                            </button>
                        </a>
                    </div>
                </div>
                <div class="md:w-1/2 mt-8 md:mt-0">
                    <img src="/api/placeholder/600/400" alt="Disaster Management" class="rounded-lg shadow" />
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="grid md:grid-cols-3 gap-8 mb-16">
            <div class="p-6 bg-white rounded-lg shadow hover:shadow-lg transition border-t-4 border-red-600">
                <a href="/alerts" class="block">
                    <div class="flex items-center mb-4">
                        <div class="bg-red-100 p-3 rounded-full mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold">Real-time Alerts</h3>
                    </div>
                </a>
                <p class="text-gray-600">Get instant notifications about emergencies in your area with live updates.</p>
            </div>
            <div class="p-6 bg-white rounded-lg shadow hover:shadow-lg transition border-t-4 border-blue-600">
                <a href="/resources" class="block">
                    <div class="flex items-center mb-4">
                        <div class="bg-blue-100 p-3 rounded-full mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold">Resource Directory</h3>
                    </div>
                </a>
                <p class="text-gray-600">Access essential services, supplies, and emergency contacts during disasters.</p>
            </div>
            <div class="p-6 bg-white rounded-lg shadow hover:shadow-lg transition border-t-4 border-green-600">
                <a href="/resources" class="block">
                    <div class="flex items-center mb-4">
                        <div class="bg-green-100 p-3 rounded-full mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold">Safety Guidelines</h3>
                    </div>
                </a>
                <p class="text-gray-600">Step-by-step instructions for different disaster scenarios to keep you safe.</p>
            </div>
        </section>

        <!-- Status Dashboard -->
        <section class="mb-16">
            <h2 class="text-2xl font-bold mb-6">Current Situation Status</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div class="bg-red-100 border-l-4 border-red-600 p-4 rounded">
                    <h3 class="font-semibold text-red-800">High Alert</h3>
                    <p class="text-red-700">Floods - Assam</p>
                </div>
                <div class="bg-amber-100 border-l-4 border-amber-600 p-4 rounded">
                    <h3 class="font-semibold text-amber-800">Warning</h3>
                    <p class="text-amber-700">Cyclone - East Coast</p>
                </div>
                <div class="bg-amber-100 border-l-4 border-amber-600 p-4 rounded">
                    <h3 class="font-semibold text-amber-800">Warning</h3>
                    <p class="text-amber-700">Heatwave - North India</p>
                </div>
                <div class="bg-green-100 border-l-4 border-green-600 p-4 rounded">
                    <h3 class="font-semibold text-green-800">Clear</h3>
                    <p class="text-green-700">South India</p>
                </div>
            </div>
        </section>

        <!-- Latest Disaster News Section -->
        <section class="mb-16">
            <h2 class="text-2xl font-bold mb-6">Latest News & Updates</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Article 1 -->
                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition overflow-hidden">
                    <div class="h-48 bg-gray-200 mb-4 rounded overflow-hidden">
                        <img src="/api/placeholder/400/300" alt="Flood in Assam" class="w-full h-full object-cover" />
                    </div>
                    <div class="bg-red-100 text-red-800 text-xs font-medium px-2 py-1 rounded mb-3 inline-block">Breaking</div>
                    <h3 class="text-xl font-semibold mb-2">Severe Floods Hit Assam</h3>
                    <p class="text-gray-600 mb-3">Rising water levels have displaced thousands across several districts.
                        Relief operations are ongoing.</p>
                    <a href="https://www.indiatoday.in/india/story/assam-floods-rains-weather-update-death-toll-himanta-biswa-sarma-amit-shah-ndrf-sdrf-rescue-ops-2563335-2024-07-06?utm_source=global-search&utm_medium=global-search&utm_campaign=global-search"
                        target="_blank" class="text-red-600 font-medium hover:underline flex items-center">
                        Read More
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
                <!-- Article 2 -->
                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition overflow-hidden">
                    <div class="h-48 bg-gray-200 mb-4 rounded overflow-hidden">
                        <img src="/api/placeholder/400/300" alt="Cyclone Remal" class="w-full h-full object-cover" />
                    </div>
                    <div class="bg-amber-100 text-amber-800 text-xs font-medium px-2 py-1 rounded mb-3 inline-block">Alert</div>
                    <h3 class="text-xl font-semibold mb-2">Cyclone Remal Approaches Eastern Coast</h3>
                    <p class="text-gray-600 mb-3">Authorities issue red alerts in coastal regions of Odisha and West
                        Bengal as cyclone strengthens.</p>
                    <a href="https://www.indiatoday.in/india/story/cyclone-remal-victims-ex-gratia-financial-compensation-pm-narendra-modi-northeast-west-bengal-2546606-2024-06-01?utm_source=global-search&utm_medium=global-search&utm_campaign=global-search"
                        target="_blank" class="text-red-600 font-medium hover:underline flex items-center">
                        Read More
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
                <!-- Article 3 -->
                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition overflow-hidden">
                    <div class="h-48 bg-gray-200 mb-4 rounded overflow-hidden">
                        <img src="/api/placeholder/400/300" alt="Heatwave" class="w-full h-full object-cover" />
                    </div>
                    <div class="bg-amber-100 text-amber-800 text-xs font-medium px-2 py-1 rounded mb-3 inline-block">Warning</div>
                    <h3 class="text-xl font-semibold mb-2">Heatwave Sweeps Across Northern India</h3>
                    <p class="text-gray-600 mb-3">Temperatures reach 45°C in many states; health advisories released to
                        prevent heatstroke.</p>
                    <a href="https://www.indiatoday.in/health/health-360/video/beating-the-heat-tackling-common-health-issues-in-summer-2704501-2025-04-05?utm_source=global-search&utm_medium=global-search&utm_campaign=global-search"
                        target="_blank" class="text-red-600 font-medium hover:underline flex items-center">
                        Read More
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>
        </section>

        <!-- Emergency Preparation -->
        <section class="bg-blue-50 p-8 rounded-lg mb-16">
            <h2 class="text-2xl font-bold mb-6">Emergency Preparation</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-xl font-semibold mb-4">Essential Supplies Checklist</h3>
                    <ul class="space-y-2">
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Water (at least 3-day supply)
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Non-perishable food (3-day supply)
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            First aid kit and medications
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Flashlight and batteries
                        </li>
                    </ul>
                    <a href="/resources" class="inline-block mt-4 text-blue-600 hover:underline">View complete checklist</a>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-4">Family Emergency Plan</h3>
                    <p class="mb-4">Create a plan with your family for different emergency scenarios. Include meeting points, contact information, and evacuation routes.</p>
                    <a href="/resources" class="inline-block px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                        Create Your Plan
                    </a>
                </div>
            </div>
        </section>
    </main>

    <!-- Emergency Hotline Banner -->
    <div class="bg-red-600 py-4 text-white">
        <div class="container mx-auto px-6 flex flex-col md:flex-row justify-between items-center">
            <div class="flex items-center mb-4 md:mb-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
                <div>
                    <p class="font-bold text-lg">National Emergency Hotline</p>
                    <p class="text-2xl font-bold">112</p>
                </div>
            </div>
            <a href="/contact" class="px-6 py-2 bg-white text-red-600 rounded font-semibold hover:bg-gray-100 transition">
                View All Emergency Contacts
            </a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white">
        <div class="container mx-auto px-6 py-10">
            <div class="grid md:grid-cols-4 gap-10">
                <!-- About Section -->
                <div>
                    <h4 class="text-xl font-bold mb-4">About DMS</h4>
                    <p class="text-gray-300">A comprehensive platform for disaster preparedness, response, and recovery.
                    </p>
                    <div class="mt-4 flex space-x-3">
                        <a href="#" class="text-gray-300 hover:text-white">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-xl font-bold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="/resources" class="text-gray-300 hover:text-white transition">Emergency Procedures</a></li>
                        <li><a href="/contact" class="text-gray-300 hover:text-white transition">Evacuation Routes</a></li>
                        <li><a href="/contact" class="text-gray-300 hover:text-white transition">Shelter Locations</a></li>
                        <li><a href="/resources" class="text-gray-300 hover:text-white transition">Preparation Guides</a></li>
                    </ul>
                </div>

                <!-- Resources -->
                <div>
                    <h4 class="text-xl font-bold mb-4">Resources</h4>
                    <ul class="space-y-2">
                        <li><a href="/resources" class="text-gray-300 hover:text-white transition">Disaster Plans</a></li>
                        <li><a href="/resources" class="text-gray-300 hover:text-white transition">Recovery Information</a></li>
                        <li><a href="/resources" class="text-gray-300 hover:text-white transition">Support Services</a></li>
                        <li><a href="/resources" class="text-gray-300 hover:text-white transition">Volunteer Opportunities</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h4 class="text-xl font-bold mb-4">Contact</h4>
                    <ul class="text-gray-300 space-y-2">
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            Emergency: 112
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            info@dms.info
                        </li>
                        <li class="mt-4">
                            <a href="/contact" class="text-white bg-red-600 px-4 py-2 rounded inline-block hover:bg-red-700 transition">
                                View All Contacts
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-10 pt-6 text-center text-gray-400">
                <p>&copy; 2025 Disaster Management System. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
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
            
            // Hide profile dropdown when clicking outside
            const profileDropdown = document.getElementById('profileDropdown');
            const profileDropdownBtn = document.getElementById('profileDropdownBtn');
            
            if (profileDropdown && profileDropdownBtn && 
                !profileDropdown.contains(event.target) && 
                !profileDropdownBtn.contains(event.target)) {
                profileDropdown.classList.add('hidden');
            }
        });
        
        // Profile Dropdown Toggle
        const profileDropdownBtn = document.getElementById('profileDropdownBtn');
        const profileDropdown = document.getElementById('profileDropdown');
        
        if (profileDropdownBtn && profileDropdown) {
            profileDropdownBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                profileDropdown.classList.toggle('hidden');
            });
        }

        // Add emergency notification system
        document.addEventListener('DOMContentLoaded', function() {
            // This would be replaced with real data in a production environment
            const emergencyNotifications = [
                {
                    title: "Flood Warning",
                    message: "Water levels rising in Brahmaputra river. Residents in Dibrugarh district advised to evacuate.",
                    type: "critical"
                }
            ];

            // Function to display notifications
            function showNotifications() {
                if (emergencyNotifications.length > 0) {
                    const notification = emergencyNotifications[0];
                    const notificationElement = document.createElement('div');
                    notificationElement.classList.add('fixed', 'bottom-4', 'right-4', 'max-w-sm', 'bg-red-600', 'text-white', 'p-4', 'rounded-lg', 'shadow-lg', 'z-50', 'flex', 'items-center');
                    
                    notificationElement.innerHTML = `
                        <div class="mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold">${notification.title}</h4>
                            <p>${notification.message}</p>
                        </div>
                        <button class="ml-auto text-white hover:text-gray-200" id="close-notification">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    `;
                    
                    document.body.appendChild(notificationElement);
                    
                    document.getElementById('close-notification').addEventListener('click', function() {
                        notificationElement.remove();
                    });
                    
                    // Auto close after 10 seconds
                    setTimeout(() => {
                        notificationElement.remove();
                    }, 10000);
                }
            }
            
            // Show notifications after a delay
            setTimeout(showNotifications, 3000);
        });
    </script>
</body>

</html>