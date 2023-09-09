<?php

namespace App\Http\Controllers;

use App\City;
use App\Post;
use App\County;
use App\State;
use App\Town;
use Illuminate\Http\Request;
use App\BusinessCategory;
use Illuminate\Support\Facades\DB;

class AddsController extends Controller
{
    public function index()
    {

        return view('adds/index'); // aqib Pass the $posts variable to the view
    }
    public function indexhello()
    {

        return view('adds/hello'); // Pass the $posts variable to the view
    }
}
