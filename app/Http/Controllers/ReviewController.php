<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function create(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'booking_id' => 'required|integer',
            'tourist_id' => 'required|integer',
            'guide_id' => 'required|integer',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string'
        ]);

        // In a real application, you would save the review to the database here
        // For this prototype, we'll just return a success response

        return response()->json([
            'success' => true,
            'message' => 'Review submitted successfully',
            'review' => [
                'id' => rand(1000, 9999),
                'booking_id' => $validatedData['booking_id'],
                'tourist_id' => $validatedData['tourist_id'],
                'guide_id' => $validatedData['guide_id'],
                'rating' => $validatedData['rating'],
                'comment' => $validatedData['comment'] ?? '',
                'date' => now()->toDateString()
            ]
        ]);
    }
}