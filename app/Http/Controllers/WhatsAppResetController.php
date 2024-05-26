<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use GuzzleHttp\Client;

class WhatsAppResetController extends Controller
{
    public function showWhatsAppForm()
    {
        return view('auth.whatsapp-form');
    }

    public function sendWhatsAppResetLink(Request $request)
    {
        $validatedData = $request->validate([
            'phone_number' => 'required|numeric',
        ]);

        $phoneNumber = $request->input('phone_number');
        // Generate a unique token for password reset
        $token = Str::random(64); // You can use a more secure method to generate tokens

        // Save the token and phone number in a database table for reference

        // Send WhatsApp message using WhatsApp API
        $client = new Client();
        $apiUrl = 'https://api.whatsapp.com/send'; // Replace with the actual WhatsApp API endpoint
        $message = "Reset your password using this link: " . route('password.reset', ['token' => $token]);
        $phoneNumber = '+6285159094233'; // Replace with the recipient's phone number
        $apiToken = 'K4YC8R_e6J8TWN57#6UA'; // Replace with your WhatsApp API authentication token
        $requestParams = [
            'headers' => [
                'Authorization' => 'Bearer ' . $apiToken,
            ],
            'form_params' => [
                'phone' => $phoneNumber,
                'text' => $message,
            ],
        ];

        try {
            $response = $client->post($apiUrl, $requestParams);
        
            // Redirect back with success message
            return redirect()->route('whatsapp-form')->with('status', 'Password reset link sent via WhatsApp.');
        } catch (\Exception $e) {
            // Handle error, redirect back with error message
            return redirect()->route('whatsapp-form')->with('error', 'Failed to send WhatsApp message.');
        }
    }
}
