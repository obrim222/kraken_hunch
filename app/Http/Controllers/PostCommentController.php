<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostCommentModel;

class PostCommentController extends Controller
{
    public function store(Request $request)
    {

<<<<<<< refs/remotes/origin/tom
<<<<<<< refs/remotes/origin/tom
        $request->validate([

            'blogComment' => 'required'

        ]);

        $blogComment = new PostCommentModel;

        $blogComment->comment = $request->blogComment;
=======
=======
>>>>>>> fix

        $blogComment = new PostCommentModel;

        $blogComment->body = $request->body;
<<<<<<< refs/remotes/origin/tom
>>>>>>> BlogPage/Post
=======
>>>>>>> fix

        $blogComment->save();

        if ($blogComment->save()) {
<<<<<<< refs/remotes/origin/tom
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
=======
>>>>>>> fix
            return redirect('home')->with('success', 'Saved in the DB');
        } else {
            return back()->with('error', 'Something wrong with the DB');
        }
    }
<<<<<<< refs/remotes/origin/tom
>>>>>>> BlogPage/Post
=======
>>>>>>> fix
}
