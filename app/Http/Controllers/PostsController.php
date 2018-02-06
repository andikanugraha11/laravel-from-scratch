<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
class PostsController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = array(
            // 'posts' => Posts::all()
            'posts' => Posts::orderBy('created_at','asc')->paginate(3)
        );
        // $post =  Posts::all();
        // return Posts::where('title', 'Post One')->get();
        // return count($data['posts']);
        return view('post.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required'
        ]);

        $post = new Posts;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->author_id = auth()->user()->id;
        $post->save();

        return redirect('/posts')->with('success', 'Berhasil di tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //get all
        $post = Posts::find($id);
        $data = array(
            'post' => $post
        );
        // return $data;
        return view('post.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post = Posts::find($id);
        $data = array(
            'post' => $post
        );
        if(auth()->user()->id !== $post->author_id){
            return redirect('/posts')->with('error', 'Unauthorize');
        }else{
            return view('post.edit')->with($data);
        }
        
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
        $this->validate($request,[
            'title' => 'required'
        ]);

        $post = Posts::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return redirect('/posts')->with('success', 'Berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post = Posts::find($id);

        if(auth()->user()->id !== $post->author_id){
            return redirect('/posts')->with('error', 'Unauthorize');
        }else{
            $post->delete();
            return redirect('/posts')->with('success', 'Post dihapus');
        }
        

        
    }

    public function testah()
    {
        return "oke";
    }
}
