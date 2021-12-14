<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostCommentModel;

class PostCommentController extends Controller
{
    public function store(Request $request)
    {

<<<<<<< refs/remotes/origin/tom
        $request->validate([

            'blogComment' => 'required'

        ]);

        $blogComment = new PostCommentModel;

        $blogComment->comment = $request->blogComment;
=======

        $blogComment = new PostCommentModel;

        $blogComment->body = $request->body;
>>>>>>> BlogPage/Post

        $blogComment->save();

        if ($blogComment->save()) {
<<<<<<< refs/remotes/origin/tom
            return redirect('blogs')->with('success', 'Saved in the Database');
        } else {
            return back()->with('error', 'Error');
        }
    }

    public function show(PostCommentModel $post)
    {
        return view('blogs', [
            'blogs' => $post
        ]);
    }
=======
            return redirect('home')->with('success', 'Saved in the DB');
        } else {
            return back()->with('error', 'Something wrong with the DB');
        }
    }
>>>>>>> BlogPage/Post
}
