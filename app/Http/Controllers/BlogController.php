<?php

namespace App\Http\Controllers;

use App\Models\Blog;

use App\Models\Blogcategory;
use Illuminate\Http\Request;
use Image;

class BlogController extends Controller
{
    public function index(){
        $blogs=Blog::all();
        return view('admin.blog.viewblogs',compact('blogs'));
    }

    public function addblogcategory(){
        return view('admin.blog.addblogcategory');
    }

    public function add(){
        $blogcategories=Blogcategory::all();
        return view('admin.blog.addblog',compact('blogcategories'));
    }


    public function delete($id){
        blog::find($id)->delete();
        return redirect(route('viewblogs'))->with('message',"Blog Deleted Successfully");
    }

    public function edit($id){
        $blog=blog::find($id);
        $blogcategories=Blogcategory::all();
        $selected=Blogcategory::find($blog->category_id);
        return view('admin.blog.editblog',compact('blog','blogcategories','selected'));
    }

    public function store(Request $request){
        $blog=new Blog();
        $this->validate($request,[
            'image'=>'required',
            'category_id'=>'required',
            'title'=>'required',
            'post'=>'required'
        ]);


        $blog->title=$request->title;
        $blog->category_id=$request->category_id;
        $blog->post=$request->post;
        $image=$request->image;

        if($image!==null){
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();

            \Image::make($image)->resize(850,400)->save($image_name);

            $blog->image = $image_name;
        }

        $blog->save();
        return redirect(route('viewblogs'))->with('message',"Blog Added Successfully");
    }

    public function update(Request $request,$id){
        $blog=Blog::find($id);
        $this->validate($request,[
            'category_id'=>'required',
            'title'=>'required',
            'post'=>'required'
        ]);


        $blog->title=$request->title;
        $blog->category_id=$request->category_id;
        $blog->post=$request->post;
        $image=$request->image;

        if($image!==null){
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $full_name = 'public/media/blog/' . $image_name;
            \Image::make($image)->resize(850,400)->save($full_name);

            $blog->image = $full_name;
        }
        $blog->save();

        return redirect(route('viewblogs'))->with('message',"Blog Updated Successfully");
    }
    public function allcategory(){
        $blogcategories=Blogcategory::all();
        return view('admin.blog.blogcategory',compact('blogcategories'));
    }


    public function deletecategory($id){
        Blogcategory::find($id)->delete();
        return redirect(route('blogcategory'))->with('message',"Category Deleted Successfully");
    }

    public function editcategory($id){
        $blogcategories=Blogcategory::all();
        $blogcat=Blogcategory::find($id);
        return view('admin.blog.editblogcategory',compact('blogcategories','blogcat'));
    }

    public function storecategory(Request $request){
        $this->validate($request,[
           'category'=>'required'
        ]);
        $blogcategory=new Blogcategory();
        $blogcategory->category=$request->category;
        $blogcategory->save();
        return redirect(route('blogcategory'))->with('message',"Blog Category Added");
    }

    public function updatecategory(Request $request,$id){
        $this->validate($request,[
           'category'=>'required'
        ]);
        $blogcategory=Blogcategory::find($id);
        $blogcategory->category=$request->category;
        $blogcategory->save();
        return redirect(route('blogcategory'))->with('message',"Blog Category Updated");
    }


}
