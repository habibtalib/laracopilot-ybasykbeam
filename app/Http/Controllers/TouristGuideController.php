<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TouristGuideController extends Controller
{
    public function index()
    {
        $touristGuides = [
            [
                'id' => 1,
                'name' => 'Maria Garcia',
                'language' => 'Spanish',
                'location' => 'Barcelona',
                'rating' => 4.9,
                'hourly_rate' => 50.00,
                'experience' => '10 years',
                'specialties' => ['Historical Sites', 'Cultural Tours', 'Food Tours'],
                'image' => 'https://image.pollinations.ai/prompt/professional%20tourist%20guide%20headshot%20Barcelona%20Spain%20modern%20business%20portrait%20400x400'
            ],
            [
                'id' => 2,
                'name' => 'Ahmed Khan',
                'language' => 'Urdu',
                'location' => 'Islamabad',
                'rating' => 4.8,
                'hourly_rate' => 45.00,
                'experience' => '8 years',
                'specialties' => ['Cultural Tours', 'Historical Sites', 'Adventure Tours'],
                'image' => 'https://image.pollinations.ai/prompt/professional%20tourist%20guide%20headshot%20Islamabad%20Pakistan%20modern%20business%20portrait%20400x400'
            ],
            [
                'id' => 3,
                'name' => 'Priya Patel',
                'language' => 'Hindi',
                'location' => 'Mumbai',
                'rating' => 4.7,
                'hourly_rate' => 48.00,
                'experience' => '9 years',
                'specialties' => ['Food Tours', 'Cultural Tours', 'Beach Tours'],
                'image' => 'https://image.pollinations.ai/prompt/professional%20tourist%20guide%20headshot%20Mumbai%20India%20modern%20business%20portrait%20400x400'
            ],
            [
                'id' => 4,
                'name' => 'Carlos Rodriguez',
                'language' => 'Spanish',
                'location' => 'Madrid',
                'rating' => 4.6,
                'hourly_rate' => 52.00,
                'experience' => '12 years',
                'specialties' => ['Historical Sites', 'Art Tours', 'Cultural Tours'],
                'image' => 'https://image.pollinations.ai/prompt/professional%20tourist%20guide%20headshot%20Madrid%20Spain%20modern%20business%20portrait%20400x400'
            ],
            [
                'id' => 5,
                'name' => 'Anita Kumar',
                'language' => 'Tamil',
                'location' => 'Chennai',
                'rating' => 4.5,
                'hourly_rate' => 47.00,
                'experience' => '7 years',
                'specialties' => ['Cultural Tours', 'Temple Tours', 'Beach Tours'],
                'image' => 'https://image.pollinations.ai/prompt/professional%20tourist%20guide%20headshot%20Chennai%20India%20modern%20business%20portrait%20400x400'
            ],
            [
                'id' => 6,
                'name' => 'John Smith',
                'language' => 'English',
                'location' => 'London',
                'rating' => 4.4,
                'hourly_rate' => 55.00,
                'experience' => '11 years',
                'specialties' => ['Historical Tours', 'Museum Tours', 'Cultural Tours'],
                'image' => 'https://image.pollinations.ai/prompt/professional%20tourist%20guide%20headshot%20London%20UK%20modern%20business%20portrait%20400x400'
            ],
            [
                'id' => 7,
                'name' => 'Emma Johnson',
                'language' => 'French',
                'location' => 'Paris',
                'rating' => 4.3,
                'hourly_rate' => 60.00,
                'experience' => '13 years',
                'specialties' => ['Art Tours', 'Historical Tours', 'Food Tours'],
                'image' => 'https://image.pollinations.ai/prompt/professional%20tourist%20guide%20headshot%20Paris%20France%20modern%20business%20portrait%20400x400'
            ],
            [
                'id' => 8,
                'name' => 'Michael Brown',
                'language' => 'German',
                'location' => 'Berlin',
                'rating' => 4.2,
                'hourly_rate' => 58.00,
                'experience' => '10 years',
                'specialties' => ['Historical Tours', 'Museum Tours', 'Nightlife Tours'],
                'image' => 'https://image.pollinations.ai/prompt/professional%20tourist%20guide%20headshot%20Berlin%20Germany%20modern%20business%20portrait%20400x400'
            ],
            [
                'id' => 9,
                'name' => 'Sophia Davis',
                'language' => 'Italian',
                'location' => 'Rome',
                'rating' => 4.1,
                'hourly_rate' => 62.00,
                'experience' => '14 years',
                'specialties' => ['Historical Tours', 'Art Tours', 'Food Tours'],
                'image' => 'https://image.pollinations.ai/prompt/professional%20tourist%20guide%20headshot%20Rome%20Italy%20modern%20business%20portrait%20400x400'
            ],
            [
                'id' => 10,
                'name' => 'James Wilson',
                'language' => 'Japanese',
                'location' => 'Tokyo',
                'rating' => 4.0,
                'hourly_rate' => 65.00,
                'experience' => '12 years',
                'specialties' => ['Cultural Tours', 'Temple Tours', 'Food Tours'],
                'image' => 'https://image.pollinations.ai/prompt/professional%20tourist%20guide%20headshot%20Tokyo%20Japan%20modern%20business%20portrait%20400x400'
            ]
        ];

        return view('tourist-guides.index', compact('touristGuides'));
    }

    public function show($id)
    {
        $guide = [
            'id' => $id,
            'name' => 'Maria Garcia',
            'language' => 'Spanish',
            'location' => 'Barcelona',
            'rating' => 4.9,
            'hourly_rate' => 50.00,
            'experience' => '10 years',
            'specialties' => ['Historical Sites', 'Cultural Tours', 'Food Tours'],
            'bio' => 'Maria is a passionate guide with over 10 years of experience in Barcelona. She specializes in historical sites, cultural tours, and food tours. Maria is known for her deep knowledge of the city and her ability to make history come alive.',
            'image' => 'https://image.pollinations.ai/prompt/professional%20tourist%20guide%20headshot%20Barcelona%20Spain%20modern%20business%20portrait%20600x600',
            'portfolio' => [
                [
                    'title' => 'Barcelona Historical Tour',
                    'description' => 'A comprehensive tour of Barcelona\'s most important historical sites.',
                    'image' => 'https://image.pollinations.ai/prompt/Barcelona%20historical%20sites%20tour%20modern%20professional%20photography%20800x600'
                ],
                [
                    'title' => 'Gothic Quarter Exploration',
                    'description' => 'Discover the charm of Barcelona\'s Gothic Quarter with this guided tour.',
                    'image' => 'https://image.pollinations.ai/prompt/Gothic%20Quarter%20Barcelona%20modern%20professional%20photography%20800x600'
                ],
                [
                    'title' => 'Food Tour of Barcelona',
                    'description' => 'Experience the best of Barcelona\'s culinary scene on this food tour.',
                    'image' => 'https://image.pollinations.ai/prompt/Barcelona%20food%20tour%20modern%20professional%20photography%20800x600'
                ]
            ],
            'reviews' => [
                [
                    'tourist' => 'John Doe',
                    'rating' => 5,
                    'comment' => 'Maria was an excellent guide. She knew so much about the city and made our tour very enjoyable.',
                    'date' => '2023-10-15'
                ],
                [
                    'tourist' => 'Sarah Johnson',
                    'rating' => 5,
                    'comment' => 'Maria was fantastic! She was knowledgeable, friendly, and made sure we saw all the important sights.',
                    'date' => '2023-09-22'
                ],
                [
                    'tourist' => 'Michael Brown',
                    'rating' => 4,
                    'comment' => 'Good guide, but a bit slow at times. Still, she provided a lot of useful information.',
                    'date' => '2023-08-10'
                ]
            ]
        ];

        return view('tourist-guides.show', compact('guide'));
    }
}