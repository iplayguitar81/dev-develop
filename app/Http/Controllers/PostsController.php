<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Gate;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

use App\Post;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use Validator;
use Flash;

//this is the right namespace for image uploading...
use Illuminate\Support\Facades\Input;


use Redirect;



class PostsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        
        $posts = Post::paginate(15);

        return view('posts.index', compact('posts'));

        //use this whenever I want to display stuff like links for crud functionality

        $this->authorize('isAdmin');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('posts.create');
        $this->authorize('isAdmin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {



$this->validate($request,[
    'title' => 'required',
    'body' => 'required',

]);

        if(Input::hasFile('file')){

            echo 'Uploaded<br/>';
            $file = Input::file('file');
            $file->move('images', $file->getClientOriginalName());
            echo'<img src"images/'.$file->getClientOriginalName() .'"/>';


        }



        Post::create($request->all());
        Session::flash('flash_message', 'Post added!');

        return redirect('posts');
//        }

}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('posts.edit', compact('post'));
        $this->authorize('isAdmin');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        
        $post = Post::findOrFail($id);

        //add this to before the update or when it creates as above

        $this->validate($request,[
            'title' => 'required',
            'body' => 'required',

        ]);

        if(Input::hasFile('file')){

            echo 'Uploaded<br/>';
            $file = Input::file('file');
            $file->move('images', $file->getClientOriginalName());
            echo'<img src"images/'.$file->getClientOriginalName() .'"/>';


        }

        $post->update($request->all());

        Session::flash('flash_message', 'Post updated!');

        return redirect('posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        Post::destroy($id);

        Session::flash('flash_message', 'Post deleted!');

        return redirect('posts');
    }

}
