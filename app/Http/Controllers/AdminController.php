<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\BlogModel;
use App\Models\PostCommentModel;
use Laravel\Ui\Presets\React;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

     public function index()
    {


        $users = User::all();

        $blogs = BlogModel::join('users', 'blogs.user_id', '=', 'users.id')
        ->join('coin_data',  'coin_data.id', '=', 'blogs.coin_id')
        ->get(['blogs.*', 'users.first_name', 'users.last_name', 'coin_data.name']);

   
        return view('adminPage')->with(['blogs' => $blogs,  'users' => $users]);


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
       
        $blogComment = new PostCommentModel;
        $test = $request->oldblogComment;
      
        $blogComment->comment =  $test . 'Posted by user ' . $id . ': ' . $request->blogComment . ' '  ;
        $blogComment->id = $request->id;
 
        try { 
            DB::table('users')
            ->where('id',   $blogComment->id)
            ->update(['inactive' =>  1]);
            echo "Your post was successfuly added!"; 

            $blogs = BlogModel::join('users', 'blogs.user_id', '=', 'users.id')
            ->join('coin_data',  'coin_data.id', '=', 'blogs.coin_id')
            ->get(['blogs.*', 'users.first_name', 'users.last_name', 'coin_data.name']);

            return view('adminPage');

          } catch(\Illuminate\Database\QueryException $ex){ 
              return ['error' => 'error update user']; 
          }
  

    }

 
  
}
