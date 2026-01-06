<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function create(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'guide_id' => 'required|integer',
            'tourist_id' => 'required|integer',
            'date' => 'required|date',
            'hours' => 'required|integer|min:1',
            'amount' => 'required|numeric|min:0'
        ]);

        // In a real application, you would save the booking to the database here
        // For this prototype, we'll just return a success response

        return response()->json([
            'success' => true,
            'message' => 'Booking created successfully',
            'booking' => [
                'id' => rand(1000, 9999),
                'guide_id' => $validatedData['guide_id'],
                'tourist_id' => $validatedData['tourist_id'],
                'date' => $validatedData['date'],
                'hours' => $validatedData['hours'],
                'amount' => $validatedData['amount'],
                'status' => 'Confirmed'
            ]
        ]);
    }

    public function cancel(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'booking_id' => 'required|integer'
        ]);

        // In a real application, you would update the booking status in the database here
        // For this prototype, we'll just return a success response

        return response()->json([
            'success' => true,
            'message' => 'Booking cancelled successfully',
            'booking_id' => $validatedData['booking_id']
        ]);
    }
}