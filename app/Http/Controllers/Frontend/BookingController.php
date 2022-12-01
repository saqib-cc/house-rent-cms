<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Booking;
use App\Property;
class BookingController extends Controller
{
    //
    public function add_booking(Request $request){
        // $request->validate([
        //       'fullname'=>'required',
        //       'phone'=>'required',
        //       'email'=>'required',
        //       'family_meber'=>'required',
        //       'children'=>'required',
        //       'message'=>'required'
        //   ]);
        $property =Property::find($request->property_id);
        $booking = new Booking;
        $booking->fullname =$request->fullname; 
        $booking->phone =$request->phone;  
        $booking->email =$request->email; 
        $booking->family_member =$request->family_member; 
        $booking->children =$request->children; 
        $booking->message =$request->message;
        $property->booking()->save($booking);
        // return redirect('property_single')->with('status','Booinkg Added!');
    }
}
