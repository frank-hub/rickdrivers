<?php

namespace App\Http\Controllers;

use App\Models\Chauffeur;
use Illuminate\Http\Request;

class ChauffeurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chauffeurs = Chauffeur::orderBy('id','desc')->where('availability','1')->get();
        return view('chauffeurs.index',compact('chauffeurs'));
    }

    public function details($id){
        $chauffeur = Chauffeur::findOrFail($id);
        return view('chauffeurs.details',compact('chauffeur'));
    }

    public function list(){

        $chauffeurs = Chauffeur::orderBy('id','desc')->get();

        return view('admin.chauffeur.lists',compact('chauffeurs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.chauffeur.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate = ([
            'passport' => 'required',
            'license' => 'required'
        ]);

        $file = $request->file('passport');

        if ($request->hasFile('passport')) {
            $filenameWithExt = $request->file('passport')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('passport')->getClientOriginalExtension();
            $passportToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('passport')->move(public_path('passport'), $passportToStore);
        } else {
            $passportToStore = 'assets/img/cars/car1.png';
        }

        if ($request->hasFile('license')) {
            $filenameWithExt = $request->file('license')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('license')->getClientOriginalExtension();
            $licenseToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('license')->move(public_path('license'), $licenseToStore);
        } else {
            $licenseToStore = 'assets/img/cars/car1.png';
        }


        $chauffeur = new Chauffeur;

        $chauffeur->name = $request->name;
        $chauffeur->phone = $request->phone;
        $chauffeur->license_no = $request->license_no;
        $chauffeur->identification = $request->identification;
        $chauffeur->price = $request->price;
        $chauffeur->location = $request->location;
        $chauffeur->passport = $passportToStore;
        $chauffeur->license = $licenseToStore;
        $chauffeur->availability = '0';

        $chauffeur->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $chauffeur = Chauffeur::findOrFail($id);
        return view('admin.chauffeur.show', compact('chauffeur'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chauffeur $chauffeur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chauffeur $chauffeur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chauffeur $chauffeur)
    {
        //
    }

    public function availability($id)
    {
        $chauffeur = Chauffeur::findOrFail($id);

        if($chauffeur->availability == '0'){
            $chauffeur->availability = 1;
            $chauffeur->save();
        }else if($chauffeur->availability == '1')
        {
            $chauffeur->availability = 0;
            $chauffeur->save();
        }

        return redirect()->back();
    }
}
