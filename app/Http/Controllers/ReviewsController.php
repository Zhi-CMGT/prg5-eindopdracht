<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Review;
use App\Rules\ReviewCooldown;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function store(Request $request, Destination $destination)
    {
        $request->validate([
            'content' => ['required', new ReviewCooldown()],
//            'content' => 'required',
            'rating' => 'required|integer|min:1|max:5'
        ]);

        $review = new Review();
        $review->user_id = auth()->id();
        $review->destination_id = $destination->id;
        $review->content = $request->input('content');
        $review->rating = $request->input('rating');

        $review->save();

        return back();
    }

    public function destroy(Review $review)
    {
        $destination = $review->destination;
        $review->delete();

        return redirect()->route('destinations.show', $destination->id);
    }

}
