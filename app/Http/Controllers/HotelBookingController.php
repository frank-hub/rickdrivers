<?php

namespace App\Http\Controllers;

use App\Models\HotelBooking;
use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hotelBooking = HotelBooking::orderBy('id','desc')->get();

        return view('admin.bookings.hotels',compact('hotelBooking'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = HotelBooking::create($request->all());

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $hotelBooking =  HotelBooking::findOrFail($id);
        $hotelDetails = Hotel::findOrFail($hotelBooking->hotel_id);
        return view('admin.bookings.hotel_bk_details',compact('hotelBooking','hotelDetails'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HotelBooking $hotelBooking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HotelBooking $hotelBooking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HotelBooking $hotelBooking)
    {
        //
    }
}
