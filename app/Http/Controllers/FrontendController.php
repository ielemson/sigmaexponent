<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Service;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('welcome',compact("services"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        $services = Service::all();
    return view('contact',compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        $services = Service::all();
        return view('about',compact('services'));
    }

    public function service($slug){
        $service = Service::where("slug",$slug)->first();
        $services = Service::all();
        return view('frontend_service',compact("service","services"));
    }

    public function posts(){
        $blogs = Post::where("status",1)->paginate(12);
        $services = Service::all();
        return view("blogs",compact("blogs","services"));
    }
    public function post($slug){
        $blog = Post::where("slug",$slug)->first();
        $blogs = Post::where("status",1)->latest();
        $categories = Category::where("status",1)->get();
        $services = Service::all();
        return view("blog",compact("blog","services",'blogs','categories'));
    }
}
