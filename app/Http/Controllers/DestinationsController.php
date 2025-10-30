<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Destination;
use App\Models\Review;
use Illuminate\Http\Request;

class DestinationsController extends Controller
{

    public function index(Request $request)
    {
        if ($request->user() && $request->user()->isAdmin()) {
            $destinations = Destination::all();

        } else {
            $destinations = Destination::active()->get();
        }

        return view('destinations.index',
            compact('destinations'));
    }

    /**
     * Display a listing of the resource.
     */
    public function show(Destination $destination)
    {
        if (!$destination->is_active) {
            abort(404);
        }

        $destination->load(['reviews', 'category']);

        return view('destinations.show',
            compact('destination'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $reviews = Review::all();

        return view('destinations.create',
            compact('categories', 'reviews'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validatie
        $request->validate([
            'name' => 'required|max:100',
            'description' => 'required',
            'coordinate' => 'required',
        ]);
        //errors tonen
        //beveiliging
        //data terugschrijven in de form fields
        //INSERT INTO sql
        $destination = new Destination();
        $destination->name = $request->input('name');
        $destination->description = $request->input('description');
        $destination->coordinate = $request->input('coordinate');
        $destination->category_id = $request->input('category_id');
        $destination->review_id = $request->input('review_id');

        $destination->save();

        return redirect()->route('destinations');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Destination $destination)
    {
        $categories = Category::all();
        return view('destinations.edit',
            compact('destination', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Destination $destination)
    {
        $request->validate([
            'name' => 'required|max:100',
            'description' => 'required',
            'coordinate' => 'required',
        ]);

        $destination->name = $request->input('name');
        $destination->description = $request->input('description');
        $destination->coordinate = $request->input('coordinate');
        $destination->category_id = $request->input('category_id');
        $destination->review_id = $request->input('review_id');

        $destination->save();

        return redirect('destinations');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Destination $destination)
    {

    }

    public function toggleStatus(Destination $destination)
    {
        $destination->is_active = !$destination->is_active;

        $destination->save();

        return redirect()->route('destinations');
    }

}
