<?php

namespace App\Http\Controllers;
use App\Models\Chauffeur;
use App\Models\CarRental;
use App\Models\User;
use App\Models\CarBooking;
use App\Models\ChauffeurBooking;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $chauffeur_count = Chauffeur::all()->count();
        $car_count = CarRental::all()->count();
        $chau_book_count = CarBooking::all()->count();
        $car_book_count = ChauffeurBooking::all()->count();
        $user_count = User::all()->count();
        $chauf_10 = ChauffeurBooking::orderBy('id','desc')->limit('10')->get();

        return view('admin.index',compact('chauffeur_count','car_count','user_count','car_book_count','chau_book_count','chauf_10'));
    }
}
