<?php

namespace App\Http\Controllers;

use App\Models\ChauffeurBooking;
use App\Models\Chauffeur;
use Illuminate\Http\Request;

class ChauffeurBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chauffeurBooking = ChauffeurBooking::orderBy('id','desc')->get();

        return view('admin.bookings.chauffeur',compact('chauffeurBooking'));
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
        $data = ChauffeurBooking::create($request->all());

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $chauffeurBooking =  ChauffeurBooking::findOrFail($id);
        $chauffeur = Chauffeur::findOrFail($chauffeurBooking->chauffer_id);

        return view('admin.bookings.chauffeur_bk_details',compact('chauffeurBooking','chauffeur'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ChauffeurBooking $chauffeurBooking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ChauffeurBooking $chauffeurBooking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ChauffeurBooking $chauffeurBooking)
    {
        //
    }
}
