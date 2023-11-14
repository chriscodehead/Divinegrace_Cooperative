<?php

// Twilio credentials
$accountSid = 'ACf6d4eb883085395e5dfbc6fbffe62671';
$authToken = '816520a597198b29094fc28b93bcbbef';
$twilioNumber = '+16016204309';

// Recipient's phone number
$recipientNumber = '+2348035249716'; // replace with the actual phone number

// Generate a random verification code
$verificationCode = rand(1000, 9999);

// Your verification message
$message = "Your verification code is: $verificationCode";

// Twilio API URL
$twilioApiUrl = 'https://api.twilio.com/2010-04-01/Accounts/' . $accountSid . '/Messages.json';

// Twilio API request headers
$headers = [
 'Authorization: Basic ' . base64_encode("$accountSid:$authToken"),
 'Content-Type: application/x-www-form-urlencoded',
];

// Twilio API request data
$data = [
 'To' => $recipientNumber,
 'From' => $twilioNumber,
 'Body' => $message,
];

// Initialize cURL session
$ch = curl_init($twilioApiUrl);

// Set cURL options
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

// Execute cURL session and get the response
$response = curl_exec($ch);

// Close cURL session
curl_close($ch);

// Decode the JSON response
$responseData = json_decode($response, true);

// Check if the message was sent successfully
if (isset($responseData['sid'])) {
 echo "Verification code sent successfully to $recipientNumber";
} else {
 echo "Error sending verification code: " . $responseData['message'];
}
