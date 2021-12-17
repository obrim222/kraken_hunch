<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostCommentModel;
use Illuminate\Support\Facades\DB;

class PostCommentController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([

            'blogComment' => 'required'

        ]);

        $blogComment = new PostCommentModel;

        $blogComment->comment = $request->blogComment;

        $blogComment = new PostCommentModel;

        $blogComment->comment = $request->blogComment;


        $blogComment->save();

        if ($blogComment->save()) {
            return back()->with('success', 'Saved in the Database');
        }
        /*
        if ($blogComment->save()) {
            return redirect('blogs')->with('success', 'Saved in the Database');
        } else {
            return back()->with('error', 'Error');
        }
        */
    }


    public function index()
    {
        $postComment = PostCommentModel::all();

        return view('blogs', ['blogs' => $postComment]);
    }

    public function delete($id)
    {
        $result = DB::delete('DELETE FROM blogs WHERE id = ?', [$id]);

        if ($result)
            return back()->with('success', 'Comment was deleted from the DB');
        else
            return back()->with('error', 'Error deleting comment');
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
}
