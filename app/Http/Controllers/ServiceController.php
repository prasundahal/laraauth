<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $services=Service::all();
        return view('admin.service.viewservices',compact('services'));
    }
    public function add(){

        return view('admin.service.addservice');
    }

    public function delete($id){
        Service::find($id)->delete();
        return redirect(route('viewservices'))->with('message',"Deleted Successfully");
    }

    public function edit($id){
        $service=Service::find($id);

        return view('admin.service.editservice',compact('service'));
    }


    public function store(Request $request){

        $service=new Service();
        $this->validate($request,[
            'icon'=>'required',
            'name'=>'required',
            'about'=>'required',
            'link'=>'required'
        ]);


        $service->name=$request->name;

        $service->link=$request->link;
        $service->icon=$request->icon;
        $service->about=$request->about;

        $service->save();
        return redirect(route('viewservices'))->with('message',"Services Added Successfully");
    }

    public function update(Request $request,$id){
        $service=Service::find($id);
        $this->validate($request,[
            'name'=>'required',
            'link'=>'required',
            'about'=>'required',
            'icon'=>'required'

        ]);


        $service->name=$request->name;
        $service->link=$request->link;

        $service->icon=$request->icon;
        $service->about=$request->about;


        $service->save();

        return redirect(route('viewservices'))->with('message'," Updated Successfully");
    }
}
