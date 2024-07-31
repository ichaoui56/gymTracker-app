<?php

namespace App\Http\Controllers\frontOffice;

use App\Models\Comments;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function fetchComments($blogId)
    {
        $comments = Comments::where('blog_id', $blogId)
            ->with('user')
            ->orderBy('created_at', 'desc')
            ->get();
            
        return response()->json($comments);
    }

    public function upload(Request $request)
    {
        $data = new Comments;

        $data->content = $request->content;
        $data->blog_id = $request->blogId;
        $user = Auth::user();
        $data->created_by = $user->id;
        $data->save();

        return response()->json(['message' => 'data uploaded successfully']);
    }
}
