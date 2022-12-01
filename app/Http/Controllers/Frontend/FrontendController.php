<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Setting;
use App\Property;
class FrontendController extends Controller
{
    //
    public function index(){
        $setting = Setting::first();
        return view('frontend.pages.index',compact('setting'));
    }
    public function property_single($id){
        $property = Property::find($id);
        return view('frontend.pages.property_single',compact('property'));
    }
}
