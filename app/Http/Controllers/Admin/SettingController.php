<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Setting;
class SettingController extends Controller
{
    //
    public function view_settings(){
       $settings = Setting::all();
        return view('admin.settings.settings',\compact('settings'));
    }
    public function edit_setting(){
        $setting = Setting::first();
        // return $setting;
        return view('admin.settings.update_setting',\compact('setting'));
    }
    public function update_setting(Request $request,$id){
     
        $validate = $request->validate([
            "title"=>"required",
            "phone"=>"required",
            "email"=>"required",
            "address"=>"required",
            "footer_text"=>"required"
        ]);
        // $this->authorize('isAdmin',Setting::class);
        $setting = Setting::find($id);
        $setting->title = $request->title;
        if(isset($request->logo)){
            $logo = time().'.'.$request->logo->getClientOriginalName();
            $path =   $request->logo->move('frontend/setting_images/',$logo);
            $setting->logo = $path;
        }
        $setting->phone = $request->phone;
        $setting->email = $request->email;
        $setting->address = $request->address;
        if(isset($request->footer_logo)){
            $footer_logo = time().'.'.$request->footer_logo->getClientOriginalName();
            $path1 =   $request->footer_logo->move('frontend/setting_images/',$footer_logo);
            $setting->footer_logo = $path1;
        }
        $setting->footer_text = $request->footer_text;
        $setting->update();
        return redirect('edit_setting')->with('status', 'Setting Updated!');
    }
    
}
