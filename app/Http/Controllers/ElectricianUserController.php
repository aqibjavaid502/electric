<?php

namespace App\Http\Controllers;

use App\User;
use App\Electrician;
use App\ElectricianUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ElectricianUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $electrican_users = ElectricianUser::all();
    
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
    // Validate the request data as needed
    $request->validate([
        'user_id' => 'required|exists:users,id',
        'electrician_id' => 'required|exists:electricians,id',
        'count' => 'required|integer',
    ]);

    // Create a new user-electrician relationship with count value
    $user = User::find($request->input('user_id'));
    $electrician = Electrician::find($request->input('electrician_id'));
    
    // Attach the electrician to the user with the count value
    $user->electricians()->attach($electrician, ['count' => $request->input('count')]);

    // Redirect or return a response as needed
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
