<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TravelAgencyController extends Controller
{
    public function index()
    {
        $travelAgencies = [
            [
                'id' => 1,
                'name' => 'Global Tours',
                'location' => 'New York',
                'rating' => 4.8,
                'packages' => 12,
                'specialties' => ['Luxury Travel', 'Adventure Tours', 'Cultural Tours'],
                'logo' => 'https://image.pollinations.ai/prompt/Global%20Tours%20logo%20modern%20professional%20corporate%20design%20200x200'
            ],
            [
                'id' => 2,
                'name' => 'Adventure Seekers',
                'location' => 'London',
                'rating' => 4.7,
                'packages' => 8,
                'specialties' => ['Adventure Tours', 'Wildlife Safaris', 'Trekking Expeditions'],
                'logo' => 'https://image.pollinations.ai/prompt/Adventure%20Seekers%20logo%20modern%20professional%20corporate%20design%20200x200'
            ],
            [
                'id' => 3,
                'name' => 'Sunshine Holidays',
                'location' => 'Dubai',
                'rating' => 4.9,
                'packages' => 15,
                'specialties' => ['Beach Holidays', 'Desert Safaris', 'Luxury Resorts'],
                'logo' => 'https://image.pollinations.ai/prompt/Sunshine%20Holidays%20logo%20modern%20professional%20corporate%20design%20200x200'
            ],
            [
                'id' => 4,
                'name' => 'Wanderlust Travels',
                'location' => 'Sydney',
                'rating' => 4.6,
                'packages' => 10,
                'specialties' => ['Cultural Tours', 'Historical Sites', 'Food Tours'],
                'logo' => 'https://image.pollinations.ai/prompt/Wanderlust%20Travels%20logo%20modern%20professional%20corporate%20design%20200x200'
            ],
            [
                'id' => 5,
                'name' => 'Expedition Tours',
                'location' => 'Toronto',
                'rating' => 4.5,
                'packages' => 7,
                'specialties' => ['Adventure Tours', 'Trekking Expeditions', 'Wildlife Safaris'],
                'logo' => 'https://image.pollinations.ai/prompt/Expedition%20Tours%20logo%20modern%20professional%20corporate%20design%20200x200'
            ],
            [
                'id' => 6,
                'name' => 'Island Escapes',
                'location' => 'Miami',
                'rating' => 4.7,
                'packages' => 9,
                'specialties' => ['Beach Holidays', 'Island Hopping', 'Luxury Resorts'],
                'logo' => 'https://image.pollinations.ai/prompt/Island%20Escapes%20logo%20modern%20professional%20corporate%20design%20200x200'
            ],
            [
                'id' => 7,
                'name' => 'Mountain Adventures',
                'location' => 'Denver',
                'rating' => 4.6,
                'packages' => 6,
                'specialties' => ['Hiking Tours', 'Mountain Climbing', 'Adventure Tours'],
                'logo' => 'https://image.pollinations.ai/prompt/Mountain%20Adventures%20logo%20modern%20professional%20corporate%20design%20200x200'
            ],
            [
                'id' => 8,
                'name' => 'City Explorers',
                'location' => 'Singapore',
                'rating' => 4.8,
                'packages' => 11,
                'specialties' => ['Cultural Tours', 'Historical Sites', 'Food Tours'],
                'logo' => 'https://image.pollinations.ai/prompt/City%20Explorers%20logo%20modern%20professional%20corporate%20design%20200x200'
            ],
            [
                'id' => 9,
                'name' => 'Desert Safaris',
                'location' => 'Abu Dhabi',
                'rating' => 4.5,
                'packages' => 5,
                'specialties' => ['Desert Tours', 'Camel Rides', 'Cultural Experiences'],
                'logo' => 'https://image.pollinations.ai/prompt/Desert%20Safaris%20logo%20modern%20professional%20corporate%20design%20200x200'
            ],
            [
                'id' => 10,
                'name' => 'Coastal Cruises',
                'location' => 'Barcelona',
                'rating' => 4.7,
                'packages' => 8,
                'specialties' => ['Beach Holidays', 'Cruise Tours', 'Luxury Resorts'],
                'logo' => 'https://image.pollinations.ai/prompt/Coastal%20Cruises%20logo%20modern%20professional%20corporate%20design%20200x200'
            ]
        ];

        return view('travel-agencies.index', compact('travelAgencies'));
    }

    public function show($id)
    {
        $agency = [
            'id' => $id,
            'name' => 'Global Tours',
            'location' => 'New York',
            'rating' => 4.8,
            'packages' => 12,
            'specialties' => ['Luxury Travel', 'Adventure Tours', 'Cultural Tours'],
            'description' => 'Global Tours is a leading travel agency specializing in luxury and adventure travel. We offer a wide range of travel packages designed to meet the needs of discerning travelers.',
            'logo' => 'https://image.pollinations.ai/prompt/Global%20Tours%20logo%20modern%20professional%20corporate%20design%20200x200',
            'packages' => [
                [
                    'title' => 'Luxury European Tour',
                    'description' => 'Experience the best of Europe on this luxurious 14-day tour.',
                    'duration' => '14 days',
                    'price' => 4999.00,
                    'image' => 'https://image.pollinations.ai/prompt/Luxury%20European%20Tour%20modern%20professional%20photography%20800x600'
                ],
                [
                    'title' => 'Adventure in the Andes',
                    'description' => 'Join our expert guides on this thrilling adventure through the Andes Mountains.',
                    'duration' => '10 days',
                    'price' => 3499.00,
                    'image' => 'https://image.pollinations.ai/prompt/Adventure%20in%20the%20Andes%20modern%20professional%20photography%20800x600'
                ],
                [
                    'title' => 'Cultural Journey Through Asia',
                    'description' => 'Discover the rich cultural heritage of Asia on this 21-day journey.',
                    'duration' => '21 days',
                    'price' => 5999.00,
                    'image' => 'https://image.pollinations.ai/prompt/Cultural%20Journey%20Through%20Asia%20modern%20professional%20photography%20800x600'
                ]
            ],
            'reviews' => [
                [
                    'tourist' => 'John Doe',
                    'rating' => 5,
                    'comment' => 'Global Tours provided an amazing experience. The tour was well-organized and the guides were excellent.',
                    'date' => '2023-10-15'
                ],
                [
                    'tourist' => 'Sarah Johnson',
                    'rating' => 5,
                    'comment' => 'I had a fantastic time on the European tour. Everything was taken care of and the accommodations were luxurious.',
                    'date' => '2023-09-22'
                ],
                [
                    'tourist' => 'Michael Brown',
                    'rating' => 4,
                    'comment' => 'The adventure tour was great, but I wish there had been more time to explore some of the sites.',
                    'date' => '2023-08-10'
                ]
            ]
        ];

        return view('travel-agencies.show', compact('agency'));
    }
}