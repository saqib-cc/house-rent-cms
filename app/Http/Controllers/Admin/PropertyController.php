<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Property;   
use App\Category;
class PropertyController extends Controller
{
    //
    public function view_addproperty(){
        
        return view('admin.property.add_property');
    }
    // show properties
    public function properties(){
       
        return view('admin.property.properties');
    }
   
    // get all properties
    public function get_properties(){
        
        return Property::latest()->get();
    }
    // add property
    public function addproperty(Request $request){
         
        $property = new Property;
        $property->title = $request->title;
        $property->description = $request->description;
        $property->bedroom = $request->bedroom;
        $property->bathroom = $request->bathroom;
        $property->address = $request->address;
        $property->city = $request->city;
        $property->price = $request->price;
        $image = time().'.'.$request->image->getClientOriginalName();
        $path =   $request->image->move('public/property_images/',$image);
        $property->image = $path;
        $property->save();
       return 'success';
    }
    // update property
    public function update_property(Request $request,$id){
        
        $property = Property::find($id);
        $property->title = $request->title;
        $property->description = $request->description;
        $property->bedroom = $request->bedroom;
        $property->bathroom = $request->bathroom;
        $property->address = $request->address;
        $property->city = $request->city;
        $property->price = $request->price;
        if(isset($request->image)){
        $image = time().'.'.$request->image->getClientOriginalName();
        $path =   $request->image->move('public/property_images/',$image);
        $property->image = $path;
         }
        $property->update();
       return 'success';
    }
    // edit property
    public function delete_property($id){
        
        $property = Property::find($id);
        $property->delete();
        // return redirect('admin.property.properties')->with('status','Property Deleted Successfully');

    }
    public function get_property($id){
        $property = Property::find($id);
        return $property;
        // return view('admin.property.update_property',compact("property"));
    }
}
