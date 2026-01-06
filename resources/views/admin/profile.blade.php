@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Tourist Profile</h1>
        <a href="{{ route('admin.profile.edit') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg transition duration-300">
            Edit Profile
        </a>
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="p-6">
            <div class="flex flex-col md:flex-row">
                <div class="md:w-1/3 mb-6 md:mb-0">
                    <div class="flex flex-col items-center">
                        <img class="w-32 h-32 rounded-full object-cover mb-4" src="{{ $profile['avatar'] }}" alt="{{ $profile['name'] }}">
                        <h2 class="text-xl font-bold text-gray-800">{{ $profile['name'] }}</h2>
                        <p class="text-gray-600">{{ $profile['role'] }}</p>
                    </div>
                </div>

                <div class="md:w-2/3">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-700 mb-2">Personal Information</h3>
                            <div class="space-y-2">
                                <p class="text-gray-600"><span class="font-medium text-gray-700">Email:</span> {{ $profile['email'] }}</p>
                                <p class="text-gray-600"><span class="font-medium text-gray-700">Phone:</span> {{ $profile['phone'] }}</p>
                                <p class="text-gray-600"><span class="font-medium text-gray-700">Location:</span> {{ $profile['location'] }}</p>
                            </div>
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold text-gray-700 mb-2">Travel Preferences</h3>
                            <div class="space-y-2">
                                <p class="text-gray-600"><span class="font-medium text-gray-700">Favorite Destinations:</span> {{ $profile['favorite_destinations'] }}</p>
                                <p class="text-gray-600"><span class="font-medium text-gray-700">Travel Style:</span> {{ $profile['travel_style'] }}</p>
                                <p class="text-gray-600"><span class="font-medium text-gray-700">Budget Range:</span> {{ $profile['budget_range'] }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6">
                        <h3 class="text-lg font-semibold text-gray-700 mb-2">About Me</h3>
                        <p class="text-gray-600">{{ $profile['bio'] }}</p>
                    </div>

                    <div class="mt-6">
                        <h3 class="text-lg font-semibold text-gray-700 mb-2">Recent Trips</h3>
                        <div class="space-y-4">
                            @foreach($profile['recent_trips'] as $trip)
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h4 class="font-medium text-gray-800">{{ $trip['destination'] }}</h4>
                                <p class="text-gray-600 text-sm">{{ $trip['dates'] }}</p>
                                <p class="text-gray-600 mt-1">{{ $trip['description'] }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection