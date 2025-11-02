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
        $destinations = $request->user()?->isAdmin()
            ? Destination::orderBy('name', 'asc')->get()
            : Destination::active()->orderBy('name', 'asc')->get();

        return view('destinations.index',
            compact('destinations'));
    }

    public function show(Destination $destination)
    {
        if (!$destination->is_active) {
            abort(404);
        }

        $destination->load(['reviews.user', 'category']);

        return view('destinations.show',
            compact('destination'));
    }

    public function create()
    {
        $categories = Category::all();
        $reviews = Review::all();

        return view('destinations.create',
            compact('categories', 'reviews'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'description' => 'required',
            'coordinate' => 'required',
        ]);

        $destination = new Destination();
        $destination->name = $request->input('name');
        $destination->description = $request->input('description');
        $destination->coordinate = $request->input('coordinate');
        $destination->category_id = 1;
        $destination->is_active = true;

        $destination->save();

        return redirect()->route('destinations');
    }

    public function edit(Destination $destination)
    {
        $categories = Category::all();
        return view('destinations.edit',
            compact('destination', 'categories'));
    }

    public function update(Request $request, Destination $destination, Review $review)
    {
        $request->validate([
            'name' => 'required|max:100',
            'description' => 'required',
            'coordinate' => 'required',
            'category_id' => 'required|exists:categories,id'
        ]);

        $destination->name = $request->input('name');
        $destination->description = $request->input('description');
        $destination->coordinate = $request->input('coordinate');
        $destination->category_id = 1;

        $destination->save();

        return redirect()->route('destinations');
    }

    public function toggleStatus(Destination $destination)
    {
        $destination->is_active = !$destination->is_active;

        $destination->save();

        return redirect()->route('destinations');
    }

}
