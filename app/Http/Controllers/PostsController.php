<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;
// use Cviebrock\EloquentSluggable\Services\SlugService;

class PostsController extends Controller
{
 
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('blog.index')
            ->with('posts', Post::orderBy('updated_at', 'DESC')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories =  Category::where('status', 1)->get();
        return view('blog.create',compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'status' => 'required',
            'meta_title' => 'nullable',
            'meta_description' => 'nullable',
            'published_at' => 'nullable',
            'content' => 'nullable',
            'meta_keywords' => 'nullable',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);
            // dd($request->all());
        $newImageName = uniqid() . '-' . $request->title . '.' . $request->image->extension();

        $request->image->move(public_path('images/blog'), $newImageName);

        Post::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'status' => $request->input('status'),
            'meta_title' => $request->input('meta_title'),
            'meta_description' => $request->input('meta_description'),
            'published_at' => $request->input('published_at'),
            'meta_keywords' => $request->input('meta_keywords'),
            'slug' => Str::slug($request->input('title')),
            'cat_id' => Str::slug($request->input('cat_id')),
            'image' => $newImageName,
            'user_id' => auth()->user()->id
        ]);

        return redirect()->back()->with('success', 'Your post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('blog.show')->with('post', Post::where('id', $id)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $post = Post::where('id', $id)->first();
        $categories =  Category::where('status', 1)->get();
        return view('blog.edit',compact("post","categories"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'status' => 'required',
            'meta_title' => 'nullable',
            'meta_description' => 'nullable',
            'published_at' => 'nullable',
            'content' => 'nullable',
            'meta_keywords' => 'nullable',
            'image' => 'nullable|mimes:jpg,png,jpeg|max:5048'
        ]);
        if ($request->hasFile('image')) {
            $newImageName = uniqid() . '-' . $request->title . '.' . $request->image->extension();
            $request->image->move(public_path('images/blog'), $newImageName);

            Post::where('id', $id)
            ->update([
                'title' => $request->input('title'),
                'content' => $request->input('content'),
                'status' => $request->input('status'),
                'meta_title' => $request->input('meta_title'),
                'meta_description' => $request->input('meta_description'),
                'published_at' => $request->input('published_at'),
                'meta_keywords' => $request->input('meta_keywords'),
                'slug' => Str::slug($request->input('title')),
                'cat_id' => Str::slug($request->input('cat_id')),
                'image' => $newImageName,
                'user_id' => auth()->user()->id
            ]);
        }else{
           Post::where('id', $id)
        ->update([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'status' => $request->input('status'),
            'meta_title' => $request->input('meta_title'),
            'meta_description' => $request->input('meta_description'),
            'published_at' => $request->input('published_at'),
            'meta_keywords' => $request->input('meta_keywords'),
            'cat_id' => Str::slug($request->input('cat_id')),
            'slug' => Str::slug($request->input('title')),
            // 'image' => $newImageName,
            'user_id' => auth()->user()->id
        ]);  
        }

       
      

        return redirect()->back()->with('success', 'Your post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $post = Post::where('slug', $slug);
        $post->delete();

        return redirect('/blog')
            ->with('message', 'Your post has been deleted!');
    }
}

