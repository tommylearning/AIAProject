<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

class DasboardController extends Controller
{
    public function showDashboard()
    {
        $response = Http::get('http://www.mocky.io/v2/5d73bf3d3300003733081869');
        $contactDetails = $response->json();
        return view('dashboard',compact('contactDetails'));
    }
}
