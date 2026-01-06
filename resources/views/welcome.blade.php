@extends('layouts.app')

@section('title', 'Home - Tourism Guide')

@section('content')
    <div class="bg-gradient-to-r from-green-400 to-blue-500 text-white py-20 px-6 rounded-xl mb-12 shadow-lg">
        <div class="container mx-auto">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Discover the World with Expert Guides</h1>
            <p class="text-xl mb-8">Find your perfect travel experience with our professional tourism guides</p>
            <a href="/guides" class="bg-white text-green-600 hover:bg-gray-100 font-bold py-3 px-6 rounded-lg transition duration-300 shadow-md hover:shadow-lg">Find a Guide</a>
        </div>
    </div>

    <div class="grid md:grid-cols-3 gap-8 mb-12">
        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
            <div class="text-green-500 text-4xl mb-4">
                <i class="fas fa-compass"></i>
            </div>
            <h3 class="text-xl font-semibold mb-2">Expert Guides</h3>
            <p class="text-gray-600">Our guides are experienced professionals who know the best hidden gems in every destination.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
            <div class="text-green-500 text-4xl mb-4">
                <i class="fas fa-map-marked-alt"></i>
            </div>
            <h3 class="text-xl font-semibold mb-2">Custom Itineraries</h3>
            <p class="text-gray-600">We create personalized travel plans tailored to your interests and preferences.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
            <div class="text-green-500 text-4xl mb-4">
                <i class="fas fa-headset"></i>
            </div>
            <h3 class="text-xl font-semibold mb-2">24/7 Support</h3>
            <p class="text-gray-600">Our team is always available to assist you before, during, and after your trip.</p>
        </div>
    </div>

    <div class="bg-gray-100 p-8 rounded-xl mb-12">
        <h2 class="text-3xl font-bold text-center mb-8 text-green-600">Popular Destinations</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition duration-300">
                <img src="https://image.pollinations.ai/prompt/a%20beautiful%20beach%20destination%20with%20palm%20trees%20and%20clear%20blue%20water/800/600" alt="Beach Destination" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold text-lg mb-2">Tropical Paradise</h3>
                    <p class="text-gray-600 text-sm">Experience the beauty of crystal clear waters and white sandy beaches.</p>
                </div>
            </div>
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition duration-300">
                <img src="https://image.pollinations.ai/prompt/a%20mountainous%20landscape%20with%20snow-capped%20peaks%20and%20a%20clear%20blue%20sky/800/600" alt="Mountain Destination" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold text-lg mb-2">Alpine Adventure</h3>
                    <p class="text-gray-600 text-sm">Explore stunning mountain ranges and breathtaking views.</p>
                </div>
            </div>
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition duration-300">
                <img src="https://image.pollinations.ai/prompt/a%20vibrant%20city%20skyline%20with%20modern%20buildings%20and%20a%20river%20running%20through/800/600" alt="City Destination" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold text-lg mb-2">Urban Exploration</h3>
                    <p class="text-gray-600 text-sm">Discover the culture and history of vibrant urban centers.</p>
                </div>
            </div>
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition duration-300">
                <img src="https://image.pollinations.ai/prompt/a%20historic%20castle%20perched%20on%20a%20cliff%20with%20a%20clear%20blue%20sky/800/600" alt="Historic Destination" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold text-lg mb-2">Royal Heritage</h3>
                    <p class="text-gray-600 text-sm">Step back in time and explore ancient castles and historic sites.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mb-12">
        <h2 class="text-3xl font-bold mb-8 text-green-600">Why Choose Our Guides?</h2>
        <div class="max-w-3xl mx-auto">
            <p class="text-gray-700 text-lg mb-6">Our tourism guides are not just knowledgeable about the destinations, but they are also passionate about sharing their experiences and helping you create unforgettable memories.</p>
            <p class="text-gray-700 text-lg">With years of experience in the travel industry, our guides have a deep understanding of the culture, history, and attractions of each destination they serve.</p>
        </div>
    </div>

    <div class="bg-green-50 p-8 rounded-xl mb-12">
        <h2 class="text-3xl font-bold text-center mb-8 text-green-600">Testimonials</h2>
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="flex items-center mb-4">
                    <img src="https://image.pollinations.ai/prompt/a%20happy%20traveler%20with%20a%20smile%20and%20backpack%20on%20a%20beach/200/200" alt="Traveler" class="w-16 h-16 rounded-full mr-4">
                    <div>
                        <h4 class="font-semibold">Sarah Johnson</h4>
                        <p class="text-sm text-gray-500">Adventure Seeker</p>
                    </div>
                </div>
                <p class="text-gray-700 italic">"The guide we booked through Tourism Guide made our trip to the mountains an unforgettable experience. Their knowledge of the local culture and history was incredible!"</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="flex items-center mb-4">
                    <img src="https://image.pollinations.ai/prompt/a%20business%20traveler%20wearing%20a%20suit%20and%20tie%20in%20a%20city%20setting/200/200" alt="Traveler" class="w-16 h-16 rounded-full mr-4">
                    <div>
                        <h4 class="font-semibold">Michael Chen</h4>
                        <p class="text-sm text-gray-500">Business Traveler</p>
                    </div>
                </div>
                <p class="text-gray-700 italic">"As a business traveler, I needed a guide who could show me the best networking opportunities in the city. Our guide exceeded all expectations and made my trip both productive and enjoyable."</p>
            </div>
        </div>
    </div>

    <div class="text-center">
        <h2 class="text-3xl font-bold mb-8 text-green-600">Ready to Start Your Journey?</h2>
        <p class="text-gray-700 text-lg mb-8 max-w-2xl mx-auto">Find the perfect guide for your next adventure and create memories that will last a lifetime.</p>
        <a href="/guides" class="bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-8 rounded-lg transition duration-300 shadow-md hover:shadow-lg">Find a Guide Now</a>
    </div>
@endsection