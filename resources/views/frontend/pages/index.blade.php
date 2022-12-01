@extends('frontend.layouts.layout')
    @section('title')
      {{$setting->title}}
    @endsection
    @section('content')
           <!-- ====== Header Overlay Content ====== -->
    <div class="header-overlay-content">
      <!-- overlay-menu-item -->
      <div class="overlay overlay-hugeinc gradient-transparent overlay-menu-item">
          <button type="button" class="overlay-close">Close</button>
          <nav>
              <ul class="overlay-menu">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About</a>
                      <ul class="sub-menu">
                          <li><a href="#">Home</a></li>
                          <li><a href="#">About</a></li>
                          <li><a href="#">Work</a></li>
                          <li><a href="#">Clients</a>
                              <ul class="sub-menu">
                                  <li><a href="#">Home</a></li>
                                  <li><a href="#">About</a></li>
                                  <li><a href="#">Work</a></li>
                                  <li><a href="#">Clients</a></li>
                                  <li><a href="#">Contact</a></li>
                              </ul>
                          </li>
                          <li><a href="#">Contact</a></li>
                      </ul>
                  </li>
                  <li><a href="#">Work</a></li>
                  <li><a href="#">Clients</a></li>
                  <li><a href="#">Contact</a></li>
              </ul>
          </nav>
      </div> <!-- /.overlay-menu-item -->

      <!-- header-search-content -->
      <div class="gradient-transparent overlay-search">
          <button type="button" class="overlay-close">Close</button>
          <div class="header-search-content">
              <div class="container">
                  <div class="row">
                      <div class="col-md-12">
                          <form action="#" method="get" class="searchform">
                              <div class="input-group" id="adv-search">
                                  <input type="text" class="form-controller" placeholder="Search for snippets" />
                                  <div class="input-group-btn">
                                      <div class="btn-group" role="group">
                                          <div class="dropdown dropdown-lg">
                                              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                  <span class="fa fa-caret-down"></span>
                                              </button>
                                              <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                  <div class="form-horizontal">
                                                      <div class="checkbox">
                                                          <label><input type="checkbox"> From Blog</label>
                                                      </div>
                                                      <div class="checkbox">
                                                          <label><input type="checkbox">Find Your Apartment</label>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <button type="submit" class="btn btn-primary">
                                              <span class="fa fa-search" aria-hidden="true"></span>
                                          </button>
                                      </div>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div><!-- /.header-search-content -->  

      <!-- Registrar Or Sign In-content -->
      <div class="cd-user-modal">
          <div class="cd-user-modal-container">
              <ul class="cd-switcher">
                  <li><a href="#0">Sign in</a></li>
                  <li><a href="#0">New account</a></li>
              </ul>

              <!-- log in form -->
              <div id="cd-login"> 
                  <form class="cd-form">
                      <p class="fieldset">
                          <label class="image-replace cd-email" for="signin-email">E-mail</label>
                          <input class="full-width has-padding has-border" id="signin-email" type="email" placeholder="E-mail">
                          <span class="cd-error-message">Error message here!</span>
                      </p>

                      <p class="fieldset">
                          <label class="image-replace cd-password" for="signin-password">Password</label>
                          <input class="full-width has-padding has-border" id="signin-password" type="text"  placeholder="Password">
                          <a href="#0" class="hide-password">Hide</a>
                          <span class="cd-error-message">Error message here!</span>
                      </p>

                      <p class="fieldset">
                          <input type="checkbox" id="remember-me" checked>
                          <label for="remember-me">Remember me</label>
                      </p>

                      <p class="fieldset">
                          <input class="full-width" type="submit" value="Login">
                      </p>
                  </form>
                  
                  <p class="cd-form-bottom-message">
                      <a href="#0">Forgot your password?</a>
                  </p>
                  <a href="#0" class="cd-close-form">Close</a>
              </div> <!-- cd-login -->

              <!-- sign up form -->
              <div id="cd-signup">
                  <form class="cd-form">
                      <p class="fieldset">
                          <label class="image-replace cd-username" for="signup-username">Username</label>
                          <input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Username">
                          <span class="cd-error-message">Error message here!</span>
                      </p>

                      <p class="fieldset">
                          <label class="image-replace cd-email" for="signup-email">E-mail</label>
                          <input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail">
                          <span class="cd-error-message">Error message here!</span>
                      </p>

                      <p class="fieldset">
                          <label class="image-replace cd-password" for="signup-password">Password</label>
                          <input class="full-width has-padding has-border" id="signup-password" type="text"  placeholder="Password">
                          <a href="#0" class="hide-password">Hide</a>
                          <span class="cd-error-message">Error message here!</span>
                      </p>

                      <p class="fieldset">
                          <input type="checkbox" id="accept-terms">
                          <label for="accept-terms">I agree to the <a href="#0">Terms</a></label>
                      </p>

                      <p class="fieldset">
                          <input class="full-width has-padding" type="submit" value="Create account">
                      </p>
                  </form>

                  <a href="#0" class="cd-close-form">Close</a>
              </div> <!-- cd-signup -->
              
              <!-- reset password form -->
              <div id="cd-reset-password">
                  <p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

                  <form class="cd-form">
                      <p class="fieldset">
                          <label class="image-replace cd-email" for="reset-email">E-mail</label>
                          <input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
                          <span class="cd-error-message">Error message here!</span>
                      </p>
                      <p class="fieldset">
                          <input class="full-width has-padding" type="submit" value="Reset password">
                      </p>
                  </form>

                  <p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
              </div> <!-- cd-reset-password -->
              <a href="#0" class="cd-close-form">Close</a>
          </div> <!-- cd-user-modal-container -->
      </div> <!-- cd-user-modal -->
  </div><!-- /.header-overlay-content -->

  <!-- ======slider Area====== --> 
  <div class="slider-area">
      <div class="pogoSlider">
          <div class="pogoSlider-slide" data-transition="expandReveal" data-duration="1000" style="background-image:url({{asset('frontend/assets/images/slider-one.png')}});">
              <div class="container-slider one">                    
                  <div class="row">
                      <div class="col-md-12">
                          <div class="slider-text-content">
                              <h3 class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="500" data-delay="500">Good Service is our passion</h3>
                              <h2 class="pogoSlider-slide-element" data-in="slide-left" data-out="slideUp" data-duration="500" data-delay="500">Awesome apartment Villa</h2>
                              <p class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="500" data-delay="500">No matter what the weather, no matter what the situation we are in, if we have the right perspective in life, life will always be beautiful!</p>
                              <a href="#" class="button pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="500" data-delay="500">Special Offer</a>
                          </div><!-- /.text-content -->
                      </div><!-- /.col-md-12 -->
                  </div><!-- /.row -->
              </div><!-- /.container-slider -->
          </div>
        
          <div class="pogoSlider-slide" data-transition="expandReveal" data-duration="1000" style="background-image:url({{asset('frontend/assets/images/slider-one.png')}});">
              <div class="container-slider one">                    
                  <div class="row">
                      <div class="col-md-12">
                          <div class="slider-text-content">
                              <h3 class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="500" data-delay="500">Good Service is our passion</h3>
                              <h2 class="pogoSlider-slide-element" data-in="slide-left" data-out="slideUp" data-duration="500" data-delay="500">Awesome apartment Villa</h2>
                              <p class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="500" data-delay="500">No matter what the weather, no matter what the situation we are in, if we have the right perspective in life, life will always be beautiful!</p>
                              <a href="#" class="button pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="500" data-delay="500">Special Offer</a>
                          </div><!-- /.text-content -->
                      </div><!-- /.col-md-12 -->
                  </div><!-- /.row -->
              </div><!-- /.container-slider -->
          </div>
      </div><!-- .pogoSlider -->
  </div><!-- /.slider-area container-fluid -->

  <!-- ====== Category Menu ====== --> 
  <div class="category-menu margin-less-top">
      <div class="container-fluid pd-zero">
          <div class="row">
              <div class="col-md-12">
                  <div class="category-menu-content">
                      <div class="category-title">
                          <h3><span>We Provide</span></h3>
                      </div><!-- /.category-titel -->
                      <div class="category-slider bg-white-smoke owl-carousel">
                          <div class="item">
                              <div class="category-list style-one">
                                  <a href="#"><img src="{{asset('frontend/assets/images/category/category-one.png')}}" alt="no image" />
                                  <h4>Family House</h4></a>
                              </div><!-- /.category-list -->
                          </div><!-- /.item -->
                          <div class="item">
                              <div class="category-list style-one">
                                  <a href="#"><img src="{{asset('frontend/assets/images/category/category-two.png')}}" alt="no image" />
                                  <h4>Apartment</h4></a>
                              </div><!-- /.category-list -->
                          </div><!-- /.item -->
                          <div class="item">
                              <div class="category-list style-one">
                                  <a href="#"><img src="{{asset('frontend/assets/images/category/category-three.png')}}" alt="category" />
                                  <h4>Sublet</h4></a>
                              </div><!-- /.category-list -->
                          </div><!-- /.item -->
                          <div class="item">
                              <div class="category-list style-one">
                                  <a href="#"><img src="{{asset('frontend/assets/images/category/category-four.png')}}" alt="category" />
                                  <h4>Bachelor Mess</h4></a>
                              </div><!-- /.category-list -->
                          </div><!-- /.item -->
                          <div class="item">
                              <div class="category-list style-one">
                                  <a href="#"><img src="{{asset('frontend/assets/images/category/category-five.png')}}" alt="category" />
                                  <h4>Office</h4></a>
                              </div><!-- /.category-list -->
                          </div><!-- /.item -->
                          <div class="item">
                              <div class="category-list style-one">
                                 <a href="#"> <img src="{{asset('frontend/assets/images/category/category-six.png')}}" alt="category" />
                                  <h4>Garage</h4></a>
                              </div><!-- /.category-list -->
                          </div><!-- /.item -->
                          <div class="item">
                              <div class="category-list style-one">
                                  <a href="#"><img src="{{asset('frontend/assets/images/category/category-seven.png')}}" alt="category" />
                                  <h4>Factory</h4></a>
                              </div><!-- /.category-list -->
                          </div><!-- /.item -->
                          <div class="item">
                              <div class="category-list style-one">
                                  <a href="#"><img src="{{asset('frontend/assets/images/category/category-eight.png')}}" alt="category" />
                                  <h4>Hall Room</h4></a>
                              </div><!-- /.category-list -->
                          </div><!-- /.item -->
                          <div class="item">
                              <div class="category-list style-one">
                                  <a href="#"><img src="{{asset('frontend/assets/images/category/category-nine.png')}}" alt="category" />
                                  <h4>Warehouse</h4></a>
                              </div><!-- /.category-list -->
                          </div><!-- /.item --> 
                          <div class="item">
                              <div class="category-list style-one">
                                  <a href="#"><img src="{{asset('frontend/assets/images/category/category-ten.png')}}" alt="category" />
                                  <h4>Female Mess</h4></a>
                              </div><!-- /.category-list -->
                          </div><!-- /.item -->
                          <div class="item">
                              <div class="category-list style-one">
                                 <a href="#"> <img src="{{asset('frontend/assets/images/category/category-six.png')}}" alt="category" />
                                  <h4>Garage</h4></a>
                              </div><!-- /.category-list -->
                          </div><!-- /.item -->
                          <div class="item">
                              <div class="category-list style-one">
                                  <a href="#"><img src="{{asset('frontend/assets/images/category/category-five.png')}}" alt="category" />
                                  <h4>Office</h4></a>
                              </div><!-- /.category-list -->
                          </div><!-- /.item -->
                          <div class="item">
                              <div class="category-list style-one">
                                  <a href="#"><img src="{{asset('frontend/assets/images/category/category-three.png')}}" alt="category" />
                                  <h4>Sublet</h4></a>
                              </div><!-- /.category-list -->
                          </div><!-- /.item -->
                      </div><!-- /.category-slider -->  
                  </div><!-- /.category-menu-content -->
              </div> <!-- category-menu -->
          </div><!-- /.col-md-12 -->
      </div><!-- /.row -->
  </div><!-- /.catagory-menu -->

  <!-- ====== Availability Area ======= --> 
  <div class="availability-area bg-white-smoke">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="heading-content-three">
                      <h2 class="title">For rates &amp; Availability</h2>
                      <h5 class="sub-title">Search your <span>House</span></h5>
                  </div><!-- /.Availability-content -->
              </div><!-- /.col-md-12 -->
          </div><!-- /.row --> 
          <div class="row">
              <div class="col-md-12">
                  <form action="#" method="get" class="advance_search_query">
                      <div class="form-content">
                          <div class="form-group">
                              <label>Living Aria</label>
                              <input type="text" name="FirstName" placeholder="Where do you want to live?">
                          </div><!-- /.form-group -->
                          <div class="form-group">
                              <label>Type</label>
                              <select>
                                 <option value="volvo">Apartments</option>
                                 <option value="saab">Saab</option>
                                 <option value="mercedes">Mercedes</option>
                                 <option value="audi">Audi</option>
                              </select>
                          </div><!-- /.form-group -->
                          <div class="form-group">
                              <label>Price</label>
                              <input type="text" name="FirstName" placeholder="min">
                          </div><!-- /.form-group -->
                          <div class="form-group">
                              <label>Male</label>
                              <input type="text" name="FirstName" placeholder="max">
                          </div><!-- /.form-group -->
                          <div class="form-group">
                              <label>For</label>
                              <select>
                                <option value="volvo">Family</option>
                                <option value="saab">Saab</option>
                                <option value="mercedes">Mercedes</option>
                                <option value="audi">Audi</option>
                              </select>
                          </div><!-- /.form-group -->
                      </div><!-- /.form-content -->
                      <button type="submit" class=" button nevy-button">Check Availability</button>
                  </form> <!-- /.advance_search_query -->
              </div><!-- /.col-md-12 -->
          </div><!-- /.row -->
      </div><!-- /.container  -->
  </div><!-- /.Availability-area -->

  <!-- ====== About Us Area ====== --> 
  <div class="aboutus-area">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="heading-content-one">
                      <h2 class="title">About Us</h2>
                      <h5 class="sub-title">Welcome to our House Rent Company</h5>
                  </div><!-- /.heading-content -->
              </div><!-- /.col-md-12 -->
          </div><!-- /.row -->

          <div class="row">
              <div class="col-md-2">
                  <div class="tab-list">
                      <ul class="nav nav-tabs about-tab hidden-xs hidden-sm" role="tablist">
                          <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">About Company</a>
                          </li>
                          <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Terms &amp; Condition</a>
                          </li>
                          <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Our specialty</a>
                          </li>
                          <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Our specialty</a>
                          </li>
                      </ul>
                      <form class="hidden-md hidden-lg">
                          <select class="about-mobile">
                              <option value='0'>About Company</option>
                              <option value='1'>Terms &amp; Condition</option>
                              <option value='2'>Our specialty</option>
                              <option value='3'>Our specialty</option>
                          </select>
                      </form>
                  </div> <!-- /.tab-list -->
              </div> <!-- /.col-md-2 -->

              <div class="col-md-10">
                  <div class="tab-content">
                      <div role="tabpanel" class="tab-pane active row" id="home">
                          <div class="col-md-6">
                              <div class="text-content">
                                  <p>Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris egeth lorem ultricies ferme is ntum a inti diam. Morbi mollis pellden tesque offs aiug ueia nec rhoncus. Nam ute ultricies. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam. Morbi mollis pellen tesque offs aiug ueia nec rhoncus. Nam ute ultricies.</p>
                                  <ul>
                                      <li>Amorem ipsum dolor sit amet, consectetur </li>
                                       <li>Cras etitikis mauris egeth lorem ultricies</li>
                                       <li>Amorem ipsum dolor sit amet, consectetur </li>
                                       <li>Cras etitikis mauris egeth lorem ultricies</li>
                                       <li>Amorem ipsum dolor sit amet, consectetur </li>
                                       <li>Cras etitikis mauris egeth lorem ultricies</li>
                                  </ul>
                              </div><!-- /.text-content -->    
                          </div><!-- /.col-md-6 -->
                          <div class="col-md-6">
                              <div class="image-content">
                                  <img src="{{asset('frontend/assets/images/about-image.png')}}" alt="about" />
                              </div><!-- /.text-content -->
                          </div><!-- /.col-md-6 -->
                      </div> <!-- /.home -->
                        
                      <div role="tabpanel" class="tab-pane fade row" id="profile">
                          <div class="col-md-6">
                              <div class="text-content">
                                  <p>Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris egeth lorem ultricies ferme is ntum a inti diam. Morbi mollis pellden tesque offs aiug ueia nec rhoncus. Nam ute ultricies. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam. Morbi mollis pellen tesque offs aiug ueia nec rhoncus. Nam ute ultricies.</p>
                                  <ul>
                                      <li>Amorem ipsum dolor sit amet, consectetur </li>
                                      <li>Cras etitikis mauris egeth lorem ultricies</li>
                                      <li>Amorem ipsum dolor sit amet, consectetur </li>
                                      <li>Cras etitikis mauris egeth lorem ultricies</li>
                                      <li>Amorem ipsum dolor sit amet, consectetur </li>
                                      <li>Cras etitikis mauris egeth lorem ultricies</li>
                                  </ul>
                              </div><!-- /.text-content -->    
                          </div><!-- /.col-md-6 -->
                          <div class="col-md-6">
                              <div class="image-content">
                                  <img src="{{asset('frontend/assets/images/about-image.png')}}" alt="about" />
                              </div><!-- /.text-content -->
                          </div><!-- /.col-md-6 -->
                      </div> <!-- /.profile -->
                      
                      <div role="tabpanel" class="tab-pane fade row" id="messages">
                          <div class="col-md-6">
                              <div class="text-content">
                                  <p>Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris egeth lorem ultricies ferme is ntum a inti diam. Morbi mollis pellden tesque offs aiug ueia nec rhoncus. Nam ute ultricies. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam. Morbi mollis pellen tesque offs aiug ueia nec rhoncus. Nam ute ultricies.</p>
                                  <ul>
                                      <li>Amorem ipsum dolor sit amet, consectetur </li>
                                      <li>Cras etitikis mauris egeth lorem ultricies</li>
                                      <li>Amorem ipsum dolor sit amet, consectetur </li>
                                      <li>Cras etitikis mauris egeth lorem ultricies</li>
                                      <li>Amorem ipsum dolor sit amet, consectetur </li>
                                      <li>Cras etitikis mauris egeth lorem ultricies</li>
                                  </ul>
                              </div><!-- /.text-content -->    
                          </div><!-- /.col-md-6 -->
                          <div class="col-md-6">
                            <div class="image-content">
                                <img src="{{asset('frontend/assets/images/about-image.png')}}" alt="about" />
                            </div><!-- /.text-content -->
                          </div><!-- /.col-md-6 -->
                       </div> <!-- /.messages -->
                  </div> <!-- /.tab-content -->
               </div><!-- /.col-md-10 -->
          </div><!-- /.row -->
      </div> <!-- /.container -->
  </div> <!-- /.aboutus-area -->

  <!-- ====== Apartments Area ====== --> 
  <div class="apartments-area bg-gray-color">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="heading-content-one border">
                      <h2 class="title">Rooms &amp; Apartments</h2>
                      <h5 class="sub-title">Find Your Rooms, for your abaility</h5>
                  </div><!-- /.Apartments-heading-content -->
              </div><!-- /.col-md-12 -->
          </div><!-- /.row -->
          <div class="row">
              <?php $properties = App\Property::all(); ?>
              @foreach ($properties as $property)
              <div class="col-md-4 col-sm-6 col-xs-6">
                  <div class="apartments-content">
                      <div class="image-content">
                         <a href="{{url('property_single',$property->id)}}"><img src="{{$property->image}}" alt="apartment" style="height: 300px;width:300px;" /></a>
                      </div><!-- /.image-content -->
                 
                      <div class="text-content">
                          <div class="top-content">
                             <h3><a href="{{url('property_single',$property->id)}}">{{$property->title}}</a></h3>
                             <span>
                                 <i class="fa fa-map-marker"></i>
                                 {{$property->address}}
                             </span> 
                          </div><!-- /.top-content -->
                          <div class="bottom-content clearfix">
                              <div class="meta-bed-room">
                                 <i class="fa fa-bed"></i> {{$property->bedroom}}
                              </div>
                              <div class="meta-bath-room">                                
                                 <i class="fa fa-bath"></i>{{$property->bathroom}}
                              </div>
                              <span class="clearfix"></span>
                              <div class="rent-price pull-left">
                                {{$property->price}}
                              </div>
                              <div class="share-meta dropup pull-right">
                                  <ul>
                                      <li class="dropup">
                                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></a>
                                          <ul class="dropdown-menu">
                                              <li>
                                                  <a href="#"><i class="fa fa-facebook"></i></a>
                                              </li>
                                              <li>
                                                  <a href="#"><i class="fa fa-twitter"></i></a>
                                              </li>
                                              <li>
                                                  <a href="#"><i class="fa fa-instagram"></i></a>
                                              </li>
                                              <li>
                                                  <a href="#"><i class="fa fa-google-plus"></i></a>
                                              </li>
                                          </ul>
                                      </li>
                                      <li>
                                         <a href="#"><i class="fa fa-star-o"></i></a>
                                      </li>
                                  </ul>
                              </div>
                          </div><!-- /.bottom-content -->
                      </div><!-- /.text-content -->
                  </div><!-- /.partments-content -->
              </div><!-- /.col-md-4 -->
              @endforeach
          </div><!-- /.row -->
          <a href="#" class="button nevy-button">All Apartments</a>
      </div><!-- /.container -->
  </div><!-- /.Apartments-area-->

  <!-- ====== Fun Facts Area======= -->
  <div class="fun-fects-area" style="background-image:url({{asset('frontend/assets/images/count-down-image.png')}})">
      <div class="container">
          <div class="stat">
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="milestone-counter">
                      <h3 class="stat-count highlight" data-form="1" data-to="2500" data-speed="3000">2500</h3>
                      <div class="milestone-details">Clients</div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="milestone-counter">
                      <h3 class="stat-count highlight" data-form="1" data-to="3055" data-speed="3000">3055</h3>
                      <div class="milestone-details">Booking</div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="milestone-counter">
                      <h3 class="stat-count highlight" data-form="1" data-to="50" data-speed="3000">50</h3>
                      <div class="milestone-details">Swimming</div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="milestone-counter">
                      <h3 class="stat-count highlight" data-form="1" data-to="1530" data-speed="3000">1530</h3>
                      <div class="milestone-details">Apartment</div>
                  </div>
              </div>
          </div><!-- stat -->
      </div><!-- /.container -->
  </div><!-- /.fun-fects-area -->

  <!-- ====== Gallery Area ====== --> 
  <div class="gallery-area">
      <div class="container-fluid">
          <div class="container-large-device">
              <div class="row">
                  <div class="col-md-7">
                      <div class="gallery-left-content">
                          <div class="row">
                              <div class="col-md-4 col-sm-6 col-xs-6">
                                  <a class="image-pop-up" href="{{asset('frontend/assets/images/gallery/gallery-one.png')}}">
                                      <img src="{{asset('frontend/assets/images/gallery/gallery-one.png')}}" alt="gallery" />
                                  </a>
                              </div><!-- /.col-md-4 -->
                              <div class="col-md-4 col-sm-6 col-xs-6">
                                  <a class="image-pop-up" href="{{asset('frontend/assets/images/gallery/gallery-two.png')}}">
                                      <img src="{{asset('frontend/assets/images/gallery/gallery-two.png')}}" alt="gallery" />
                                  </a>
                              </div><!-- /.col-md-4 -->
                              <div class="clearfix visible-xs-block"></div>
                              <div class="col-md-4 col-sm-6 col-xs-6">
                                  <a class="image-pop-up" href="{{asset('frontend/assets/images/gallery/gallery-three.png')}}">
                                      <img src="{{asset('frontend/assets/images/gallery/gallery-three.png')}}" alt="gallery" />
                                  </a>
                              </div><!-- /.col-md-4 -->
                              <div class="col-md-4 col-sm-6 col-xs-6">
                                  <a class="image-pop-up" href="{{asset('frontend/assets/images/gallery/gallery-four.png')}}">
                                      <img src="{{asset('frontend/assets/images/gallery/gallery-four.png')}}" alt="gallery" />
                                  </a>
                              </div><!-- /.col-md-4 -->
                              <div class="clearfix visible-xs-block"></div>
                              <div class="col-md-4 col-sm-6 col-xs-6">
                                  <a class="image-pop-up" href="{{asset('frontend/assets/images/gallery/gallery-five.png')}}">
                                      <img src="{{asset('frontend/assets/images/gallery/gallery-five.png')}}" alt="gallery" />
                                  </a>
                              </div><!-- /.col-md-4 -->
                              <div class="col-md-4 col-sm-6 col-xs-6">
                                  <a class="image-pop-up" href="#">
                                      <img src="{{asset('frontend/assets/images/gallery/gallery-six.png')}}" alt="gallery" />
                                  </a>
                              </div><!-- /.col-md-4 -->
                          </div><!-- /.row -->
                      </div><!-- /.left-content -->
                  </div><!-- /.col-md-7 -->
                  <div class="col-md-5">
                      <div class="gallery-right-content">
                          <h2>Our<br/> Photo Gallery</h2>
                          <h3>Best of our <br/>Event portfolio Photos</h3>
                          <p>Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam. Morbi mollis pellen tesque offs aiug ueia nec rhoncus. Nam ute ultricies.</p>
                          <a href="gallery.html" class="button nevy-button">All Photos &amp; Video</a>
                      </div><!-- /.right-content -->
                  </div><!-- /.col-md-5 -->
              </div><!-- /.row -->
          </div><!-- /.container-large-device  -->
      </div><!-- /.container-fluid-->
  </div><!-- /.gallery-area -->
  
  <!-- ====== Call To Action ======= --> 
  <div class="call-to-action overlay-bg" style="background-image:url(assets/images/contact-bg-image.png)">
      <div class="container">
          <div class="row tb">
              <div class="col-md-6 col-sm-6 tb-cell">
                  <div class="contact-left-content">
                      <h3>Do you want to Rent your House</h3>
                      <h4>Call us and list your property here</h4>
                  </div><!-- /.contact-left-content -->
              </div><!-- /.col-md-6 -->
              <div class="col-md-6 col-sm-6 tb-cell">
                  <div class="contact-right-content">
                      <h4><a href="#">+880123654987<span>company@gmail.com</span></a></h4>
                      <a href="#" class="button">Contact us</a>
                  </div><!-- /.contact-right-content -->
              </div><!-- /.col-md-6 -->
          </div><!-- /.row -->
      </div><!-- /.container -->
  </div><!-- /.call-to-action -->

  <!-- ====== Testimonial Area ====== --> 
  <div class="testimonial-area bg-gray-color">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="testimonial-heading-content">
                      <h2 class="title">Testimonial</h2>
                      <i class="fa fa-quote-right"></i>
                      <h2 class="sub-title">Some Reviews</h2>
                  </div><!-- /.testimonial-heading-content -->
              </div><!-- /.col-md-12 -->
          </div><!-- /.row -->
          <div class="row">
              <div class="col-md-12">
                  <div class="testimonial-slider owl-carousel owl-theme">
                      <div class="item">
                          <div class="client-image">
                              <img src="{{asset('frontend/assets/images/testimonial-image.png')}}" alt="testimonial" />
                          </div><!-- /.client-image -->
                          <div class="client-content">                            
                              <h3>Single Rakib</h3>
                              <h5>softhopper Manager</h5>
                              <p>Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam.</p>
                              <div class="star">
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                              </div><!-- /.star -->
                          </div><!-- /.client-content -->
                      </div><!-- /.item -->
                      <div class="item">
                          <div class="client-image">
                              <img src="{{asset('frontend/assets/images/testimonial-image.png')}}" alt="testimonial" />
                          </div><!-- /.client-image -->
                          <div class="client-content">                            
                              <h3>Single Rakib</h3>
                              <h5>softhopper Manager</h5>
                              <p>Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam.</p>
                              <div class="star">
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                              </div><!-- /.star -->
                          </div><!-- /.client-content -->
                      </div><!-- /.item -->
                      <div class="item">
                          <div class="client-image">
                              <img src="{{asset('frontend/assets/images/testimonial-image.png')}}" alt="testimonial" />
                          </div><!-- /.client-image -->
                          <div class="client-content">                            
                              <h3>Single Rakib</h3>
                              <h5>softhopper Manager</h5>
                              <p>Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam.</p>
                              <div class="star">
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                              </div><!-- /.star -->
                          </div><!-- /.client-content -->
                      </div><!-- /.item -->
                      <div class="item">
                          <div class="client-image">
                              <img src="{{asset('frontend/assets/images/testimonial-image.png')}}" alt="testimonial" />
                          </div><!-- /.client-image -->
                          <div class="client-content">                            
                              <h3>Single Rakib</h3>
                              <h5>softhopper Manager</h5>
                              <p>Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam.</p>
                              <div class="star">
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                              </div><!-- /.star -->
                          </div><!-- /.client-content -->
                      </div><!-- /.item -->
                      <div class="item">
                          <div class="client-image">
                              <img src="{{asset('frontend/assets/images/testimonial-image.png')}}" alt="testimonial" />
                          </div><!-- /.client-image -->
                          <div class="client-content">                            
                              <h3>Single Rakib</h3>
                              <h5>softhopper Manager</h5>
                              <p>Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam.</p>
                              <div class="star">
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                              </div><!-- /.star -->
                          </div><!-- /.client-content -->
                      </div><!-- /.item -->
                      <div class="item">
                          <div class="client-image">
                              <img src="{{asset('frontend/assets/images/testimonial-image.png')}}" alt="testimonial" />
                          </div><!-- /.client-image -->
                          <div class="client-content">                            
                              <h3>Single Rakib</h3>
                              <h5>softhopper Manager</h5>
                              <p>Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam.</p>
                              <div class="star">
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                              </div><!-- /.star -->
                          </div><!-- /.client-content -->
                      </div><!-- /.item -->
                      <div class="item">
                          <div class="client-image">
                              <img src="{{asset('frontend/assets/images/testimonial-image.png')}}" alt="testimonial" />
                          </div><!-- /.client-image -->
                          <div class="client-content">                            
                              <h3>Single Rakib</h3>
                              <h5>softhopper Manager</h5>
                              <p>Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam.</p>
                              <div class="star">
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                              </div><!-- /.star -->
                          </div><!-- /.client-content -->
                      </div><!-- /.item -->
                      <div class="item">
                          <div class="client-image">
                              <img src="{{asset('frontend/assets/images/testimonial-image.png')}}" alt="testimonial" />
                          </div><!-- /.client-image -->
                          <div class="client-content">                            
                              <h3>Single Rakib</h3>
                              <h5>softhopper Manager</h5>
                              <p>Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam.</p>
                              <div class="star">
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                              </div><!-- /.star -->
                          </div><!-- /.client-content -->
                      </div><!-- /.item -->
                  </div><!-- /.testimonial-slider -->           
              </div><!-- /.col-md-12 -->
          </div><!-- /.row -->
      </div><!-- /.container -->
  </div><!-- /.testimonial-area -->

  <!-- ====== Contact Area ====== --> 
  <div class="contact-area">
      <div class="container-large-device">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-md-12">
                      <div class="heading-content-two available">
                          <h2 class="title">We Are Available<br/> For You 24/7</h2>
                          <h5 class="sub-title">Our online support service is always 24 Hours</h5>
                      </div><!-- /.testimonial-heading-content -->
                  </div><!-- /.col-md-12 -->
              </div><!-- /.row -->
              <div class="row">
                  <div class="col-md-7">
                      <div class="map-left-content">
                          <iframe width="600" height="350" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyC871wKM6aoCLSV_pT3xBVsYzNGXaDh7Pw&q=121King+St,Melbourne+VIC+3000,Australia" allowfullscreen="allowfullscreen"></iframe>
                      </div><!-- /.mapl-left-content -->
                  </div><!-- /.col-md-7 -->
                  <div class="col-md-5">
                      <div class="map-right-content">
                          <div class="row">
                              <div class="col-md-6 col-sm-6">
                                  <div class="contact">
                                      <h4><i class="fa fa-address-book"></i>Address</h4>
                                      <p>112/B - Road 121, King/St Melbourne Australia</p>
                                  </div><!-- /.contact -->
                              </div><!-- /.col-md-6 -->
                              <div class="col-md-6 col-sm-6">
                                  <div class="contact">
                                      <h4><i class="fa fa-envelope"></i>Mail</h4>
                                      <p>yourmail@domain.com houserent@domain.com</p>
                                  </div><!-- /.contact -->
                              </div><!-- /.col-md-6 -->
                          </div><!-- /.row -->
                          <div class="row">
                              <div class="col-md-6 col-sm-6">
                                  <div class="contact">
                                      <h4><i class="fa fa-phone-square"></i>Call</h4>
                                      <p>+99 0215469875 <br/>666 35874692050</p>
                                  </div><!-- /.contact -->
                              </div><!-- /.col-md-6 -->
                              <div class="col-md-6 col-sm-6">
                                  <div class="contact">
                                      <h4><i class="fa fa-user-circle"></i>Social account</h4>
                                      <div class="social-icon">
                                          <a href="#"><i class="fa fa-facebook"></i></a>
                                          <a href="#"><i class="fa fa-twitter"></i></a>
                                          <a href="#"><i class="fa fa-instagram"></i></a>
                                          <a href="#"><i class="fa fa-google-plus"></i></a>
                                      </div><!-- /.Social-icon -->
                                  </div><!-- /.contact -->
                              </div><!-- /.col-md-6 -->
                          </div><!-- /.row -->
                      </div><!-- /.map-right-content -->
                  </div><!-- /.col-md-5 -->
              </div><!-- /.row -->
          </div><!-- /.container-fluid -->
      </div>
  </div><!-- /.contact-area -->

  <!-- ====== Blog Area ====== --> 
  <div class="blog-area bg-gray-color">
      <div class="container">
          <div class="col-md-12">
              <div class="row">
                  <div class="heading-content-one">
                      <h2 class="title">Our Blog Post</h2>
                      <h5 class="sub-title">Our News Feed</h5>
                  </div><!-- /.blog-heading-content -->
              </div><!-- /.row -->
          </div><!-- /.col-md-12 -->
          <div class="row">
              <div class="col-md-4 col-sm-6 col-xs-6">
                  <article class="post">
                      <figure class="post-thumb">
                          <a href="blog-single.html">
                              <img src="{{asset('frontend/assets/images/blog/blog-one.png')}}" alt="blog" />
                          </a>
                      </figure><!-- /.post-thumb -->
                      <div class="post-content">  
                          <div class="entry-meta">
                              <span class="entry-date">
                                  July 25, 2016
                              </span>
                              <span class="devied"></span>
                              <span class="entry-category">
                                  <a href="#">Rooms &amp; suites</a>
                              </span>
                          </div><!-- /.entry-header -->
                          <div class="entry-header">
                              <h3><a href="blog-single.html">Finding best places to visit in California</a></h3>
                          </div><!-- /.entry-header -->
                          <div class="entry-footer">
                              <div class="entry-footer-meta">
                                  <span class="view"><i class="fa fa-eye"></i>35</span>
                                  <span class="like"><a href="#"><i class="fa fa-heart-o"></i>09</a></span>
                                  <span class="comments"><a href="#"><i class="fa fa-comments"></i>05</a></span>
                              </div><!-- /.entry-footer-meta -->
                          </div><!-- /.entry-footer -->
                      </div><!-- /.post-content -->
                  </article><!-- /.post -->
              </div><!-- /.col-md-4 -->
              <div class="col-md-4 col-sm-6 col-xs-6">
                  <article class="post">
                      <figure class="post-thumb">
                          <a href="blog-single.html">
                              <img src="{{asset('frontend/assets/images/blog/blog-two.png')}}" alt="blog" />
                          </a>
                      </figure><!-- /.post-thumb -->
                      <div class="post-content">  
                          <div class="entry-meta">
                              <span class="entry-date">
                                  July 25, 2016
                              </span>
                              <span class="devied"></span>
                              <span class="entry-category">
                                  <a href="#">Rooms &amp; suites</a>
                              </span>
                          </div><!-- /.entry-header -->
                          <div class="entry-header">
                              <h3><a href="blog-single.html">Finding best places to visit in California</a></h3>
                          </div><!-- /.entry-header -->
                          <div class="entry-footer">
                              <div class="entry-footer-meta">
                                  <span class="view"><i class="fa fa-eye"></i>35</span>
                                  <span class="like"><a href="#"><i class="fa fa-heart-o"></i>09</a></span>
                                  <span class="comments"><a href="#"><i class="fa fa-comments"></i>05</a></span>
                              </div><!-- /.entry-footer-meta -->
                          </div><!-- /.entry-footer -->
                      </div><!-- /.post-content -->
                  </article><!-- /.post -->
              </div><!-- /.col-md-4 -->
              <div class="col-md-4 col-sm-6 col-xs-6">
                  <article class="post">
                      <figure class="post-thumb">
                          <a href="blog-single.html">
                              <img src="{{asset('frontend/assets/images/blog/blog-three.png')}}" alt="blog" />
                          </a>
                      </figure><!-- /.post-thumb -->
                      <div class="post-content">  
                          <div class="entry-meta">
                              <span class="entry-date">
                                  July 25, 2016
                              </span>
                              <span class="devied"></span>
                              <span class="entry-category">
                                  <a href="#">Rooms &amp; suites</a>
                              </span>
                          </div><!-- /.entry-header -->
                          <div class="entry-header">
                              <h3><a href="blog-single.html">Finding best places to visit in California</a></h3>
                          </div><!-- /.entry-header -->
                          <div class="entry-footer">
                              <div class="entry-footer-meta">
                                  <span class="view"><i class="fa fa-eye"></i>35</span>
                                  <span class="like"><a href="#"><i class="fa fa-heart-o"></i>09</a></span>
                                  <span class="comments"><a href="#"><i class="fa fa-comments"></i>05</a></span>
                              </div><!-- /.entry-footer-meta -->
                          </div><!-- /.entry-footer -->
                      </div><!-- /.post-content -->
                  </article><!-- /.post -->
              </div><!-- /.col-md-4 -->
          </div><!-- /.row -->
          <a href="blog.html" class="button">show all</a>
      </div><!-- /.container -->
  </div><!-- /.Blog-area-->

   
    @endsection


