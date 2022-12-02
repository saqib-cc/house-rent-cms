<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Booking;
use App\Http\Resources\BookingResource;
class BookingController extends Controller
{
    //
    public function bookings(){
        return view('admin.bookings.bookings');
    }
    public function get_bookings(){
        $bookings = Booking::all();
        return BookingResource::collection($bookings);
    }

}
