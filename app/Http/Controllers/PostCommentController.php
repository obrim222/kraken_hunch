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
<<<<<<< refs/remotes/origin/tom
=======
>>>>>>> BlogComment
        $request->validate([

            'blogComment' => 'required'

        ]);
<<<<<<< refs/remotes/origin/tom

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
=======

        $blogComment = new PostCommentModel;

        $blogComment->comment = $request->blogComment;
>>>>>>> BlogComment

        $blogComment->save();

        if ($blogComment->save()) {
<<<<<<< refs/remotes/origin/tom
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
=======
            return redirect('blogs')->with('success', 'Saved in the Database');
>>>>>>> BlogComment
        } else {
            return back()->with('error', 'Error');
        }
    }
<<<<<<< refs/remotes/origin/tom
<<<<<<< refs/remotes/origin/tom
>>>>>>> BlogPage/Post
=======
>>>>>>> fix
=======

    public function show(PostCommentModel $post)
    {
        return view('blogs', [
            'blogs' => $post
        ]);
    }
>>>>>>> BlogComment
}
