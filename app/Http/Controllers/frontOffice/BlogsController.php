<?php

namespace App\Http\Controllers\frontOffice;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BlogsController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'picture' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'title' => 'required',
            'category' => 'required|integer',
            'quote' => 'required|integer',
            'description' => 'required',
        ]);

        $picturePath = null;
        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $filename = time() . '_' . $file->getClientOriginalName();
            $destinationPath = 'assets/images/blogPicture';
            $file->move(public_path($destinationPath), $filename);
            $picturePath = $destinationPath . '/' . $filename;
        }

        $userId = Auth::id();

        $blog = Blog::create([
            'picture' => $picturePath,
            'title' => $request->input('title'),
            'category_id' => $request->input('category'),
            'coach_id' => $userId,
            'quote_id' => $request->input('quote'),
            'description' => $request->input('description'),
        ]);

        if ($blog) {
            return redirect('/')->with('success', 'Class created successfully.');
        }
    }

    public function deleteBlog($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect('/')->with('success', 'Class created successfully.');

    }
}
