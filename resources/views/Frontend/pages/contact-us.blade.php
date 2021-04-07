@extends('Frontend.master')
@section('contact-us')
    <div class="container">
        <div class="row ">
            <div id="column-left" class="col-sm-4 col-md-4 col-lg-3 hidden-xs">
                <div id="category-menu" class="navbar collapse in  mb_40" aria-expanded="true" style="" role="button">
                    <div class="nav-responsive">
                        <ul class="nav  main-navigation collapse in">
                            <li><a href="#">Pharmacy</a></li>
                            <li><a href="#">Health</a></li>
                            <li><a href="#">Beauty</a></li>
                            <li><a href="#">Vitamins</a></li>
                            <li><a href="#">Sweating</a></li>
                            <li><a href="#">Coughs & Colds</a></li>
                            <li><a href="#">Hair Loss</a></li>
                            <li><a href="#">Weight Loss</a></li>
                            <li><a href="#">Antifungals</a></li>
                            <li><a href="#">Pain Relief</a></li>
                            <li><a href="#">Stop Smoking</a></li>
                            <li><a href="#">Skin Conditions</a></li>
                            <li><a href="#">Top Brands</a></li>
                        </ul>
                    </div>
                </div>
                <div class="left_banner left-sidebar-widget mt_30 mb_40"> <a href="#"><img src="{{ asset('/') }}/Frontend/images/left1.jpg" alt="Left Banner" class="img-responsive" /></a> </div>
            </div>
            <div class="col-sm-8 col-md-8 col-lg-9 mtb_30">
                <!-- contact  -->
                <div class="row">
                    <div class="col-md-4 col-xs-12 contact">
                        <div class="location mb_50">
                            <h5 class="capitalize mb_20">Our Location</h5>
                            <div class="address">Office address
                                <br> 124,Lorem Ipsum has been
                                <br> text ever since the 1500</div>
                            <div class="call mt_10"><i class="fa fa-phone" aria-hidden="true"></i>+91-9987-654-321</div>
                        </div>
                        <div class="Career mb_50">
                            <h5 class="capitalize mb_20">Careers</h5>
                            <div class="address">dummy text ever since the 1500s, simply dummy text of the typesetting industry. </div>
                            <div class="email mt_10"><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:careers@yourdomain.com" target="_top">careers@yourdomain.com</a></div>
                        </div>
                        <div class="Hello mb_50">
                            <h5 class="capitalize mb_20">Say Hello</h5>
                            <div class="address">simply dummy text of the printing and typesetting industry.</div>
                            <div class="email mt_10"><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@yourdomailname.com" target="_top">info@yourdomailname.com</a></div>
                        </div>
                    </div>
                    <div class="col-md-8 col-xs-12 contact-form mb_50">
                        <!-- Contact FORM -->
                        <div id="contact_form">
                            <form id="contact_body" method="post" action="http://html.lionode.com/healthcare/hc001/contact_me.php">
                                <!--                                <label class="full-with-form" ><span>Name</span></label>
              -->
                                <input class="full-with-form " type="text" name="name" placeholder="Name" data-required="true" />
                                <!--                <label class="full-with-form" ><span>Email Address</span></label>
              -->
                                <input class="full-with-form  mt_30" type="email" name="email" placeholder="Email Address" data-required="true" />
                                <!--                <label class="full-with-form" ><span>Phone Number</span></label>
              -->
                                <input class="full-with-form  mt_30" type="text" name="phone1" placeholder="Phone Number" maxlength="15" data-required="true" />
                                <!--                <label class="full-with-form" ><span>Subject</span></label>
              -->
                                <input class="full-with-form  mt_30" type="text" name="subject" placeholder="Subject" data-required="true">
                                <!--                                <label class="full-with-form" ><span>Attachment</span></label>
              -->
                                <!--                                <label class="full-with-form" ><span>Message</span></label>
              -->
                                <textarea class="full-with-form  mt_30" name="message" placeholder="Message" data-required="true"></textarea>
                                <button class="btn mt_30" type="submit">Send Message</button>
                            </form>
                            <div id="contact_results"></div>
                        </div>
                        <!-- END Contact FORM -->
                    </div>
                </div>
                <!-- map  -->
                <div class="row">
                    <div class="col-xs-12 map mb_80">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
