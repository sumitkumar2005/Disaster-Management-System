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
                    <a href="/contact" class="hover:text-[#ff6584]">Shelters&Contacts</a>
                    <div class="border-t pt-4">
                        <a href="#" class="block py-2">Login</a>
                        <a href="#" class="block py-2 px-4 bg-[#6c63ff] rounded">Sign Up</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <section class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <!-- Section Header -->
          <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900">Shelters & Relief Organizations</h2>
            <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">
              During disasters, knowing official shelters and relief organizations can save lives. 
              These agencies provide critical support including emergency rescue, medical aid, 
              temporary shelters, and recovery assistance across India.
            </p>
          </div>
      
          <!-- Organizations Grid -->
          <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            <!-- NDRF Card -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
              <div class="p-6">
                <div class="flex items-center mb-4">
                  <svg class="h-8 w-8 text-blue-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                  </svg>
                  <h3 class="text-xl font-semibold text-gray-900">National Disaster Response Force (NDRF)</h3>
                </div>
                <p class="text-gray-600 mb-4">
                  Specialized force for disaster response operations including search, rescue, and relief.
                </p>
                <ul class="space-y-2 text-gray-700 mb-6">
                  <li class="flex items-start">
                    <svg class="h-5 w-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span>Emergency rescue operations</span>
                  </li>
                  <li class="flex items-start">
                    <svg class="h-5 w-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span>Medical first response</span>
                  </li>
                  <li class="flex items-start">
                    <svg class="h-5 w-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span>Disaster mitigation</span>
                  </li>
                </ul>
                <div class="border-t border-gray-200 pt-4">
                  <h4 class="text-sm font-medium text-gray-500 mb-2">Contact:</h4>
                  <p class="text-gray-600">Helpline: <a href="tel:1078" class="text-blue-600 hover:underline">1078</a></p>
                  <p class="text-gray-600">Website: <a href="https://ndrf.gov.in" target="_blank" class="text-blue-600 hover:underline">ndrf.gov.in</a></p>
                </div>
              </div>
            </div>
      
            <!-- NDMA Card -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
              <div class="p-6">
                <div class="flex items-center mb-4">
                  <svg class="h-8 w-8 text-blue-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                  </svg>
                  <h3 class="text-xl font-semibold text-gray-900">National Disaster Management Authority (NDMA)</h3>
                </div>
                <p class="text-gray-600 mb-4">
                  Apex body for disaster management coordination and policy in India.
                </p>
                <ul class="space-y-2 text-gray-700 mb-6">
                  <li class="flex items-start">
                    <svg class="h-5 w-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span>Disaster preparedness planning</span>
                  </li>
                  <li class="flex items-start">
                    <svg class="h-5 w-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span>Policy and guidelines</span>
                  </li>
                  <li class="flex items-start">
                    <svg class="h-5 w-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span>Capacity development</span>
                  </li>
                </ul>
                <div class="border-t border-gray-200 pt-4">
                  <h4 class="text-sm font-medium text-gray-500 mb-2">Contact:</h4>
                  <p class="text-gray-600">Helpline: <a href="tel:1078" class="text-blue-600 hover:underline">1078</a></p>
                  <p class="text-gray-600">Website: <a href="https://ndma.gov.in" target="_blank" class="text-blue-600 hover:underline">ndma.gov.in</a></p>
                </div>
              </div>
            </div>
      
            <!-- Indian Red Cross Card -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
              <div class="p-6">
                <div class="flex items-center mb-4">
                  <svg class="h-8 w-8 text-red-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                  </svg>
                  <h3 class="text-xl font-semibold text-gray-900">Indian Red Cross Society</h3>
                </div>
                <p class="text-gray-600 mb-4">
                  Humanitarian organization providing emergency assistance during disasters.
                </p>
                <ul class="space-y-2 text-gray-700 mb-6">
                  <li class="flex items-start">
                    <svg class="h-5 w-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span>Medical aid and first aid</span>
                  </li>
                  <li class="flex items-start">
                    <svg class="h-5 w-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span>Blood bank services</span>
                  </li>
                  <li class="flex items-start">
                    <svg class="h-5 w-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span>Relief material distribution</span>
                  </li>
                </ul>
                <div class="border-t border-gray-200 pt-4">
                  <h4 class="text-sm font-medium text-gray-500 mb-2">Contact:</h4>
                  <p class="text-gray-600">Helpline: <a href="tel:011-23716441" class="text-blue-600 hover:underline">011-23716441</a></p>
                  <p class="text-gray-600">Website: <a href="https://indianredcross.org" target="_blank" class="text-blue-600 hover:underline">indianredcross.org</a></p>
                </div>
              </div>
            </div>
      
            <!-- SDRF Card -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
              <div class="p-6">
                <div class="flex items-center mb-4">
                  <svg class="h-8 w-8 text-blue-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                  </svg>
                  <h3 class="text-xl font-semibold text-gray-900">State Disaster Response Forces</h3>
                </div>
                <p class="text-gray-600 mb-4">
                  State-level teams for immediate disaster response and relief operations.
                </p>
                <ul class="space-y-2 text-gray-700 mb-6">
                  <li class="flex items-start">
                    <svg class="h-5 w-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span>Local disaster response</span>
                  </li>
                  <li class="flex items-start">
                    <svg class="h-5 w-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span>Evacuation assistance</span>
                  </li>
                  <li class="flex items-start">
                    <svg class="h-5 w-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span>Coordination with NDRF</span>
                  </li>
                </ul>
                <div class="border-t border-gray-200 pt-4">
                  <h4 class="text-sm font-medium text-gray-500 mb-2">Contact:</h4>
                  <p class="text-gray-600">Varies by state - check your state disaster management authority website</p>
                </div>
              </div>
            </div>
      
            <!-- Shelter Information Card -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
              <div class="p-6">
                <div class="flex items-center mb-4">
                  <svg class="h-8 w-8 text-blue-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                  </svg>
                  <h3 class="text-xl font-semibold text-gray-900">Emergency Shelters</h3>
                </div>
                <p class="text-gray-600 mb-4">
                  Government-designated safe locations during disasters.
                </p>
                <ul class="space-y-2 text-gray-700 mb-6">
                  <li class="flex items-start">
                    <svg class="h-5 w-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span>Temporary accommodation</span>
                  </li>
                  <li class="flex items-start">
                    <svg class="h-5 w-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span>Basic food and water</span>
                  </li>
                  <li class="flex items-start">
                    <svg class="h-5 w-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span>Medical assistance</span>
                  </li>
                </ul>
                <div class="border-t border-gray-200 pt-4">
                  <h4 class="text-sm font-medium text-gray-500 mb-2">Locations:</h4>
                  <p class="text-gray-600">Varies by district - contact local authorities for nearest shelter locations during emergencies</p>
                </div>
              </div>
            </div>
      
            <!-- More Resources Card -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
              <div class="p-6">
                <div class="flex items-center mb-4">
                  <svg class="h-8 w-8 text-blue-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                  </svg>
                  <h3 class="text-xl font-semibold text-gray-900">Additional Resources</h3>
                </div>
                <p class="text-gray-600 mb-6">
                  Find more detailed information about disaster preparedness and response.
                </p>
                <a href="/resources" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                  View All Resources
                  <svg class="ml-2 -mr-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>


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
                    <ul class="text-gray-300 space-y-2">
                        <a href="/contact">Click here</a>
                    </ul>
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