<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function send(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'booking_id' => 'required|integer',
            'sender_id' => 'required|integer',
            'receiver_id' => 'required|integer',
            'message' => 'required|string'
        ]);

        // In a real application, you would save the message to the database here
        // For this prototype, we'll just return a success response

        return response()->json([
            'success' => true,
            'message' => 'Message sent successfully',
            'chat' => [
                'id' => rand(1000, 9999),
                'booking_id' => $validatedData['booking_id'],
                'sender_id' => $validatedData['sender_id'],
                'receiver_id' => $validatedData['receiver_id'],
                'message' => $validatedData['message'],
                'timestamp' => now()->toDateTimeString()
            ]
        ]);
    }

    public function show($booking_id)
    {
        // In a real application, you would fetch the chat messages from the database here
        // For this prototype, we'll return sample chat data

        $chats = [
            [
                'id' => 1,
                'booking_id' => $booking_id,
                'sender_id' => 1,
                'receiver_id' => 2,
                'message' => 'Hello! I\'m looking forward to our tour tomorrow.',
                'timestamp' => '2023-11-14 10:30:00'
            ],
            [
                'id' => 2,
                'booking_id' => $booking_id,
                'sender_id' => 2,
                'receiver_id' => 1,
                'message' => 'Hi there! I\'m excited too. Just confirming, what time should we meet?',
                'timestamp' => '2023-11-14 10:35:00'
            ],
            [
                'id' => 3,
                'booking_id' => $booking_id,
                'sender_id' => 1,
                'receiver_id' => 2,
                'message' => 'We can meet at the main square at 9:00 AM. Is that convenient for you?',
                'timestamp' => '2023-11-14 10:40:00'
            ],
            [
                'id' => 4,
                'booking_id' => $booking_id,
                'sender_id' => 2,
                'receiver_id' => 1,
                'message' => 'Yes, that works perfectly. I\'ll be there at 9:00 AM sharp!',
                'timestamp' => '2023-11-14 10:45:00'
            ],
            [
                'id' => 5,
                'booking_id' => $booking_id,
                'sender_id' => 1,
                'receiver_id' => 2,
                'message' => 'Great! I\'ll see you then. Have a wonderful time on your tour!',
                'timestamp' => '2023-11-14 10:50:00'
            ]
        ];

        return view('chats.show', compact('chats', 'booking_id'));
    }
}