<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Resources - DMS</title>
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
                                d="M4 6h16M4 12h16M4 18h16" />
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
                        <a href="/contact" class="hover:text-[#ff6584] transition">Shelters&Contacts</a>
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
                    <a href="/contact" class="hover:text-[#ff6584]">Contact</a>
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
    <main>
        <!-- Hero Section -->
        <section class="text-center py-12 bg-blue-50">
            <div class="max-w-4xl mx-auto px-4">
                <h1 class="text-4xl font-bold text-gray-800">Resources & Preparedness</h1>
                <p class="mt-4 text-gray-600 text-lg">Essential knowledge to protect yourself and your loved ones during emergencies</p>
            </div>
        </section>
    
        <!-- Disaster Guides -->
        <section class="max-w-6xl mx-auto px-4 py-10">
            <!-- Earthquakes -->
            <div class="mb-16 p-6 bg-white rounded-xl shadow-md">
                <h2 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">🌍 Earthquakes</h2>
                <div class="grid md:grid-cols-3 gap-6">
                    <div>
                        <h3 class="font-semibold text-gray-700 mb-2">Warning Signs</h3>
                        <ul class="list-disc pl-5 space-y-1 text-gray-600">
                            <li>Unusual animal behavior</li>
                            <li>Rumbling sounds from ground</li>
                            <li>Official seismic alerts</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-700 mb-2">Before</h3>
                        <ul class="list-disc pl-5 space-y-1 text-gray-600">
                            <li>Secure heavy furniture to walls</li>
                            <li>Prepare emergency kit (3 days supply)</li>
                            <li>Identify safe spots in each room</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-700 mb-2">During</h3>
                        <ul class="list-disc pl-5 space-y-1 text-gray-600">
                            <li><strong>Drop, Cover, Hold On</strong> under sturdy furniture</li>
                            <li>Stay indoors until shaking stops</li>
                            <li>Stay away from windows</li>
                        </ul>
                    </div>
                </div>
                <div class="mt-6 p-4 bg-blue-50 rounded-lg">
                    <h4 class="font-medium text-blue-800 mb-2">After:</h4>
                    <p class="text-gray-700">Check for injuries and damage. Be prepared for aftershocks. Listen to official updates before re-entering buildings.</p>
                </div>
            </div>
    
            <!-- Floods -->
            <div class="mb-16 p-6 bg-white rounded-xl shadow-md">
                <h2 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">🌊 Floods</h2>
                <div class="grid md:grid-cols-3 gap-6">
                    <div>
                        <h3 class="font-semibold text-gray-700 mb-2">Warning Signs</h3>
                        <ul class="list-disc pl-5 space-y-1 text-gray-600">
                            <li>Heavy prolonged rainfall</li>
                            <li>Rising water levels</li>
                            <li>Flash flood warnings</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-700 mb-2">Before</h3>
                        <ul class="list-disc pl-5 space-y-1 text-gray-600">
                            <li>Know your evacuation routes</li>
                            <li>Elevate electrical appliances</li>
                            <li>Install check valves in plumbing</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-700 mb-2">During</h3>
                        <ul class="list-disc pl-5 space-y-1 text-gray-600">
                            <li>Move to higher ground immediately</li>
                            <li>Never walk or drive through floodwaters</li>
                            <li>Turn off electricity at main switch</li>
                        </ul>
                    </div>
                </div>
                <div class="mt-6 p-4 bg-blue-50 rounded-lg">
                    <h4 class="font-medium text-blue-800 mb-2">After:</h4>
                    <p class="text-gray-700">Avoid floodwaters - may be contaminated. Disinfect everything that got wet. Photograph damage for insurance claims.</p>
                </div>
            </div>
    
            <!-- Cyclones/Hurricanes -->
            <div class="mb-16 p-6 bg-white rounded-xl shadow-md">
                <h2 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">🌀 Cyclones</h2>
                <div class="grid md:grid-cols-3 gap-6">
                    <div>
                        <h3 class="font-semibold text-gray-700 mb-2">Warning Signs</h3>
                        <ul class="list-disc pl-5 space-y-1 text-gray-600">
                            <li>Weather service warnings</li>
                            <li>Sudden drop in barometric pressure</li>
                            <li>Unusually high tides</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-700 mb-2">Before</h3>
                        <ul class="list-disc pl-5 space-y-1 text-gray-600">
                            <li>Reinforce windows and doors</li>
                            <li>Prepare emergency power sources</li>
                            <li>Trim trees near your home</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-700 mb-2">During</h3>
                        <ul class="list-disc pl-5 space-y-1 text-gray-600">
                            <li>Stay indoors in a windowless room</li>
                            <li>Use mattresses for protection</li>
                            <li>Beware the eye of the storm - winds will return</li>
                        </ul>
                    </div>
                </div>
                <div class="mt-6 p-4 bg-blue-50 rounded-lg">
                    <h4 class="font-medium text-blue-800 mb-2">After:</h4>
                    <p class="text-gray-700">Watch for downed power lines. Boil water until declared safe. Avoid using candles (fire risk).</p>
                </div>
            </div>
    
            <!-- Wildfires -->
            <div class="mb-16 p-6 bg-white rounded-xl shadow-md">
                <h2 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">🔥 Wildfires</h2>
                <div class="grid md:grid-cols-3 gap-6">
                    <div>
                        <h3 class="font-semibold text-gray-700 mb-2">Warning Signs</h3>
                        <ul class="list-disc pl-5 space-y-1 text-gray-600">
                            <li>Smoke or unusual haze</li>
                            <li>Official fire alerts</li>
                            <li>Extreme dry conditions</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-700 mb-2">Before</h3>
                        <ul class="list-disc pl-5 space-y-1 text-gray-600">
                            <li>Create 30ft defensible space around home</li>
                            <li>Install ember-resistant vents</li>
                            <li>Prepare evacuation bags (N95 masks, goggles)</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-700 mb-2">During</h3>
                        <ul class="list-disc pl-5 space-y-1 text-gray-600">
                            <li>Evacuate immediately when ordered</li>
                            <li>Wet down your property if time allows</li>
                            <li>Close all windows and vents</li>
                        </ul>
                    </div>
                </div>
                <div class="mt-6 p-4 bg-blue-50 rounded-lg">
                    <h4 class="font-medium text-blue-800 mb-2">After:</h4>
                    <p class="text-gray-700">Wait for official clearance before returning. Watch for hot spots and smoldering debris. Document damage thoroughly.</p>
                </div>
            </div>
    
            <!-- Additional Disaster Types (Collapsible) -->
            <div x-data="{ open: false }" class="mb-10">
                <button @click="open = !open" class="w-full text-left p-4 bg-gray-100 rounded-lg font-medium">
                    Show More Disaster Types (Landslides, Heatwaves, Pandemics, Industrial Accidents)
                    <span x-text="open ? '▲' : '▼'" class="float-right"></span>
                </button>
                
                <div x-show="open" x-collapse class="space-y-8 mt-4">
                    <!-- Landslides -->
                    <div class="p-6 bg-white rounded-xl shadow-md">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">⛰️ Landslides</h3>
                        <div class="grid md:grid-cols-3 gap-4">
                            <div>
                                <h4 class="font-semibold">Warning Signs</h4>
                                <ul class="list-disc pl-5 text-sm text-gray-600">
                                    <li>New cracks in ground or pavement</li>
                                    <li>Unusual water flow patterns</li>
                                    <li>Tilting trees or utility poles</li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="font-semibold">Preparedness</h4>
                                <ul class="list-disc pl-5 text-sm text-gray-600">
                                    <li>Plant ground cover on slopes</li>
                                    <li>Install flexible pipe fittings</li>
                                    <li>Know evacuation routes</li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="font-semibold">Response</h4>
                                <ul class="list-disc pl-5 text-sm text-gray-600">
                                    <li>Move to higher ground immediately</li>
                                    <li>Listen for unusual sounds</li>
                                    <li>Avoid river valleys</li>
                                </ul>
                            </div>
                        </div>
                    </div>
    
                    <!-- Heatwaves -->
                    <div class="p-6 bg-white rounded-xl shadow-md">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">☀️ Heatwaves</h3>
                        <div class="grid md:grid-cols-3 gap-4">
                            <div>
                                <h4 class="font-semibold">Warning Signs</h4>
                                <ul class="list-disc pl-5 text-sm text-gray-600">
                                    <li>Excessive heat warnings</li>
                                    <li>High humidity with high temps</li>
                                    <li>Overnight temps not dropping</li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="font-semibold">Preparedness</h4>
                                <ul class="list-disc pl-5 text-sm text-gray-600">
                                    <li>Install window reflectors</li>
                                    <li>Identify cooling centers</li>
                                    <li>Stock electrolyte solutions</li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="font-semibold">Response</h4>
                                <ul class="list-disc pl-5 text-sm text-gray-600">
                                    <li>Stay hydrated</li>
                                    <li>Limit outdoor activity</li>
                                    <li>Check on vulnerable neighbors</li>
                                </ul>
                            </div>
                        </div>
                    </div>
    
                    <!-- Pandemics -->
                    <div class="p-6 bg-white rounded-xl shadow-md">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">🦠 Pandemics</h3>
                        <div class="grid md:grid-cols-3 gap-4">
                            <div>
                                <h4 class="font-semibold">Warning Signs</h4>
                                <ul class="list-disc pl-5 text-sm text-gray-600">
                                    <li>Public health announcements</li>
                                    <li>Unusual disease clusters</li>
                                    <li>Travel advisories</li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="font-semibold">Preparedness</h4>
                                <ul class="list-disc pl-5 text-sm text-gray-600">
                                    <li>Maintain 3-month medication supply</li>
                                    <li>Stock N95 masks and sanitizer</li>
                                    <li>Plan for remote work/school</li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="font-semibold">Response</h4>
                                <ul class="list-disc pl-5 text-sm text-gray-600">
                                    <li>Practice social distancing</li>
                                    <li>Follow vaccination guidelines</li>
                                    <li>Disinfect high-touch surfaces</li>
                                </ul>
                            </div>
                        </div>
                    </div>
    
                    <!-- Industrial Accidents -->
                    <div class="p-6 bg-white rounded-xl shadow-md">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">🏭 Industrial/Chemical Accidents</h3>
                        <div class="grid md:grid-cols-3 gap-4">
                            <div>
                                <h4 class="font-semibold">Warning Signs</h4>
                                <ul class="list-disc pl-5 text-sm text-gray-600">
                                    <li>Unusual odors or fumes</li>
                                    <li>Emergency sirens</li>
                                    <li>Shelter-in-place alerts</li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="font-semibold">Preparedness</h4>
                                <ul class="list-disc pl-5 text-sm text-gray-600">
                                    <li>Know local industrial hazards</li>
                                    <li>Prepare plastic sheeting and tape</li>
                                    <li>Have portable air filter ready</li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="font-semibold">Response</h4>
                                <ul class="list-disc pl-5 text-sm text-gray-600">
                                    <li>Shelter in place if instructed</li>
                                    <li>Close all windows and vents</li>
                                    <li>Turn off HVAC systems</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Preparedness Checklist -->
            <div class="bg-blue-50 p-8 rounded-xl">
                <h2 class="text-2xl font-bold text-blue-800 mb-4">Universal Preparedness Checklist</h2>
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <h3 class="font-semibold text-blue-700 mb-2">Essential Supplies</h3>
                        <ul class="list-disc pl-5 space-y-1 text-blue-900">
                            <li>3-day water supply (1 gallon/person/day)</li>
                            <li>Non-perishable food</li>
                            <li>First aid kit + medications</li>
                            <li>Flashlight + extra batteries</li>
                            <li>Portable phone charger</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-semibold text-blue-700 mb-2">Important Documents</h3>
                        <ul class="list-disc pl-5 space-y-1 text-blue-900">
                            <li>Copies of IDs and insurance</li>
                            <li>Emergency contact list</li>
                            <li>Medical information</li>
                            <li>Bank account details</li>
                            <li>Property deeds/leases</li>
                        </ul>
                    </div>
                </div>
                <p class="mt-6 text-blue-800 font-medium">Remember: Update your emergency kits every 6 months!</p>
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