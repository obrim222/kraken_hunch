<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\BlogModel;
use App\Models\Tip;
use App\Models\PostCommentModel;
use Laravel\Ui\Presets\React;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

     public function index()
    {

        $tipsdata = Tip::join('users', 'tips.user_id', '=', 'users.id')
        ->join('coin_data',  'coin_data.id', '=', 'tips.coin_id')
        ->get(['tips.*', 'users.first_name', 'users.last_name', 'coin_data.name']);

        $users = User::all();

        $blogs = BlogModel::join('users', 'blogs.user_id', '=', 'users.id')
        ->join('coin_data',  'coin_data.id', '=', 'blogs.coin_id')
        ->get(['blogs.*', 'users.first_name', 'users.last_name', 'coin_data.name']);

   
        return view('adminPage')->with(['blogs' => $blogs,  'users' => $users, 'tips' => $tipsdata]);

    }


    public function show()
    {
        return view('post');
    }


    public function __construct()
    {
        $this->middleware(['auth'])->only(['store', 'destroy']);
    }


    public function createBlogPost(Request $request)
    {
        $request->validate([
            'message' => 'required',
            'coin_id' => 'required'
        ]);

        $id = Auth::id();

        $blog = new BlogModel();
        $blog->user_id = $id;
        $blog->comment = $request->comment;
        $blog->coin_id = $request->coin_id ;
        $blog->save();

    }

    public function deactivateUser(Request $request)
    {
          
        $deactivateUser = $request->userid;

        try { 
          
            {
            DB::table('users')
            ->where('id', $deactivateUser )
            ->update(['inactive' => 1]);
            echo "The user has been deactivated"; 
     
      
        }
            $users = User::all();

            $blogs = BlogModel::join('users', 'blogs.user_id', '=', 'users.id')
            ->join('coin_data',  'coin_data.id', '=', 'blogs.coin_id')
            ->get(['blogs.*', 'users.first_name', 'users.last_name', 'coin_data.name']);

          
        
            return back()->with(['blogs' => $blogs,  'users' => $users ]);

          } catch(\Illuminate\Database\QueryException $ex){ 
              return ['error' => 'error update user']; 
          }
  
 
    }

    public function deactivateTips(Request $request)
    {
       
        $deactivateTip = $request->tipid;
        
        try { 
                  
            DB::table('tips')
            ->where('id', $deactivateTip )
            ->update(['inactive' => 1]);
            echo "The tip has been deactivated"; 
        
            $users = User::all();
            $tips = Tip::all();
            $blogs = BlogModel::join('users', 'blogs.user_id', '=', 'users.id')
            ->join('coin_data',  'coin_data.id', '=', 'blogs.coin_id')
            ->get(['blogs.*', 'users.first_name', 'users.last_name', 'coin_data.name']);

             
            return back()->with(['blogs' => $blogs,  'tips' => $tips, 'users' => $users  ]);

          } catch(\Illuminate\Database\QueryException $ex){ 
              return ['error' => 'error update user']; 
          }
  
 
    }


    public function deactivateBlog(Request $request)
    {
       
        $deactivateBlog = $request->blogid;
        
        try { 
                  
            DB::table('blogs')
            ->where('id', $deactivateBlog )
            ->update(['inactive' => 1]);
            echo "The blog has been deactivated"; 
        
            $users = User::all();

            $blogs = BlogModel::join('users', 'blogs.user_id', '=', 'users.id')
            ->join('coin_data',  'coin_data.id', '=', 'blogs.coin_id')
            ->get(['blogs.*', 'users.first_name', 'users.last_name', 'coin_data.name']);

             
            return back()->with(['blogs' => $blogs,  'users' => $users ]);

          } catch(\Illuminate\Database\QueryException $ex){ 
              return ['error' => 'error update user']; 
          }
  
 
    }

   // public function __construct()
   // {
   //     $this->middleware(['guest']);
   // }
  
}
