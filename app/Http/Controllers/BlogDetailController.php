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

    }

    public function viewFavouriteBlogpost()
    {
    }




    public function favouriteBlogpost()

    {
    }




  
}
