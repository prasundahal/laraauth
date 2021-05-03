<?php

namespace App\Http\Controllers;
use App\Models\Market;
use Illuminate\Http\Request;
use Image;
class MarketController extends Controller
{
    public function index(){
        $markets=Market::all();
        return view('admin.market.viewmarkets',compact('markets'));
    }
    public function add(){

        return view('admin.market.addmarket');
    }

    public function delete($id){
        Market::find($id)->delete();
        return redirect(route('viewmarkets'))->with('message',"Deleted Successfully");
    }

    public function edit($id){
        $markets=Market::find($id);

        return view('admin.market.editmarket',compact('markets'));
    }


    public function store(Request $request){

        $market=new Market();
        $this->validate($request,[
            'image'=>'required',
            'name'=>'required',
            'link'=>'required'
        ]);


        $market->name=$request->name;

        $market->link=$request->link;
        $image=$request->image;

        if($image!==null){
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();

            \Image::make($image)->resize(850,400)->save($image_name);

            $market->image = $image_name;
        }

        $market->save();
        return redirect(route('viewmarkets'))->with('message',"Market Added Successfully");
    }

    public function update(Request $request,$id){
        $market=Market::find($id);
        $this->validate($request,[
            'name'=>'required',
            'link'=>'required'

        ]);


        $market->name=$request->name;
        $market->link=$request->link;

        $image=$request->image;

        if($image!==null){
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $full_name = 'public/media/blog/' . $image_name;
            \Image::make($image)->resize(850,400)->save($full_name);

            $market->image = $full_name;
        }
        $market->save();

        return redirect(route('viewmarkets'))->with('message'," Updated Successfully");
    }
}
