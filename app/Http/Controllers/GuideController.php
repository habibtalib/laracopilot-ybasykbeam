<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuideController extends Controller
{
    public function index()
    {
        $guides = [
            [
                'name' => 'Alex Johnson',
                'specialty' => 'Beach & Island Hopping',
                'rating' => 5,
                'reviews' => 42,
                'price' => 120,
                'bio' => 'Experienced beach guide with over 10 years of experience in tropical destinations. Specializes in island hopping and water sports.',
                'image' => 'https://image.pollinations.ai/prompt/a%20professional%20tour%20guide%20standing%20on%20a%20beach%20with%20a%20smile/400/500'
            ],
            [
                'name' => 'Maria Rodriguez',
                'specialty' => 'Cultural & Historical Tours',
                'rating' => 4,
                'reviews' => 38,
                'price' => 150,
                'bio' => 'Cultural expert with deep knowledge of historical sites and local traditions. Perfect for history buffs and culture enthusiasts.',
                'image' => 'https://image.pollinations.ai/prompt/a%20professional%20tour%20guide%20standing%20in%20front%20of%20an%20ancient%20temple/400/500'
            ],
            [
                'name' => 'David Kim',
                'specialty' => 'Mountain & Hiking Tours',
                'rating' => 5,
                'reviews' => 56,
                'price' => 180,
                'bio' => 'Certified mountain guide with expertise in various hiking trails and adventure sports. Great for nature lovers and adrenaline junkies.',
                'image' => 'https://image.pollinations.ai/prompt/a%20professional%20tour%20guide%20standing%20on%20top%20of%20a%20mountain%20with%20a%20hiking%20backpack/400/500'
            ],
            [
                'name' => 'Priya Patel',
                'specialty' => 'City & Urban Exploration',
                'rating' => 4,
                'reviews' => 31,
                'price' => 130,
                'bio' => 'Urban explorer with extensive knowledge of city history, architecture, and hidden gems. Ideal for first-time visitors to major cities.',
                'image' => 'https://image.pollinations.ai/prompt/a%20professional%20tour%20guide%20standing%20in%20front%20of%20a%20modern%20city%20building/400/500'
            ],
            [
                'name' => 'James Wilson',
                'specialty' => 'Food & Culinary Tours',
                'rating' => 5,
                'reviews' => 63,
                'price' => 110,
                'bio' => 'Gourmet guide specializing in food tours and culinary experiences. Perfect for foodies and those looking to explore local cuisine.',
                'image' => 'https://image.pollinations.ai/prompt/a%20professional%20tour%20guide%20holding%20a%20plate%20of%20local%20cuisine/400/500'
            ],
            [
                'name' => 'Elena Martinez',
                'specialty' => 'Wildlife & Nature Tours',
                'rating' => 4,
                'reviews' => 28,
                'price' => 160,
                'bio' => 'Wildlife enthusiast with expertise in nature reserves and wildlife viewing. Great for animal lovers and nature photographers.',
                'image' => 'https://image.pollinations.ai/prompt/a%20professional%20tour%20guide%20standing%20in%20front%20of%20a%20group%20of%20animals/400/500'
            ]
        ];

        return view('guides.index', compact('guides'));
    }
}