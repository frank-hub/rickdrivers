<?php

namespace App\Http\Controllers;

use App\Models\CarBooking;
use App\Models\CarRental;
use Illuminate\Http\Request;


class CarBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carBooking = CarBooking::orderBy('id','desc')->get();

        return view('admin.bookings.cars',compact('carBooking'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = CarBooking::create($request->all());

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $carBooking =  CarBooking::findOrFail($id);
        $carDetails = CarRental::findOrFail($carBooking->car_id);
        return view('admin.bookings.car_book_details',compact('carBooking','carDetails'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CarBooking $carBooking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CarBooking $carBooking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CarBooking $carBooking)
    {
        //
    }
}
