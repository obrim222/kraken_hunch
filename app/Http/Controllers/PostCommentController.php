<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostCommentModel;

class PostCommentController extends Controller
{
    public function store(Request $request)
    {


        $blogComment = new PostCommentModel;

        $blogComment->body = $request->body;

        $blogComment->save();

        if ($blogComment->save()) {
            return redirect('home')->with('success', 'Saved in the DB');
        } else {
            return back()->with('error', 'Something wrong with the DB');
        }
    }
}
