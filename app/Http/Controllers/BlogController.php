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



    public function __construct()
    {
        $this->middleware(['auth'])->only(['store', 'destroy']);
    }

    /*
    public function show()
    {
        $posts = BlogModel::all(); //fetch all blog posts from DB
        return $posts; //returns the fetched posts
    }
*/


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
