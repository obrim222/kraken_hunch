<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogModel;
use App\Models\PostCommentModel;
use Laravel\Ui\Presets\React;


class BlogDetailController extends Controller
{

 
    public function index()
    {

        $blogs = BlogModel::join('users', 'blogs.user_id', '=', 'users.id')
        ->join('coin_data',  'coin_data.id', '=', 'blogs.coin_id')
        ->get(['blogs.*', 'users.first_name', 'users.last_name', 'coin_data.name']);
      
       return view('blogsdetail', ['blogsdetail' => $blogs]);

    }


    public function show()
    {
        return view('post');
    }


    public function __construct()
    {
        $this->middleware(['auth'])->only(['store', 'destroy']);
    }


    public function addComment(Request $request)
    {


        $this->validate($request, [
            'comment' => 'required',
        ]);


        $blogComment = new PostCommentModel;

        $blogComment->comment = $request->comment;

        $blogComment->save();

        if ($blogComment->save()) {
            return redirect('home')->with('success', 'Saved in the DB');
        } else {
            return back()->with('error', 'Something wrong with the DB');
        }
    }



    public function viewFavouriteBlogpost()
    {
    }




    public function favouriteBlogpost()

    {
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
