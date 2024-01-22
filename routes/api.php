<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/generate-api-token', function (Request $request) {
    // Hardcoded user data (for testing only)
    $user = [
        'id' => 1,
        'email' => 'test@example.com',
        // Add other user attributes as needed
    ];

    // Simulate token generation (replace with your actual token generation logic)
    $token = Str::random(60); // Generate a random string as a token

    return response()->json(['token' => $token]);
});

// Corrected placement of the get-messages route
Route::get('/get-messages', function () {
    // Retrieve all messages from the 'messages' table
    $messages = DB::table('messages')->get();

    // Return the messages in JSON format
    return response()->json(['messages' => $messages], 200);
});
