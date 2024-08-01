<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Middleware\IsAdmin;
use App\Models\Categories;
use RealRashid\SweetAlert\Facades\Alert;

class CategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', IsAdmin::class]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categories::all();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $categories = new Categories;
        $categories->name = $request->input('name');

        // For Image
        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $name = rand(1000, 9999) . '_' . $img->getClientOriginalName();
            $img->move(public_path('/images/categories'), $name);
            $categories->image = $name;
        }
        $categories->save();

        Alert::success('Success', 'Category created successfully.');
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categories $categories)
    {
        return view('admin.categories.show', compact('categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categories $categories)
    {
        return view('admin.categories.edit', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categories $categories)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $categories->name = $request->input('name');

        // Handle image upload
        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $name = rand(1000, 9999) . '_' . $img->getClientOriginalName();
            $img->move(public_path('/images/categories'), $name);
            $categories->image = $name;
        }

        $categories->save();

        Alert::success('Success', 'Category updated successfully.');
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categories $categories)
    {
        $categories->delete();
        Alert::success('Success', 'Category deleted successfully.');
        return redirect()->route('categories.index');
    }
}
