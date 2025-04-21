<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Disaster Management System</title>
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

    <!-- Main Content -->
    <main class="flex-grow container mx-auto px-6 py-12">
        <!-- Hero Section -->
        <section class="text-center mb-20">
            <h1 class="text-4xl md:text-6xl font-extrabold mb-6">Disaster Management System</h1>
            <p class="text-xl mb-8 text-[#555]">Providing critical support and resources during emergencies</p>
            <a href="/alerts"><button
                    class="bg-[#de0e37] text-white px-8 py-3 rounded-lg hover:bg-[#e55472] transition">
                    Emergency Alerts
                </button></a>
        </section>

        <!-- Features Section -->
        <section class="grid md:grid-cols-3 gap-8 mb-20">
            <div class="p-6 bg-white rounded-lg shadow hover:shadow-lg transition">
                <a href="/alerts">
                    <h3 class="text-xl font-semibold mb-3">Real-time Alerts</h3>
                </a>
                <p class="text-[#555]">Get instant notifications about emergencies in your area.</p>
            </div>
            <div class="p-6 bg-white rounded-lg shadow hover:shadow-lg transition">
                <a href="/resources">
                    <h3 class="text-xl font-semibold mb-3">Resource Directory</h3>
                </a>
                <p class="text-[#555]">Access essential services and emergency contacts.</p>
            </div>
            <div class="p-6 bg-white rounded-lg shadow hover:shadow-lg transition">
                <a href="/resources">
                    <h3 class="text-xl font-semibold mb-3">Safety Guidelines</h3>
                </a>
                <p class="text-[#555]">Step-by-step instructions for different disaster scenarios.</p>
            </div>
        </section>
        <!-- Latest Disaster News Section -->
        <section class="mb-20">
            <h2 class="text-3xl font-bold mb-8 text-center">Latest News & Updates</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Article 1 -->
                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold mb-2">Severe Floods Hit Assam</h3>
                    <p class="text-[#555] mb-3">Rising water levels have displaced thousands across several districts.
                        Relief operations are ongoing.</p>
                    <a href="https://www.indiatoday.in/india/story/assam-floods-rains-weather-update-death-toll-himanta-biswa-sarma-amit-shah-ndrf-sdrf-rescue-ops-2563335-2024-07-06?utm_source=global-search&utm_medium=global-search&utm_campaign=global-search"
                        target="_blank" class="text-[#de0e37] font-medium hover:underline">Read More →</a>
                </div>
                <!-- Article 2 -->
                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold mb-2">Cyclone Remal Approaches Eastern Coast</h3>
                    <p class="text-[#555] mb-3">Authorities issue red alerts in coastal regions of Odisha and West
                        Bengal as cyclone strengthens.</p>
                    <a href="https://www.indiatoday.in/india/story/cyclone-remal-victims-ex-gratia-financial-compensation-pm-narendra-modi-northeast-west-bengal-2546606-2024-06-01?utm_source=global-search&utm_medium=global-search&utm_campaign=global-search"
                        target="_blank" class="text-[#de0e37] font-medium hover:underline">Read More →</a>
                </div>
                <!-- Article 3 -->
                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold mb-2">Heatwave Sweeps Across Northern India</h3>
                    <p class="text-[#555] mb-3">Temperatures reach 45°C in many states; health advisories released to
                        prevent heatstroke.</p>
                    <a href="https://www.indiatoday.in/health/health-360/video/beating-the-heat-tackling-common-health-issues-in-summer-2704501-2025-04-05?utm_source=global-search&utm_medium=global-search&utm_campaign=global-search"
                        target="_blank" class="text-[#de0e37] font-medium hover:underline">Read More →</a>
                </div>
            </div>
        </section>

        <!-- Placeholder Sections -->

    </main>

    <!-- Footer -->
    <footer class="bg-[#2e2a4f] text-white mt-20">
        <div class="container mx-auto px-6 py-10">
            <div class="grid md:grid-cols-3 gap-10">
                <!-- About Section -->
                <div>
                    <h4 class="text-xl font-bold mb-4">About DMS</h4>
                    <p class="text-gray-300">A comprehensive platform for disaster preparedness, response, and recovery.
                    </p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-xl font-bold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="/resources" class="text-gray-300 hover:text-white transition">Emergency Procedures</a></li>
                        <li><a href="/contact" class="text-gray-300 hover:text-white transition">Evacuation Routes</a></li>
                        <li><a href="/contact" class="text-gray-300 hover:text-white transition">Shelter Locations</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
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
        });
    </script>
</body>

</html>