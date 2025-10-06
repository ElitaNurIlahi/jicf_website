<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'JICF 2025')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
            overflow-x: hidden; /* Prevent horizontal scroll */
        }

        .nav-link {
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: #3B82F6;
        }

        .nav-link.active {
            color: #3B82F6;
            font-weight: 600;
        }

        
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <img src="{{ asset('images/logojicf.png') }}" alt="JICF Logo" class="h-16">
                    <div>
                        <div class="text-sm font-semibold text-gray-600">THE THIRD</div>
                        <h1 class="text-xl font-bold text-gray-900">Jakarta International</h1>
                        <p class="text-sm text-gray-600">Competition Forum</p>
                    </div>
                </div>

                <nav class="hidden md:flex space-x-8">
                <a href="{{ route('home') }}" class="nav-link {{ Request::routeIs('home') ? 'active' : '' }}">Home</a>
                <a href="{{ route('about.jicf') }}" class="nav-link {{ Request::routeIs('about.jicf') ? 'active' : '' }}">About JICF</a>
                <a href="{{ route('registration') }}" class="nav-link {{ Request::routeIs('registration') ? 'active' : '' }}">Registration</a>
                <a href="{{ route('agenda') }}" class="nav-link {{ Request::routeIs('agenda') ? 'active' : '' }}">Agenda</a>
                
                <div 
                    class="relative" 
                    x-data="{ openInfo: false }" 
                    @mouseenter="openInfo = true" 
                    @mouseleave="openInfo = false"
                >
                    
                    <a href="#" class="nav-link">Information</a> 
                    
                    <div 
                        x-show="openInfo" 
                        x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        class="absolute right-0 mt-2 w-48 bg-white shadow-lg rounded-md py-2 z-50 origin-top-right"
                        style="display: none;" 
                    >
                        <a href="{{ route('information.about-host') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">About Host</a>
                        <a href="{{ route('information.about-jakarta') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">About Jakarta</a>
                        <a href="{{ route('information.venue') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Venue</a>
                        <a href="{{ route('information.accommodation') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Accommodation</a>
                        <a href="{{ route('information.social-activity') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Social Activity</a>
                    </div>
                </div>
                <a href="{{ route('contact') }}" class="nav-link {{ Request::routeIs('contact') ? 'active' : '' }}">Contact</a>
            </nav>
            </div>
        </div>
    </header>

    <!-- Main Content tanpa padding -->
    <main class="p-0 m-0">
        @yield('content')
    </main>

    <!-- Footer dihapus -->
</body>
</html>