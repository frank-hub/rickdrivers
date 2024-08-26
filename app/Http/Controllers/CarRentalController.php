<?php

namespace App\Http\Controllers;

use App\Models\CarRental;
use Illuminate\Http\Request;

class CarRentalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = CarRental::orderBy('id','desc')->where('status','1')->get();
        return view('car_listing.index',compact('cars'));
    }

    public function details($id){
        $car = CarRental::findOrFail($id);
        return view('car_listing.details',compact('car'));
    }


    public function lists()
    {
        $cars = CarRental::orderBy('id','desc')->get();
        return view('admin.cars.lists',compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.cars.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate = ([
            'image_name' => 'required'
        ]);

        $file = $request->file('image_name');

        if ($request->hasFile('image_name')) {
            $filenameWithExt = $request->file('image_name')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image_name')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('image_name')->move(public_path('cars'), $fileNameToStore);
        } else {
            $fileNameToStore = 'assets/img/cars/car1.png';
        }


        $cars = new CarRental;
        $cars->status = '0';
        $cars->plate = $request->plate;
        $cars->transmission = $request->transmission;
        $cars->displacement = $request->displacement;
        $cars->make = $request->make;
        $cars->model = $request->model;
        $cars->year = $request->year;
        $cars->sitter = $request->sitter;
        $cars->location = $request->location;
        $cars->image_name = $fileNameToStore;
        $cars->exp_price = $request->expected_price;
        $cars->rental_price = $request->expected_price + 1500;
        $cars->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $car = CarRental::findOrFail($id);

        return view('admin.cars.show',compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CarRental $carRental)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CarRental $carRental)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CarRental $carRental)
    {
        //
    }


    public function status($id)
    {
        $carRental = CarRental::findOrFail($id);

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
