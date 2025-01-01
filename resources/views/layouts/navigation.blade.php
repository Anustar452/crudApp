
Here’s an example of a navigation.blade.php file that you might include in the layout directory of a Laravel application. This file typically contains the navigation menu (e.g., a navbar) for the application.

Example navigation.blade.php Content:
php
Copy code
<nav class="bg-white shadow-md">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Left Side -->
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ url('/') }}">
                    <img class="h-8 w-auto" src="{{ asset('images/logo.png') }}" alt="{{ config('app.name', 'Laravel') }}">
                </a>
            </div>

            <!-- Center (Optional Navigation Links) -->
            <div class="hidden sm:flex sm:items-center sm:space-x-4">
                <a href="{{ route('home') }}" class="text-gray-800 hover:text-blue-500">Home</a>
                <a href="{{ route('about') }}" class="text-gray-800 hover:text-blue-500">About</a>
                <a href="{{ route('contact') }}" class="text-gray-800 hover:text-blue-500">Contact</a>
            </div>

            <!-- Right Side -->
            <div class="flex items-center space-x-4">
                @auth
                    <!-- User Dropdown -->
                    <div class="relative">
                        <button class="text-gray-800 hover:text-blue-500">
                            {{ Auth::user()->name }}
                        </button>
                        <div class="absolute right-0 mt-2 w-48 bg-white shadow-md rounded-lg">
                            <a href="{{ route('profile') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Profile</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="block w-full text-left px-4 py-2 text-gray-800 hover:bg-gray-100">Logout</button>
                            </form>
                        </div>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="text-gray-800 hover:text-blue-500">Login</a>
                    <a href="{{ route('register') }}" class="text-gray-800 hover:text-blue-500">Register</a>
                @endauth
            </div>
        </div>
    </div>
</nav>