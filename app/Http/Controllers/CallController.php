<?php

namespace App\Http\Controllers;

use App\Call;
use App\PostcodeArea;
use Illuminate\Http\Request;
use App\Http\Requests\PostCodeRequest;
use GuzzleHttp\Client;
use JustSteveKing\LaravelPostcodes\Service\PostcodeService;

class CallController extends Controller
{
    protected $postcodes;

    public function __construct(PostcodeService $service)
    {
        $this->postcodes = $service;
    }

    public function call(PostCodeRequest $request)
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
            Call::create([
                'postcode' => $validatedData['postcode'],
                'phone' => $validatedData['contactno'],
                'api_response' => $responseData, // Save the API response data here
            ]);
            return view('adds/hello')->with(['statusCode' => $statusCode, 'responseData' => json_decode($responseData)]);
        } catch (\Exception $e) {
            // Handle exceptions (e.g., network error) and provide appropriate feedback to the user
            return redirect()->back()->with('error', 'Error occurred while fetching postcode data');
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Call  $call
     * @return \Illuminate\Http\Response
     */
    public function show(Call $call)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Call  $call
     * @return \Illuminate\Http\Response
     */
    public function edit(Call $call)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Call  $call
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Call $call)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Call  $call
     * @return \Illuminate\Http\Response
     */
    public function destroy(Call $call)
    {
        //
    }
}
