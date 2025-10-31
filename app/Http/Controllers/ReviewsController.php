<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

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
        //validatie
        $request->validate([
            'content' => 'required|max:1000',
            'rating' => 'required|integer|min:1|max:5'
        ]);

        //errors tonen
        //beveiliging
        //data terugschrijven in de form fields
        //INSERT INTO sql
        $review = new Review();
        $review->user_id = auth()->id();
        $review->destination_id = $request->input('destination_id');
        $review->content = $request->input('content');
        $review->rating = $request->input('rating');

        $review->save();

        return back();
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $reviews)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $reviews)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        $destination = $review->destination;
        $review->delete();

        return redirect()->route('destinations.show', $destination->id);
    }

}
