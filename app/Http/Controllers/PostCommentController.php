<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostCommentModel;

class PostCommentController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([

            'blogComment' => 'required'

        ]);

        $blogComment = new PostCommentModel;

        $blogComment->comment = $request->blogComment;

        $blogComment->save();

        if ($blogComment->save()) {
            return redirect('blogs')->with('success', 'Saved in the Database');
        } else {
            return back()->with('error', 'Error');
        }
    }


    public function index()
    {
        $postComment = PostCommentModel::all();

        return view('blogs', ['blogs' => $postComment]);
    }
}
