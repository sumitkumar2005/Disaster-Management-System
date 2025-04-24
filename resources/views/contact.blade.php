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
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>

        <!-- Logo and Navigation -->
        <div class="flex items-center">
          <a href="/" class="text-2xl font-bold flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-2" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2">
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
      <button id="profileDropdownBtn"
        class="flex items-center space-x-2 hover:text-red-400 transition focus:outline-none">
        <span>{{ Auth::user()->name }}</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd"
          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
          clip-rule="evenodd" />
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
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
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
              <p class="text-gray-600">Website: <a href="https://ndrf.gov.in" target="_blank"
                  class="text-blue-600 hover:underline">ndrf.gov.in</a></p>
            </div>
          </div>
        </div>

        <!-- NDMA Card -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
          <div class="p-6">
            <div class="flex items-center mb-4">
              <svg class="h-8 w-8 text-blue-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
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
              <p class="text-gray-600">Website: <a href="https://ndma.gov.in" target="_blank"
                  class="text-blue-600 hover:underline">ndma.gov.in</a></p>
            </div>
          </div>
        </div>

        <!-- Indian Red Cross Card -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
          <div class="p-6">
            <div class="flex items-center mb-4">
              <svg class="h-8 w-8 text-red-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
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
              <p class="text-gray-600">Helpline: <a href="tel:011-23716441"
                  class="text-blue-600 hover:underline">011-23716441</a></p>
              <p class="text-gray-600">Website: <a href="https://indianredcross.org" target="_blank"
                  class="text-blue-600 hover:underline">indianredcross.org</a></p>
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
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
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
              <p class="text-gray-600">Varies by district - contact local authorities for nearest shelter locations
                during emergencies</p>
            </div>
          </div>
        </div>

        <!-- More Resources Card -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
          <div class="p-6">
            <div class="flex items-center mb-4">
              <svg class="h-8 w-8 text-blue-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
              </svg>
              <h3 class="text-xl font-semibold text-gray-900">Additional Resources</h3>
            </div>
            <p class="text-gray-600 mb-6">
              Find more detailed information about disaster preparedness and response.
            </p>
            <a href="/resources"
              class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
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
                <path
                  d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
              </svg>
            </a>
            <a href="#" class="text-gray-300 hover:text-white">
              <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd"
                  d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                  clip-rule="evenodd" />
              </svg>
            </a>
            <a href="#" class="text-gray-300 hover:text-white">
              <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd"
                  d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                  clip-rule="evenodd" />
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
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-red-500" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
              </svg>
              Emergency: 112
            </li>
            <li class="flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
              info@dms.info
            </li>
            <li class="mt-4">
              <a href="/contact"
                class="text-white bg-red-600 px-4 py-2 rounded inline-block hover:bg-red-700 transition">
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
    document.addEventListener('DOMContentLoaded', function () {
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

          document.getElementById('close-notification').addEventListener('click', function () {
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