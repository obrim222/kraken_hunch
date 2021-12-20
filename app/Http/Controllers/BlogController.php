<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogModel;
use App\Models\PostCommentModel;
use Laravel\Ui\Presets\React;


class BlogController extends Controller
{

 
    public function index()
    {

        $blogs = BlogModel::join('users', 'blogs.user_id', '=', 'users.id')
        ->join('coin_data',  'coin_data.id', '=', 'blogs.coin_id')
        ->get(['blogs.*', 'users.first_name', 'users.last_name', 'coin_data.name' ,'blogs.id']);
      
       return view('blogs', ['blogs' => $blogs]);

    }


    public function show()
    {
        return view('post');
    }


    public function __construct()
    {
        $this->middleware(['auth'])->only(['store', 'destroy']);
    }


}
