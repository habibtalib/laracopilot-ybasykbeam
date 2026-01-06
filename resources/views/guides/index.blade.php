@extends('layouts.app')

@section('title', 'Tourist Guides - Tourism Guide')

@section('content')
    <div class="bg-gradient-to-r from-green-400 to-blue-500 text-white py-12 px-6 rounded-xl mb-8 shadow-lg">
        <div class="container mx-auto">
            <h1 class="text-3xl md:text-4xl font-bold mb-2">Our Expert Tourist Guides</h1>
            <p class="text-lg">Discover the world with our professional guides who know every destination inside out</p>
        </div>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
        @foreach($guides as $guide)
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition duration-300">
                <div class="relative">
                    <img src="{{ $guide['image'] }}" alt="{{ $guide['name'] }}" class="w-full h-64 object-cover">
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                        <h3 class="text-white text-xl font-bold">{{ $guide['name'] }}</h3>
                        <p class="text-white/90">{{ $guide['specialty'] }}</p>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <span class="text-yellow-400 mr-1">
                            @for($i = 0; $i < 5; $i++)
                                @if($i < $guide['rating'])
                                    <i class="fas fa-star"></i>
                                @else
                                    <i class="far fa-star"></i>
                                @endif
                            @endfor
                        </span>
                        <span class="text-gray-600">({{ $guide['reviews'] }} reviews)</span>
                    </div>
                    <p class="text-gray-700 mb-4">{{ $guide['bio'] }}</p>
                    <div class="flex justify-between items-center">
                        <span class="text-green-600 font-bold">${{ $guide['price'] }}/day</span>
                        <a href="#" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded transition duration-300">Book Now</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="text-center">
        <h2 class="text-2xl font-bold mb-6 text-green-600">Need a Guide for a Specific Destination?</h2>
        <div class="flex justify-center mb-8">
            <div class="relative w-full max-w-md">
                <input type="text" placeholder="Search destinations..." class="w-full pl-4 pr-12 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
                <button class="absolute right-0 top-0 mt-2 mr-2 bg-green-500 hover:bg-green-600 text-white py-1 px-4 rounded transition duration-300">Search</button>
            </div>
        </div>
        <p class="text-gray-700 mb-4">Can't find what you're looking for? We can customize a guide for your specific needs.</p>
        <a href="#" class="inline-block bg-white border-2 border-green-500 hover:bg-green-50 text-green-600 hover:text-white font-bold py-2 px-6 rounded-lg transition duration-300">Request a Custom Guide</a>
    </div>
@endsection