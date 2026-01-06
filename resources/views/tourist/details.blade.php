@extends('layouts.app')

@section('content')
<div class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <!-- Hero Section -->
        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden mb-12">
            <div class="relative h-96">
                <img src="https://image.pollinations.ai/prompt/modern%20tourist%20destination%20hero%20image%20beach%20resort%20with%20palm%20trees%20and%20blue%20water%20professional%20photography%201920x1080" alt="Tourist Destination" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-blue-900 to-transparent opacity-70"></div>
                <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
                    <h1 class="text-4xl font-bold mb-2">Beautiful Beach Resort</h1>
                    <div class="flex items-center space-x-4">
                        <span class="flex items-center">
                            <svg class="w-5 h-5 mr-1 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <span class="font-semibold">4.9</span>
                        </span>
                        <span class="bg-blue-600 bg-opacity-70 px-3 py-1 rounded-full text-sm">Top Rated</span>
                        <span class="flex items-center">
                            <svg class="w-5 h-5 mr-1 text-blue-300" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Maldives</span>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Details Section -->
            <div class="p-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="md:col-span-2">
                        <h2 class="text-2xl font-bold mb-4 text-blue-800">About This Destination</h2>
                        <p class="text-gray-700 leading-relaxed mb-6">
                            Experience the ultimate tropical paradise at our luxurious beach resort. Nestled on the pristine shores of the Indian Ocean, our resort offers an unparalleled blend of relaxation and adventure. With private beaches, world-class amenities, and exceptional service, we ensure an unforgettable vacation experience for our guests.
                        </p>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                            <div class="bg-blue-50 p-6 rounded-2xl shadow-sm">
                                <h3 class="text-lg font-semibold text-blue-800 mb-3">Key Features</h3>
                                <ul class="space-y-3">
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-blue-500 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        <span>Private beach access</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-blue-500 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        <span>All-inclusive dining</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-blue-500 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        <span>Water sports center</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="bg-blue-50 p-6 rounded-2xl shadow-sm">
                                <h3 class="text-lg font-semibold text-blue-800 mb-3">Best For</h3>
                                <ul class="space-y-3">
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-blue-500 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        <span>Couples</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-blue-500 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        <span>Families</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-blue-500 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        <span>Honeymooners</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="bg-white p-6 rounded-2xl shadow-lg">
                            <h3 class="text-xl font-bold text-blue-800 mb-4">Facilities & Amenities</h3>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                <div class="flex flex-col items-center p-3 bg-blue-50 rounded-xl">
                                    <div class="bg-blue-100 p-3 rounded-full mb-2">
                                        <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="text-sm text-center">Swimming Pool</span>
                                </div>
                                <div class="flex flex-col items-center p-3 bg-blue-50 rounded-xl">
                                    <div class="bg-blue-100 p-3 rounded-full mb-2">
                                        <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm4 1v2h4V5H8zm0 4v2h4V9H8zm0 4v2h4v-2H8z"/>
                                        </svg>
                                    </div>
                                    <span class="text-sm text-center">Restaurant</span>
                                </div>
                                <div class="flex flex-col items-center p-3 bg-blue-50 rounded-xl">
                                    <div class="bg-blue-100 p-3 rounded-full mb-2">
                                        <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="text-sm text-center">Spa & Wellness</span>
                                </div>
                                <div class="flex flex-col items-center p-3 bg-blue-50 rounded-xl">
                                    <div class="bg-blue-100 p-3 rounded-full mb-2">
                                        <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="text-sm text-center">Fitness Center</span>
                                </div>
                                <div class="flex flex-col items-center p-3 bg-blue-50 rounded-xl">
                                    <div class="bg-blue-100 p-3 rounded-full mb-2">
                                        <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="text-sm text-center">Beachfront</span>
                                </div>
                                <div class="flex flex-col items-center p-3 bg-blue-50 rounded-xl">
                                    <div class="bg-blue-100 p-3 rounded-full mb-2">
                                        <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="text-sm text-center">WiFi</span>
                                </div>
                                <div class="flex flex-col items-center p-3 bg-blue-50 rounded-xl">
                                    <div class="bg-blue-100 p-3 rounded-full mb-2">
                                        <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="text-sm text-center">Airport Transfer</span>
                                </div>
                                <div class="flex flex-col items-center p-3 bg-blue-50 rounded-xl">
                                    <div class="bg-blue-100 p-3 rounded-full mb-2">
                                        <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="text-sm text-center">Concierge</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="bg-white p-6 rounded-2xl shadow-lg mb-6">
                            <h3 class="text-xl font-bold text-blue-800 mb-4">Price Details</h3>
                            <div class="space-y-4">
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-600">Per night</span>
                                    <span class="text-2xl font-bold text-blue-600">$299</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-600">Taxes & Fees</span>
                                    <span class="text-gray-600">$35</span>
                                </div>
                                <div class="border-t border-gray-200 pt-4">
                                    <div class="flex justify-between items-center">
                                        <span class="text-gray-800 font-semibold">Total</span>
                                        <span class="text-2xl font-bold text-blue-600">$334</span>
                                    </div>
                                </div>
                            </div>
                            <button class="w-full bg-gradient-to-r from-blue-600 to-indigo-600 text-white py-3 px-6 rounded-xl mt-6 font-semibold hover:from-blue-700 hover:to-indigo-700 transition-all duration-300 transform hover:scale-105">
                                Book Now
                            </button>
                        </div>

                        <div class="bg-white p-6 rounded-2xl shadow-lg">
                            <h3 class="text-xl font-bold text-blue-800 mb-4">Customer Reviews</h3>
                            <div class="flex items-center mb-4">
                                <div class="flex">
                                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                </div>
                                <span class="ml-2 text-gray-600">4.9 (1,245 reviews)</span>
                            </div>
                            <div class="space-y-4">
                                <div>
                                    <div class="flex justify-between items-center mb-1">
                                        <span class="text-gray-700">Cleanliness</span>
                                        <span class="text-gray-700">4.9</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-2">
                                        <div class="bg-blue-600 h-2 rounded-full" style="width: 98%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between items-center mb-1">
                                        <span class="text-gray-700">Location</span>
                                        <span class="text-gray-700">4.8</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-2">
                                        <div class="bg-blue-600 h-2 rounded-full" style="width: 96%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between items-center mb-1">
                                        <span class="text-gray-700">Service</span>
                                        <span class="text-gray-700">4.7</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-2">
                                        <div class="bg-blue-600 h-2 rounded-full" style="width: 94%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between items-center mb-1">
                                        <span class="text-gray-700">Value</span>
                                        <span class="text-gray-700">4.6</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-2">
                                        <div class="bg-blue-600 h-2 rounded-full" style="width: 92%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Section -->
                <div class="mt-12">
                    <h2 class="text-2xl font-bold text-blue-800 mb-6">Photo Gallery</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="md:col-span-2">
                            <img src="https://image.pollinations.ai/prompt/luxury%20beach%20resort%20main%20pool%20with%20palm%20trees%20and%20blue%20water%201200x800" alt="Main Pool" class="w-full h-96 object-cover rounded-2xl shadow-lg">
                        </div>
                        <div class="grid grid-cols-1 gap-6">
                            <img src="https://image.pollinations.ai/prompt/elegant%20beach%20resort%20restaurant%20with%20tropical%20decor%20800x600" alt="Restaurant" class="w-full h-44 object-cover rounded-2xl shadow-lg">
                            <img src="https://image.pollinations.ai/prompt/modern%20luxury%20beach%20resort%20spa%20and%20wellness%20center%20800x600" alt="Spa" class="w-full h-44 object-cover rounded-2xl shadow-lg">
                        </div>
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-6">
                        <img src="https://image.pollinations.ai/prompt/beachfront%20luxury%20villa%20with%20private%20pool%20600x400" alt="Villa" class="w-full h-40 object-cover rounded-2xl shadow-lg">
                        <img src="https://image.pollinations.ai/prompt/beach%20resort%20water%20sports%20center%20with%20kayaks%20600x400" alt="Water Sports" class="w-full h-40 object-cover rounded-2xl shadow-lg">
                        <img src="https://image.pollinations.ai/prompt/luxury%20beach%20resort%20gym%20with%20modern%20equipment%20600x400" alt="Gym" class="w-full h-40 object-cover rounded-2xl shadow-lg">
                        <img src="https://image.pollinations.ai/prompt/beach%20resort%20beach%20bar%20with%20tropical%20drinks%20600x400" alt="Beach Bar" class="w-full h-40 object-cover rounded-2xl shadow-lg">
                    </div>
                </div>

                <!-- Location Section -->
                <div class="mt-12">
                    <h2 class="text-2xl font-bold text-blue-800 mb-6">Location</h2>
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                        <div class="h-96 w-full">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.0000000000005!2d73.123456!3d3.987654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zM8KwNTknMTUuMyJOIDczwrAwNyc0OC40IkU!5e0!3m2!1sen!2sus!4v1620000000000!5m2!1sen!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-blue-800 mb-2">Beautiful Beach Resort</h3>
                            <p class="text-gray-600 mb-4">123 Beach Road, Maldives</p>
                            <div class="flex items-center space-x-4">
                                <span class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-1 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>15 min from airport</span>
                                </span>
                                <span class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-1 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>2 km from beach</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection