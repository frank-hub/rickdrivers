<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarRental;
use App\Models\Chauffeur;
use App\Models\Hotel;

class WelcomeController extends Controller
{
    public function welcome(){
        $cars = CarRental::orderBy('id','desc')->where('status','1')->limit(8)->get();
        $chauffeurs = Chauffeur::orderBy('id','desc')->where('availability','1')->limit(8)->get();
        $hotels = Hotel::orderBy('id','desc')->where('status','1')->limit(8)->get();
        return view('welcome',compact('cars','chauffeurs','hotels'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $cars = CarRental::where('make', 'LIKE', "%{$query}%")->get();
        $chauffeurs = Chauffeur::orderBy('id','desc')->where('availability','1')->limit(8)->get();
        $hotels = Hotel::orderBy('id','desc')->where('status','1')->limit(8)->get();
        return view('welcome',compact('cars','chauffeurs','hotels'));    }
}
