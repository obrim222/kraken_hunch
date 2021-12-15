<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogModel;
<<<<<<< refs/remotes/origin/tom
<<<<<<< refs/remotes/origin/tom
<<<<<<< refs/remotes/origin/tom
use App\Models\PostCommentModel;
=======
>>>>>>> RegisterPageCorrection
=======
use App\Models\PostCommentModel;
>>>>>>> BlogPage/Post
use Laravel\Ui\Presets\React;

=======
>>>>>>> Auto stash before merge of "michael" and "origin/main"

class BlogController extends Controller
{
    public function viewBlogpost()
    {
<<<<<<< refs/remotes/origin/tom
<<<<<<< refs/remotes/origin/tom
<<<<<<< Updated upstream


<<<<<<< refs/remotes/origin/tom
        return view('blogs');
    }

<<<<<<< refs/remotes/origin/tom
    public function createBlogPost()
    {


        return view('post');
    }
<<<<<<< refs/remotes/origin/tom
=======
    //test
    
    public function addBlogpost(){
>>>>>>> test
=======

>>>>>>> Blog Page/Post

    /*
=======
        return view('post');
    }

>>>>>>> RegisterPageCorrection
    public function __construct()
    {
        $this->middleware(['auth'])->only(['store', 'destroy']);
    }
<<<<<<< refs/remotes/origin/tom
*/
    /*
    public function show()
    {
        $posts = BlogModel::all(); //fetch all blog posts from DB
        return $posts; //returns the fetched posts
=======
=======
>>>>>>> Auto stash before merge of "michael" and "origin/main"

        $blogs = BlogModel::all();
        return view('blogs', ['blogs' => $blogs]);
    }


    //test

    public function addBlogpost()
    {
<<<<<<< refs/remotes/origin/tom
>>>>>>> Stashed changes
    }
*/
    public function addComment(Request $request)
    {
<<<<<<< refs/remotes/origin/tom
=======

        $this->validate($request, [
            'comment' => 'required',
        ]);

<<<<<<< Updated upstream

        $blogComment = new PostCommentModel;

        $blogComment->comment = $request->comment;

        $blogComment->save();

        if ($blogComment->save()) {
            return redirect('home')->with('success', 'Saved in the DB');
        } else {
            return back()->with('error', 'Something wrong with the DB');
        }
=======
    public function favouriteBlogpost()
    {
>>>>>>> Stashed changes
    }
>>>>>>> BlogPage/Post

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

<<<<<<< refs/remotes/origin/tom

    public function addBlogpost()
    {
=======

    /*
    public function show()
    {
        $posts = BlogModel::all(); //fetch all blog posts from DB
        return $posts; //returns the fetched posts
>>>>>>> RegisterPageCorrection
    }
*/

    public function addComment(Request $request)
    {
        // Validations

        $request->validate([

<<<<<<< refs/remotes/origin/tom
            'blog' => 'required',
            'author_id' => 'required'

        ]);

<<<<<<< refs/remotes/origin/tom
=======
>>>>>>> Blog Page/Post
=======
<<<<<<< Updated upstream
>>>>>>> Auto stash before merge of "michael" and "origin/main"
    public function favouriteBlogpost()
=======
    public function viewFavouriteBlogpost()
>>>>>>> Stashed changes
    {
=======
        $blogPost = new BlogModel;
        $blogPost->blog = $request->blog;
        $blogPost->author_id = $request->author_id;

        $blogPost->save();

        if ($blogPost->save()) {
            return redirect('blogs')->with('success', 'Saved in the db');
        } else {
            return redirect('blogs')->with('error', 'Error');
        }
>>>>>>> RegisterPageCorrection
=======

        $blogs = BlogModel::all();
        return view('blogs', ['blogs' => $blogs]);
    }


    //test

    public function addBlogpost()
    {
>>>>>>> fix
    }

    public function addBlogpost()
    {
    }

<<<<<<< Updated upstream

<<<<<<< refs/remotes/origin/tom
    public function viewFavouriteBlogpost()
=======
    public function favouriteBlogpost()
>>>>>>> RegisterPageCorrection
=======
    }


    public function favouriteBlogpost()
>>>>>>> Auto stash before merge of "michael" and "origin/main"
    {
    }


<<<<<<< refs/remotes/origin/tom
<<<<<<< refs/remotes/origin/tom
    public function deleteTip(BlogModel $post)
    {
        $this->authorize('delete', $post);

<<<<<<< refs/remotes/origin/tom
        $post->delete();

        return back();
=======
    public function favouriteBlogpost()
    {
>>>>>>> fix
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

<<<<<<< refs/remotes/origin/tom
        $blogPost->save();

        if ($blogPost->save()) {
            return redirect('home')->with('success', 'Saved in the DB');
        } else {
            return back()->with('error', 'Something wrong with the DB');
        }

        auth()->attempt($request->only('email', 'password'));
=======
=======
>>>>>>> Auto stash before merge of "michael" and "origin/main"

=======
>>>>>>> fix
    public function viewFavouriteBlogpost()
    {
    }


<<<<<<< refs/remotes/origin/tom
<<<<<<< refs/remotes/origin/tom
    public function deleteTip(BlogModel $post)
    {
        $this->authorize('delete', $post);

        $post->delete();

        return back();
    }

    public function store(Request $request)
    {
        $request->validate([
            'author_id' => 'required|integer',
            'blog' => 'required',
            'coin_id' => 'required|integer'

        ]);

        $blogComment = new BlogModel;

        $blogComment->author_id = $request->author_id;
        $blogComment->blog = $request->blog;

        $blogComment->save();

        if ($blogComment->save()) {
            return redirect('blogs')->with('success', 'Saved in the db');
        } else {
            return redirect('blogs')->with('error', 'Error');
        }
>>>>>>> RegisterPageCorrection
    }
=======
    public function deleteTip()
    {
    }
>>>>>>> Stashed changes
=======
    public function deleteTip()
    {
    }
>>>>>>> Auto stash before merge of "michael" and "origin/main"
=======
    public function deleteTip()
    {
    }
>>>>>>> fix
}
