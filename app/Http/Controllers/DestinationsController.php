<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Description;

class DestinationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function show(Destination $destination)
    {
        return view('destinations.show',
            compact('destination'));
    }

    public function index()
    {
        $destinations = Destination::all(); //Om alle data op te halen.
        //Destination::find(id:1); Om een specifieke data op te halen.
        return view('destinations.index', compact('destinations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('destinations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validatie
        $request->validate([
            'name' => 'required|max:100',
            'description' => 'required'
        ]);
        //errors tonen
        //beveiliging
        //data terugschrijven in de form fields
        //INSERT INTO sql
        $description = new Description();
        $description->name = $request->input('name');
        $description->description = $request->input('description');
        $description->location = $request->input('location');
        $description->category_id = 1;

        $description->save();

        return redirect()->route('destinations');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DestinationsController $destinations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DestinationsController $destinations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DestinationsController $destinations)
    {
        //
    }
}
