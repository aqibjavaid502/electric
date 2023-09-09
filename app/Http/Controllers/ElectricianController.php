<?php

namespace App\Http\Controllers;

use App\Electrician;
use Illuminate\Http\Request;

class ElectricianController extends Controller
{
    public function get(){

        $electricians = Electrician::whereBetween('distance', [0.5, 1])
        ->orderBy('distance')
        ->take(1)
        ->union(
            Electrician::whereBetween('distance', [2, 4])
                ->orderByRaw('RAND()')
                ->take(1)
        )
        ->union(
            Electrician::whereBetween('distance', [4, 6])
                ->orderByRaw('RAND()')
                ->take(1)
        )
        ->get();
        
    
        return response()->json( $electricians);
    }
}
