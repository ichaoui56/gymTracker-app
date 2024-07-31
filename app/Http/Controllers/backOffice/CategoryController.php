<?php

namespace App\Http\Controllers\backOffice;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $category = Category::create([
            'name' => $request->input('name')
        ]);
        
        return redirect()->route('show.categories')->with('success', 'Category created successfully.');
    }

    public function deleteCategory($id)
    {
        $category = Category::findorFail($id);

        $category->delete();

        return redirect()->route('show.categories')->with('success', 'Category deleted successfully.');
    }

    public function updateCategory(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $benefit = Category::findOrFail($id);

        $benefit->name = $request->input('name');
        $benefit->save();

        return redirect()->route('show.categories')->with('success', 'Category updated successfully.');

    }
}
