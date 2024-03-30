<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function index_service(){
        $services = Service::all();
        return view("services.index",compact("services"));
    }

    public function create_service(){
        return view("services.create");
    }

    public function store_service(Request $request){
        // return $request;
        try {
            // $imageName = time().'.'.$request->image->extension();  
     
            // $request->image->move(public_path('assets/images/services'), $imageName);

            $service = Service::create([
                'title' => $request->title,
                'content' => $request->content,
                'status' => $request->status,
                'slug'=> Str::slug($request->input('title'))
                // 'image' => $imageName,
               ]);

            
            if ($service) {
                // assign new role to the user
                // $user->syncRoles($request->role);
                return redirect()->back()->with('success', 'New service created!');
            }

            return redirect('service/create')->with('error', 'Failed to create new service! Try again.');
        } catch (\Exception $e) {
            $bug = $e->getMessage();

            return redirect()->back()->with('error', $bug);
        }
    }

    public function edit_service(Request $request, $id){
        $service = Service::where("id",$id)->first();
        return view("services.edit",compact("service"));
    }


    
    public function update_service(Request $request, $id){
        $service = Service::where("id",$id)->first();

        try {
            // $imageName = time().'.'.$request->image->extension();  
     
            // $request->image->move(public_path('assets/images/services'), $imageName);

            // $service = Service::create([
            //     'title' => $request->title,
            //     'content' => $request->content,
            //     'status' => $request->status,
            //     // 'image' => $imageName,
            //    ]);

                $service->title = $request->title;
                $service->status = $request->status;
                $service->content = $request->content;
                $service->slug = ($request->input('title'));
            
            if ($service->save()) {
                return redirect()->back()->with('success', 'Service updated!');
            }

            return redirect('service/create')->with('error', 'Failed to update service! Try again.');
        } catch (\Exception $e) {
            $bug = $e->getMessage();

            return redirect()->back()->with('error', $bug);
        }
    }
}
