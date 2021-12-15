<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogModel;

class BlogController extends Controller
{
    public function viewBlogpost()
    {

        $blogs = BlogModel::all();
        return view('blogs', ['blogs' => $blogs]);
    }


    //test

        return view('post');
    }


    /*
    public function __construct()
    {
        $this->middleware(['auth'])->only(['store', 'destroy']);
    }
*/
    /*
    public function show()
    {
        $posts = BlogModel::all(); //fetch all blog posts from DB
        return $posts; //returns the fetched posts
    }
*/
    public function addComment(Request $request)
    {

        $this->validate($request, [
            'comment' => 'required',
        ]);


        $blogComment = new PostCommentModel;

        $blogComment->comment = $request->comment;



        $blogComment->save();

        if ($blogComment->save()) {
            return redirect('home')->with('success', 'User registered in the Database');
        } else {
            return back()->with('error', 'Error registering');
        }
    }


    public function addBlogpost()
    {
    }


    public function favouriteBlogpost()
    {
    }



    public function viewFavouriteBlogpost()
    {
    }


    public function deleteTip()
    {
    }
}
