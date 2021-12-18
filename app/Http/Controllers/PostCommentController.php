<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostCommentModel;
use Illuminate\Support\Facades\DB;
use App\Models\BlogModel;

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

        $blogs = BlogModel::join('users', 'blogs.user_id', '=', 'users.id')
        ->join('coin_data',  'coin_data.id', '=', 'blogs.coin_id')
        ->get(['blogs.*', 'users.first_name', 'users.last_name', 'coin_data.name']);
      
       
        $postComment = PostCommentModel::all();

        return view('blogsdetail')->with(['post' => $postComment,  'blogs' => $blogs]);
        //return view('blogs', ['blogs' => $postComment]);
    }

    public function delete($id)
    {
        $result = DB::delete('DELETE FROM blogs WHERE id = ?', [$id]);

        if ($result)
            return back()->with('success', 'Comment was deleted from the DB');
        else
            return back()->with('error', 'Error deleting comment');
    }

    public function blogArticle()
    {
        $postComment = PostCommentModel::all();

        return view('blogsdetail', ['blogcomments' => $postComment]);
    }


}
