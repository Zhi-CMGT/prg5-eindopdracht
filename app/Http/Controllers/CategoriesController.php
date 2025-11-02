<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Destination;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('name', 'asc')->get();

        return view('categories.index',
            compact('categories'));
    }

    public function show(Category $category)
    {
        $category->load(['destinations' => function ($query) {
            $query->active();
        }]);

        return view('categories.show',
            compact('category'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request, Destination $destination)
    {
        $request->validate([
            'name' => 'required|max:100',
            'description' => 'required'
        ]);

        $category = new Category();
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->destination_id = 1;

        $category->save();

        return redirect()->route('categories');
    }

    public function edit(Category $category)
    {
        return view('categories.edit',
            compact('category'));
    }

    public function update(Request $request, Category $category, Destination $destination)
    {
        $request->validate([
            'name' => 'required|max:100',
            'description' => 'required'
        ]);

        $category->name = $request->input('name');
        $category->description = $request->input('description');

        $category->save();

        return redirect()->route('categories');
    }

}
