<footer class="footer-area" style="background-image:url(assets/images/footer-bg.png)">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="widget widget_about yellow-color">    
                    <div class="widget-title-area">
                        <h3 class="widget-title">
                            About House Rent
                        </h3><!-- /.widget-title -->
                    </div><!-- /.widget-title-area -->
                    <div class="widget-about-content">
                        <img src="{{asset($setting->footer_logo)}}" alt="house" />
                        <p>{{$setting->footer_text}}</p>
                        <a href="#" class="button">More</a>
                    </div><!-- /.widget-content -->
                </div><!-- /.widget widget_about -->
            </div><!-- /.col-md-4 -->
            <div class="col-md-4">
                <div class="widget widget_place_category yellow-color">
                    <div class="widget-title-area">
                        <h3 class="widget-title">Contact Info</h3><!-- /.widget-title -->
                    </div><!-- /.widget-title-area -->
                    <ul> 
                        <li>PHone<a href="#">{{$setting->phone}}</a></li>
                        <li>Email <a href="#">{{$setting->email}}</a></li>
                        <li>Address <a href="#">{{$setting->address}}</a></li>
                       
                    </ul> 
                </div><!-- /.widget -->
            </div><!-- /.col-md-4 -->
            <div class="col-md-4">
                <div class="widget widget_instagram yellow-color">
                    <div class="widget-title-area">
                        <h3 class="widget-title">Instagram Image</h3><!-- /.widget-title -->
                    </div><!-- /.widget-title-area -->
                    <div class="instagram-image-content">
                        <a href="#"><img src="{{asset('frontend/assets/images/instagram/instagram-one.png')}}" alt="" /></a>
                        <a href="#"><img src="{{asset('frontend/assets/images/instagram/instagram-two.png')}}" alt="" /></a>
                        <a href="#"><img src="{{asset('frontend/assets/images/instagram/instagram-three.png')}}" alt="" /></a>
                        <a href="#"><img src="{{asset('frontend/assets/images/instagram/instagram-four.png')}}" alt="" /></a>
                        <a href="#"><img src="{{asset('frontend/assets/images/instagram/instagram-five.png')}}" alt="" /></a>
                        <a href="#"><img src="{{asset('frontend/assets/images/instagram/instagram-six.png')}}" alt="" /></a>

                    </div><!-- /.instagram-image-content -->
                </div><!-- /.widget -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <div class="bottom-content">
                    <p>Copyright  &copy;2017 <a href="#">Coding Crust</a></p>
                </div><!-- /.bottom-top-content -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
 </footer>