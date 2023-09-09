<?php

namespace App\Http\Controllers;

use App\Electrician;
use App\Http\Requests\PostCodeRequest;
use App\PostcodeArea;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use JustSteveKing\LaravelPostcodes\Service\PostcodeService;

class PostcodeController extends Controller
{
    protected $postcodes;

    public function __construct(PostcodeService $service)
    {
        $this->postcodes = $service;
    }

    public function checkAvailability(PostCodeRequest $request)
    {
        $validatedData = $request->validated();
        $url = 'https://api.postcodes.io/postcodes/' . $validatedData['postcode'];
        
    
        $client = new Client([
            'verify' => 'C:\xampp\apache\bin\curl-ca-bundle.crt', // Replace with the correct path
        ]);
    
        try {
             $response = $client->get($url);
            // Process the response data as needed
            $statusCode = $response->getStatusCode();
            $responseData = $response->getBody()->getContents();
            // Save the response data in the 'api_response' field
           PostcodeArea::create([
                'postcode' => $validatedData['postcode'],
                'contactno' => $validatedData['contactno'],
                'api_response' => $responseData, // Save the API response data here
            ]);


            return view('adds/hello')->with(['statusCode' => $statusCode, 'responseData' => json_decode($responseData)]);
        } catch (\Exception $e) {
            // Handle exceptions (e.g., network error) and provide appropriate feedback to the user
            return redirect()->back()->with('error', 'Error occurred while fetching postcode data');
        }
    }
}
