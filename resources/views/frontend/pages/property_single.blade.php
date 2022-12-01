@extends('frontend.layouts.layout')
    @section('title')
     property detail
    @endsection
    @section('content')
      	<!-- ====== Apartments-Single-Area ======= --> 
	<div class="apartment-single-area">
        <div class="container">
            <div class="row">
              <div class="col-md-8">
                 <div>
                    <img src="{{asset($property->image)}}" alt=""style="height: 500px;width:800px;">
                 </div>
                  <div class="family-apartment-content mobile-extend">
                      <div class="tb">
                          <div class="tb-cell">
                             <h3 class="apartment-title">{{$property->title}}</h3>
                          </div><!-- /.tb-cell -->
                          <div class="tb-cell">
                             <p class="pull-right rent">Rent/Month: $550</p>
                          </div><!-- /.tb-cell -->
                      </div><!-- /.tb -->
                      <div class="clearfix"></div><!-- /.clearfix -->
                      <p class="apartment-description default-gradient-before">3000 sq-ft., 3 Bedroom, Semi-furnished, Luxurious, South facing Apartment for Rent in Rangs Malancha, Melbourne.</p>
                      <div class="price-details">
                          <h3>Price Details-</h3>
                          <ul>
                              <li><span>Rent/Month: </span> $550 (negotiable)</li>
                              <li><span>Service Charge :</span> 8,000/= Tk per month, subject to change</li>
                              <li><span>Security Deposit :</span> 3 month’s rent</li>
                              <li><span>Flat Release Policy :</span> 3 months earlier notice required</li>
                              <li><span>Flat Total Price : </span>{{$property->price}}</li>
                          </ul>
                      </div><!-- /.price -->

                      <div class="property-details">
                          <h3>Property Details-</h3>
                          <ul>
                              <li><span>Address  &amp; Area :</span> {{$property->address}}</li>
                              <li><span>Flat Size :</span> 3000 Sq Feet.</li>
                              <li><span>Floor :</span> A5 (5th Floor) (6 storied Building ) (South Facing Unit)</li>
                              <li><span>Room Category :</span> {{$property->bedroom}} Large Bed Rooms with 3 Verandas, Spacious Drawing, Dining &amp; Family    Living Room, Highly Decorated Kitchen with Store Room and Servant room with attached Toilet.</li>
                              <li><span>Facilities :</span> 1 Modern Lift, All Modern Amenities &amp; Semi Furnished.</li>
                              <li><span>Additional Facilities :</span> a. Electricity with full generator load, b. Central Gas Geyser, c. 2 Car Parking with 1 Driver’s Accommodation, d. Community Conference Hall, e. Roof Top Beautified Garden and Grassy Ground, f. Cloth Hanging facility with CC camera </li>
                          </ul>
                      </div><!-- /.Property -->
                      <div class="apartment-overview">
                          <div class="row">
                              <div class="col-md-12">
                                  <h3>Apartment Overview</h3>
                                  <div class="overview">
                                      <ul>
                                          <li>Deposit / Bond <span class="pull-right">$225000.00</span></li>
                                          <li>computer <span class="pull-right">03</span></li>
                                          <li>Total Area (sq. ft) <span class="pull-right">300</span></li>
                                          <li>Total Floors <span class="pull-right">06</span></li>
                                          <li>Car Parking Per Space <span class="pull-right">02</span></li>    
                                          <li>Air Condition <span class="pull-right">Yes</span></li>
                                          <li>Car Parking Per Space <span class="pull-right">02</span></li>    
                                          <li>Air Condition <span class="pull-right">Yes</span></li>
                                      </ul>
                                  </div><!-- /.apartment-overview -->
                              </div><!-- /.col-md-12 -->
                          </div><!-- /.row -->
                      </div><!-- /.overview -->
                      <div class="indoor-features">
                          <div class="row">
                              <div class="col-md-6">
                                  <h3 class="features-title">Indoor features:</h3>
                                  <ul class="features-list">
                                      <li>Community Hall</li>
                                      <li>Safety Grills</li>
                                      <li>Servants Room</li>
                                      <li>Servants Toilet</li>
                                      <li>Fire exit</li>
                                      <li>CCTV</li>
                                      <li>WASA connection</li>
                                      <li>DESCO connection</li>
                                      <li>TITAS GAS connection</li>
                                      <li>alcony</li>
                                      <li>Inter Com</li>
                                  </ul>
                              </div><!-- /.col-md-6 -->
                              <div class="col-md-6">
                                  <h3 class="features-title">Indoor features:</h3>
                                  <ul class="features-list">
                                      <li>South facing</li>
                                      <li>Roof Top Garden</li>
                                      <li>Drivers quarters</li>
                                      <li>Generator</li>
                                      <li>Lift</li>
                                  </ul>
                              </div><!-- /.col-md-6 -->
                          </div><!-- /.row -->
                      </div><!-- /.indoor -->
                  </div><!-- /.family-apartment-content -->
                  <div class="hidden-md hidden-lg text-center extend-btn">
                      <span class="extend-icon">
                          <i class="fa fa-angle-down"></i>
                      </span>
                  </div>
              </div> <!-- /.col-md-8 -->

              @if(request()->session()->has('status'))
                <div class="alert alert-success text-center">{{session()->get('status')}}</div>
              @endif
              <div class="col-md-4">
                  <div class="apartment-sidebar">                    
                      <div class="widget_rental_search clerafix">					
                          <div class="form-border gradient-border">
                              <form  method="POST" action="{{route('add_booking')}}" class="advance_search_query booking-form">
                                @csrf
                                  <div class="form-bg seven">
                                      <div class="form-content">
                                          <h2 class="form-title">Book This Apartment</h2>
                                          <div class="form-group">
                                             <label>Full Name</label>
                                             <input type="text" name="fullname" placeholder="Full name">
                                             @error('fullname')
                                               <span class="text-danger">{{$message}}</span>    
                                             @enderror
                                          </div><!-- /.form-group -->
                                          <div class="form-group">
                                              <label>Phone Number</label>
                                              <input type="tel" name="phone" placeholder="+99(99)9999-9999">
                                              @error('phone')
                                               <span class="text-danger">{{$message}}</span>    
                                              @enderror
                                          </div><!-- /.form-group -->
                                          <div class="form-group">
                                              <label>Email Address</label>
                                              <input type="email" name="email" placeholder="example@domain.com">
                                              @error('email')
                                                <span class="text-danger">{{$message}}</span>    
                                              @enderror
                                          </div><!-- /.form-group -->
                                          <div class="form-group">
                                              <label>Family Member</label>
                                              <input type="number" step="1" min="1" max="100" name="family_member" value="1" title="Qty" size="4" class="input-text">
                                              @error('family_member')
                                                <span class="text-danger">{{$message}}</span>    
                                              @enderror
                                          </div><!-- /.form-group -->
                                          <div class="form-group">
                                              <label>Children</label>
                                              <input type="number" step="1" min="1" max="100" name="children" value="1" title="Qty" size="4" class="input-text">
                                               @error('children')
                                                <span class="text-danger">{{$message}}</span>    
                                               @enderror
                                          </div><!-- /.form-group -->
                                          <div class="form-group">
                                              <label>Your Message</label>
                                              <textarea name="message" placeholder="Message" class="form-controller"></textarea>
                                              @error('message')
                                                <span class="text-danger">{{$message}}</span>    
                                              @enderror
                                          </div><!-- /.form-group -->
                                          <input type="hidden" name="property_id" value="{{$property->id}}">
                                          <div class="form-group">
                                              <button type="submit" class="button default-template-gradient button-radius">Request Booking</button>
                                          </div><!-- /.form-group -->
                                      </div><!-- /.form-content -->
                                  </div><!-- /.form-bg -->
                              </form> <!-- /.advance_search_query -->
                          </div><!-- /.form-border -->
                      </div><!-- /.widget_rental_search -->

                      <div class="apartments-content seven post clerafix">
                          <div class="image-content">
                              <a href="#"><img class="overlay-image" src="{{asset('frontend/assets/images/apartment-ad.png')" alt="about" /></a>
                          </div><!-- /.image-content -->
                      </div><!-- /.partments-content -->
                  </div><!-- /.apartment-sidebar -->
              </div> <!-- .col-md-4 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.appartment-single-area -->
  
    @endsection


