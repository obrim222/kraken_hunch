<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogModel;
use App\Models\PostCommentModel;
use Laravel\Ui\Presets\React;


class BlogController extends Controller
{
    public function viewBlogpost()
    {


        return view('blogs');
    }

    public function createBlogPost()
    {


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


    public function deleteTip(BlogModel $post)
    {
        $this->authorize('delete', $post);

        $post->delete();

        return back();
    }

    public function store(Request $request)
    {
        // Validations

        $request->validate([

            'blog' => 'required',
            'coin_id' => 'required'

        ]);

        $blogPost = new BlogModel;

        $blogPost->blog = $request->blog;
        $blogPost->coin_id = $request->coin_id;

        $blogPost->save();

        if ($blogPost->save()) {
            return redirect('home')->with('success', 'Saved in the DB');
        } else {
            return back()->with('error', 'Something wrong with the DB');
        }

        auth()->attempt($request->only('email', 'password'));
    }
}
