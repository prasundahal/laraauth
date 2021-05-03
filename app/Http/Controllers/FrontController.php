<?php

namespace App\Http\Controllers;

use App\Models\Front;
use App\Models\Person;
use App\Models\Banner;
use App\Models\Blogcategory;
use App\Models\Blog;
use App\Models\Market;
use App\Models\Service;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs=Blog::all();
        $markets=Market::all();
        $services=Service::all();

        // $banner=Banner::all();
        $blogcategories=Blogcategory::all();
        return view('front',compact('blogs','blogcategories','markets','services'));
    }
    public function readblog($id){
        $blog=blog::find($id);
        $blogcategories=Blogcategory::all();
        $blogs=blog::all();
        return view('readblog',compact('blog','blogcategories','blogs'));
    }

    public function blog(){
        $blogs=blog::paginate(3);
        $blogcategories=Blogcategory::all();
        return view('blogs',compact('blogs','blogcategories'));
    }

    public function blogcat($id){
        $blogs=DB::table('blogs')
            ->where('category_id', '=', $id)
            ->paginate(3);
        $blogcategories=Blogcategory::all();
        return view('blogs',compact('blogs','blogcategories'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('createcv');
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
            'email' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'social' => 'required',
            'yearexp' => 'required',
            'exp' => 'required',
            'price' => 'required',
            'image' => 'required',
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(


            'email' => $request->email,
            'name' =>$request->name,
            'phone' => $request->phone,
            'social' => $request->social,
            'yearexp' => $request->yearexp,
            'exp' => $request->exp,
            'price' => $request->price,
            'image'            =>   $new_name
        );

        Person::create($form_data);

         return redirect()->route('front')
        ->with('success','Cv created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Front  $front
     * @return \Illuminate\Http\Response
     */
    public function show(Front $front)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Front  $front
     * @return \Illuminate\Http\Response
     */
    public function edit(Front $front)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Front  $front
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Front $front)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Front  $front
     * @return \Illuminate\Http\Response
     */
    public function destroy(Front $front)
    {
        //
    }
}
