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

        $destinations = Destination::where('name', 'LIKE', "%{$search}%")->get();

        return view('destinations.index',
            compact('destinations'));
    }
}
