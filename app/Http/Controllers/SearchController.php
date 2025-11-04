<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Destination;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->input('q');

        if (empty($search)) {

            return redirect()->back()->withErrors(['error' => 'Please enter a search term!']);
        }

        $destinations = Destination::where('name', 'LIKE', "%{$search}%")->get();
        $categories = Category::where('name', 'LIKE', "%{$search}%")->get();

        if ($destinations->isNotEmpty()) {

            return view('destinations.index',
                compact('destinations'));

        } elseif ($categories->isNotEmpty()) {

            return view('categories.index',
                compact('categories'));

        } else {

            return redirect()->back()->withErrors(['error' => 'No match found!']);
        }
    }
}
