<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hotels = Hotel::orderBy('id','desc')->get();
        return view('admin.hotels.lists',compact('hotels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.hotels.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate = ([
            'image' => 'required'
        ]);

        $file = $request->file('image');

        if ($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('image')->move(public_path('hotels'), $fileNameToStore);
        } else {
            $fileNameToStore = 'assets/img/cars/car1.png';
        }


        $hotel = new Hotel;
        $hotel->status = '0';
        $hotel->location = $request->location;
        $hotel->price = $request->price;
        $hotel->rooms = $request->rooms;
        $hotel->image = $fileNameToStore;
        $hotel->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $hotels = Hotel::orderBy('id','desc')->where('status','1')->get();
        return view('hotels.index',compact('hotels'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hotel $hotel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hotel $hotel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hotel $hotel)
    {
        //
    }

    public function details($id){
        $hotel = Hotel::findOrFail($id);
        return view('hotels.details',compact('hotel'));
    }

    public function status($id)
    {
        $carRental = Hotel::findOrFail($id);

        if($carRental->status == '0'){
            $carRental->status = 1;
            $carRental->save();
        }else if($carRental->status == '1')
        {
            $carRental->status = 0;
            $carRental->save();
        }

        return redirect()->back();
    }
}
