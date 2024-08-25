<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <!-- Hero Section -->
        <div class="bg-gray-100 rounded-lg p-8 my-12">
            <h1 class="text-4xl font-bold text-center text-gray-800">Welcome to My Laravel App</h1>
            <p class="mt-4 text-lg text-center text-gray-600">This is a simple homepage for your Laravel application.</p>
            <div class="flex justify-center mt-8">
                <a href="{{ url('/about') }}" class="bg-blue-500 text-black px-6 py-3 rounded-lg shadow-lg hover:bg-blue-600">Learn More</a>
            </div>
        </div>

        <!-- Features Section -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 my-12">
            <div class="bg-black shadow-lg rounded-lg p-6 text-center">
                <h3 class="text-2xl font-semibold text-gray-800">Feature 1</h3>
                <p class="mt-4 text-gray-600">Description of the first feature.</p>
            </div>
            <div class="bg-black shadow-lg rounded-lg p-6 text-center">
                <h3 class="text-2xl font-semibold text-gray-800">Feature 2</h3>
                <p class="mt-4 text-gray-600">Description of the second feature.</p>
            </div>
            <div class="bg-black shadow-lg rounded-lg p-6 text-center">
                <h3 class="text-2xl font-semibold text-gray-800">Feature 3</h3>
                <p class="mt-4 text-gray-600">Description of the third feature.</p>
            </div>
        </div>

        <!-- Call to Action Section -->
        <div class="bg-blue-500 rounded-lg p-8 my-12 text-center">
            <h2 class="text-3xl font-bold text-black">Ready to Get Started?</h2>
            <p class="mt-4 text-lg text-black">Sign up today and start using our awesome features.</p>
            <div class="flex justify-center mt-8">
                @if (Route::has('login'))
                    <div class="p-6 text-right sm:fixed sm:top-0 sm:right-0">
                        @auth
                            <a href="{{ route('home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500">Home</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="inline">
                                @csrf
                                <button type="submit" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500">
                                    Log out
                                </button>
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500">Register</a>
                            @endif

                        @endauth


                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
