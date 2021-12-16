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
            return back()->with('success', 'Saved in the Database');
        }
        /*
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
        */
    }
<<<<<<< refs/remotes/origin/tom
<<<<<<< refs/remotes/origin/tom
>>>>>>> BlogPage/Post
=======
>>>>>>> fix
=======


    public function index()
    {
        $postComment = PostCommentModel::all();

        return view('blogs', ['blogs' => $postComment]);
    }
<<<<<<< refs/remotes/origin/tom
>>>>>>> BlogComment
=======

    public function delete(PostCommentModel $post)
    {


        $post->delete();

        return back();
    }

    public function blogArticleAda()
    {
        $postComment = PostCommentModel::all();

        return view('blogArticleAda', ['blogs' => $postComment]);
    }


    public function blogArticleBtc()
    {
        $postComment = PostCommentModel::all();

        return view('blogArticleBtc', ['blogs' => $postComment]);
    }

    public function blogArticleEth()
    {
        $postComment = PostCommentModel::all();

        return view('blogArticleEth', ['blogs' => $postComment]);
    }

    public function blogArticleSol()
    {
        $postComment = PostCommentModel::all();

        return view('blogArticleSol', ['blogs' => $postComment]);
    }
>>>>>>> Login Page + Blog Pages
}
