<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

        $stats = [
            'total_listings' => 128,
            'active_listings' => 95,
            'pending_approvals' => 12,
            'new_messages' => 47,
            'recent_users' => 32,
            'total_revenue' => '$45,230'
        ];

        $recentActivities = [
            ['activity' => 'New listing added', 'time' => '2 hours ago', 'icon' => 'plus-circle'],
            ['activity' => 'User profile updated', 'time' => '5 hours ago', 'icon' => 'user'],
            ['activity' => 'Payment processed', 'time' => '1 day ago', 'icon' => 'credit-card'],
            ['activity' => 'New message received', 'time' => '2 days ago', 'icon' => 'mail'],
            ['activity' => 'System update completed', 'time' => '3 days ago', 'icon' => 'refresh-cw']
        ];

        return view('admin.dashboard', compact('stats', 'recentActivities'));
    }

    public function listings()
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

        $listings = [
            ['id' => 1, 'title' => 'Beachfront Villa', 'location' => 'Maldives', 'category' => 'Luxury', 'status' => 'Active'],
            ['id' => 2, 'title' => 'Mountain Retreat', 'location' => 'Switzerland', 'category' => 'Adventure', 'status' => 'Active'],
            ['id' => 3, 'title' => 'City Apartment', 'location' => 'Tokyo', 'category' => 'Urban', 'status' => 'Pending'],
            ['id' => 4, 'title' => 'Desert Oasis', 'location' => 'Dubai', 'category' => 'Luxury', 'status' => 'Active'],
            ['id' => 5, 'title' => 'Forest Cabin', 'location' => 'Canada', 'category' => 'Nature', 'status' => 'Active'],
            ['id' => 6, 'title' => 'Historic Mansion', 'location' => 'Italy', 'category' => 'Heritage', 'status' => 'Pending'],
            ['id' => 7, 'title' => 'Beach House', 'location' => 'Bali', 'category' => 'Luxury', 'status' => 'Active'],
            ['id' => 8, 'title' => 'Ski Chalet', 'location' => 'Alps', 'category' => 'Winter', 'status' => 'Active'],
            ['id' => 9, 'title' => 'Island Resort', 'location' => 'Seychelles', 'category' => 'Luxury', 'status' => 'Active'],
            ['id' => 10, 'title' => 'Countryside Cottage', 'location' => 'England', 'category' => 'Rural', 'status' => 'Pending']
        ];

        return view('admin.listings', compact('listings'));
    }

    public function profile()
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

        $profile = [
            'name' => 'Alex Johnson',
            'role' => 'Tourism Administrator',
            'email' => 'alex.johnson@traveladmin.com',
            'phone' => '+1 (555) 123-4567',
            'location' => 'New York, USA',
            'avatar' => 'https://randomuser.me/api/portraits/men/32.jpg',
            'favorite_destinations' => 'Maldives, Switzerland, Japan',
            'travel_style' => 'Luxury & Adventure',
            'budget_range' => '$500 - $1,500 per trip',
            'bio' => 'Passionate about discovering new cultures and experiences. Always looking for the next adventure. Certified tourism professional with over 10 years of experience in the industry.',
            'recent_trips' => [
                [
                    'destination' => 'Maldives',
                    'dates' => 'May 15 - May 22, 2023',
                    'description' => 'Luxury beachfront villa with private pool and ocean views.'
                ],
                [
                    'destination' => 'Swiss Alps',
                    'dates' => 'December 10 - December 17, 2022',
                    'description' => 'Ski chalet with access to world-class slopes and après-ski activities.'
                ],
                [
                    'destination' => 'Tokyo',
                    'dates' => 'March 5 - March 12, 2022',
                    'description' => 'Modern city apartment with access to cultural attractions and nightlife.'
                ]
            ]
        ];

        return view('admin.profile', compact('profile'));
    }
}