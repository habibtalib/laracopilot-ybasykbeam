@extends('layouts.app')

@section('content')
<div class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <!-- Hero Section -->
        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden mb-12">
            <div class="relative h-96">
                <img src="https://image.pollinations.ai/prompt/modern%20luxury%20travel%20hero%20image%20with%20beach%20resort%20and%20palm%20trees%201920x1080" alt="Luxury Travel Destinations" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-blue-900 to-transparent opacity-70"></div>
                <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
                    <h1 class="text-4xl font-bold mb-4">Discover Your Perfect Getaway</h1>
                    <p class="text-xl mb-6">Explore our curated collection of luxury travel destinations</p>
                    <div class="flex space-x-4">
                        <a href="#destinations" class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-6 py-3 rounded-xl font-semibold hover:from-blue-700 hover:to-indigo-700 transition-all duration-300 transform hover:scale-105">
                            View Destinations
                        </a>
                        <a href="#featured" class="bg-white bg-opacity-20 text-white px-6 py-3 rounded-xl font-semibold border-2 border-white hover:bg-opacity-30 transition-all duration-300">
                            Featured Deals
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Search Section -->
        <div class="bg-white rounded-3xl shadow-lg p-6 mb-12">
            <form class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div>
                    <label for="destination" class="block text-sm font-medium text-gray-700 mb-1">Destination</label>
                    <div class="relative">
                        <input type="text" id="destination" name="destination" placeholder="Where to?" class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <svg class="w-5 h-5 text-gray-400 absolute left-3 top-3.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>
                <div>
                    <label for="check-in" class="block text-sm font-medium text-gray-700 mb-1">Check-in</label>
                    <div class="relative">
                        <input type="date" id="check-in" name="check-in" class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <svg class="w-5 h-5 text-gray-400 absolute left-3 top-3.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>
                <div>
                    <label for="check-out" class="block text-sm font-medium text-gray-700 mb-1">Check-out</label>
                    <div class="relative">
                        <input type="date" id="check-out" name="check-out" class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <svg class="w-5 h-5 text-gray-400 absolute left-3 top-3.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>
                <div class="flex items-end">
                    <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-indigo-600 text-white py-3 px-6 rounded-xl font-semibold hover:from-blue-700 hover:to-indigo-700 transition-all duration-300 transform hover:scale-105">
                        Search
                    </button>
                </div>
            </form>
        </div>

        <!-- Featured Destinations -->
        <div id="destinations" class="mb-16">
            <h2 class="text-3xl font-bold text-blue-800 mb-8">Featured Destinations</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Destination Card 1 -->
                <div class="bg-white rounded-3xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300">
                    <div class="relative h-64">
                        <img src="https://image.pollinations.ai/prompt/luxury%20beach%20resort%20with%20infinity%20pool%20and%20palm%20trees%20800x600" alt="Beach Resort" class="w-full h-full object-cover">
                        <div class="absolute top-4 right-4 bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-semibold">Top Rated</div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="text-xl font-bold text-blue-800">Maldives Paradise</h3>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <span class="ml-1 font-semibold text-gray-700">4.9</span>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-4">Experience the ultimate tropical paradise with our luxurious beach resort.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-blue-600 font-bold text-lg">$299/night</span>
                            <a href="{{ route('tourist.details') }}" class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-4 py-2 rounded-xl font-semibold hover:from-blue-700 hover:to-indigo-700 transition-all duration-300">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Destination Card 2 -->
                <div class="bg-white rounded-3xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300">
                    <div class="relative h-64">
                        <img src="https://image.pollinations.ai/prompt/modern%20luxury%20hotel%20in%20Paris%20with%20Eiffel%20Tower%20view%20800x600" alt="Paris Hotel" class="w-full h-full object-cover">
                        <div class="absolute top-4 right-4 bg-green-600 text-white px-3 py-1 rounded-full text-sm font-semibold">Best Price</div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="text-xl font-bold text-blue-800">Paris Elegance</h3>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <span class="ml-1 font-semibold text-gray-700">4.8</span>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-4">Stay in the heart of Paris with our modern luxury hotel offering stunning Eiffel Tower views.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-blue-600 font-bold text-lg">$349/night</span>
                            <a href="#" onclick="alert('Coming Soon!')" class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-4 py-2 rounded-xl font-semibold hover:from-blue-700 hover:to-indigo-700 transition-all duration-300">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Destination Card 3 -->
                <div class="bg-white rounded-3xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300">
                    <div class="relative h-64">
                        <img src="https://image.pollinations.ai/prompt/luxury%20mountain%20retreat%20with%20snow-capped%20peaks%20800x600" alt="Mountain Retreat" class="w-full h-full object-cover">
                        <div class="absolute top-4 right-4 bg-purple-600 text-white px-3 py-1 rounded-full text-sm font-semibold">Adventure</div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="text-xl font-bold text-blue-800">Alpine Escape</h3>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <span class="ml-1 font-semibold text-gray-700">4.7</span>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-4">Escape to the mountains with our luxurious retreat offering breathtaking views and adventure activities.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-blue-600 font-bold text-lg">$279/night</span>
                            <a href="#" onclick="alert('Coming Soon!')" class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-4 py-2 rounded-xl font-semibold hover:from-blue-700 hover:to-indigo-700 transition-all duration-300">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Featured Deals -->
        <div id="featured" class="mb-16">
            <h2 class="text-3xl font-bold text-blue-800 mb-8">Featured Deals</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Deal Card 1 -->
                <div class="bg-white rounded-3xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300">
                    <div class="relative h-64">
                        <img src="https://image.pollinations.ai/prompt/luxury%20tropical%20villa%20with%20private%20pool%20800x600" alt="Tropical Villa" class="w-full h-full object-cover">
                        <div class="absolute top-4 left-4 bg-red-600 text-white px-3 py-1 rounded-full text-sm font-semibold">Limited Time</div>
                        <div class="absolute top-4 right-4 bg-yellow-500 text-gray-900 px-3 py-1 rounded-full text-sm font-semibold">20% OFF</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-blue-800 mb-2">Tropical Villa Escape</h3>
                        <p class="text-gray-600 mb-4">Enjoy a luxurious tropical getaway with our exclusive villa package. Includes private pool, gourmet dining, and beachfront access.</p>
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="text-gray-500 line-through mr-2">$499/night</span>
                                <span class="text-blue-600 font-bold text-lg">$399/night</span>
                            </div>
                            <a href="#" onclick="alert('Coming Soon!')" class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-4 py-2 rounded-xl font-semibold hover:from-blue-700 hover:to-indigo-700 transition-all duration-300">
                                Book Now
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Deal Card 2 -->
                <div class="bg-white rounded-3xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300">
                    <div class="relative h-64">
                        <img src="https://image.pollinations.ai/prompt/luxury%20city%20hotel%20with%20panoramic%20city%20views%20800x600" alt="City Hotel" class="w-full h-full object-cover">
                        <div class="absolute top-4 left-4 bg-red-600 text-white px-3 py-1 rounded-full text-sm font-semibold">Last Chance</div>
                        <div class="absolute top-4 right-4 bg-yellow-500 text-gray-900 px-3 py-1 rounded-full text-sm font-semibold">15% OFF</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-blue-800 mb-2">Urban Luxury Experience</h3>
                        <p class="text-gray-600 mb-4">Stay in the heart of the city with our luxury hotel offering panoramic views, premium amenities, and exclusive city tours.</p>
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="text-gray-500 line-through mr-2">$349/night</span>
                                <span class="text-blue-600 font-bold text-lg">$294/night</span>
                            </div>
                            <a href="#" onclick="alert('Coming Soon!')" class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-4 py-2 rounded-xl font-semibold hover:from-blue-700 hover:to-indigo-700 transition-all duration-300">
                                Book Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Why Choose Us -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold text-blue-800 mb-8 text-center">Why Choose Us</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature Card 1 -->
                <div class="bg-white rounded-3xl shadow-lg p-8 text-center transform hover:scale-105 transition-all duration-300">
                    <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-blue-800 mb-3">Best Price Guarantee</h3>
                    <p class="text-gray-600">We guarantee the best prices for all our luxury accommodations. If you find a lower price, we'll match it.</p>
                </div>

                <!-- Feature Card 2 -->
                <div class="bg-white rounded-3xl shadow-lg p-8 text-center transform hover:scale-105 transition-all duration-300">
                    <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 4.25A2.25 2.25 0 014.25 2h2.5A2.25 2.25 0 019 4.25v2.5A2.25 2.25 0 016.75 9h-2.5A2.25 2.25 0 012 6.75v-2.5zM2 13.25A2.25 2.25 0 014.25 11h2.5A2.25 2.25 0 019 13.25v2.5A2.25 2.25 0 016.75 18h-2.5A2.25 2.25 0 012 15.75v-2.5zM11 4.25A2.25 2.25 0 0113.25 2h2.5A2.25 2.25 0 0118 4.25v2.5A2.25 2.25 0 0115.75 9h-2.5A2.25 2.25 0 0111 6.75v-2.5zM15.25 11.75a.75.75 0 00-1.5 0v2.5a.75.75 0 001.5 0v-2.5zM11 15.25a.75.75 0 00-1.5 0v2.5a.75.75 0 001.5 0v-2.5zM11 11.75a.75.75 0 00-1.5 0v2.5a.75.75 0 001.5 0v-2.5z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-blue-800 mb-3">Exclusive Deals</h3>
                    <p class="text-gray-600">Access to exclusive deals and special offers that you won't find anywhere else.</p>
                </div>

                <!-- Feature Card 3 -->
                <div class="bg-white rounded-3xl shadow-lg p-8 text-center transform hover:scale-105 transition-all duration-300">
                    <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-blue-800 mb-3">24/7 Support</h3>
                    <p class="text-gray-600">Our dedicated travel experts are available around the clock to assist you with any questions or concerns.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection