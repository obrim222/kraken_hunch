<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\BlogModel;
use App\Models\PostCommentModel;
use Laravel\Ui\Presets\React;
use Illuminate\Support\Facades\Auth;

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
        $id = Auth::id();
        $blogComment = new PostCommentModel;
        $test = $request->oldblogComment;
      
        $blogComment->comment =  $test . 'Posted by user ' . $id . ': ' . $request->blogComment . ' '  ;
        $blogComment->id = $request->id;
 
        try { 
            DB::table('blogs')
            ->where('id',   $blogComment->id)
            ->update(['comment' =>  $blogComment->comment]);
            echo "Your post was successfuly added!"; 

            $blogs = BlogModel::join('users', 'blogs.user_id', '=', 'users.id')
            ->join('coin_data',  'coin_data.id', '=', 'blogs.coin_id')
            ->get(['blogs.*', 'users.first_name', 'users.last_name', 'coin_data.name']);

            return view('blogsdetail', ['blogsdetail' => $blogs]);

          } catch(\Illuminate\Database\QueryException $ex){ 
              return ['error' => 'error update user']; 
          }

    
       

    }

    public function viewFavouriteBlogpost()
    {
    }


    public function favouriteBlogpost()

    {
    }




  
}
