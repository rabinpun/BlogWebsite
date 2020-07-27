<?php

namespace App\Http\Controllers;//so we can inherit the default controller features

use Illuminate\Http\Request;//so we can use (Request $request) in fuction
use App\post;//so we can use post model

class postcontroller extends Controller
{   
    public function __construct()
    {   //use of middleware
        $this->middleware('auth',['except'=>['index','show']]);//allows guest to view posts and open post without login
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
       $postdt=post::orderBy('created_at','desc')->paginate(3);//puts posts in variable postdt also when displaying post it is displayed in order of its creation date and with page of 3 posts
       return view('posts.index')->withpostdt($postdt);//opens post.index with the postdt (postdt is just a variable name of post tyoe)
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');//opens the create posts/create page
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)//the title and body we had input in the create page is sent in this function as single argument $Request, 
    {                                     //$id is not taken as argument as when creating new post the id is auto incremented and saved also the previous page 
                                          //has only sent default $request in action='postscontroller@store' no id is sent      
        $this->validate(//validate used to sanitize the data
            $request,
                ['title'=>'required',//title must be entered 
                'body'=>'required'  //body must be entered
            ]
        );
        $post=new post;//new post is created with name post
        $post->title=$request->input('title');//the title we put in the create page is saved to this newly created post
        $post->body=$request->input('body');//the  body we created in the create page is saved to this new post body
        $post->user_id=auth()->user()->id;//user id of the logged in person is saved as the user_id 
        $post->save();//saves this post
        return redirect('/posts')->withsuccess('Post sucessfully created');//redirects to the posts page with success alert 'Post sucessfully created'

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)//here Request $request is not used as we dont need whole post information to show the post
    {                          // we require we only need its id as id is uniq to each post
        $post=Post::find($id);//finds the post with id saved in $id and saves in $post
        return view('posts.show')->withpost($post);//opens the show page of post folder with the $post if we put withpost1
    }                                              // instead of post it will open show wtih $post1

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)//similar to show function we just need $id to find the post
    {
        $post=Post::find($id);//finds the requested post
        //so that guest and other user cant edit others post by using /post/{{$post->id}}/edit}
        if(auth()->user()->id !== $post->user_id)  //checking if userid and post user id matches
        {
            return redirect('/posts')->witherror('Unauthorized Access');//if not authorized sends back to posts's homepage
                                                                   //with error alert
        }
        
        return view('posts.edit')->withpost($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate(
            $request,
                ['title'=>'required',
                'body'=>'required'
            ]
        );
        $post=post::find($id);
        $post->title=$request->input('title');
        $post->body=$request->input('body');
        $post->save();
        return redirect('/posts')->withsuccess('Post sucessfully updated');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=post::find($id);
        //so that guest and other user cant edit others post by using /post/{{$post->id}}/edit}
        if(auth()->user()->id !== $post->user_id)  //checking if userid and post user id matches
        {
            return redirect('/posts')->witherror('Unauthorized Access');//if not authorized sends back to posts's homepage
                                                                   //with error alert
        }
        $post->delete();
        return redirect('/posts')->withsuccess('Post sucessfully deleted');
    }
}
