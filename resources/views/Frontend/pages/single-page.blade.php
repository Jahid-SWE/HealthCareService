@extends('Frontend.master')
@section('single-page')
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
                <div class="blog-category left-sidebar-widget mb_50">
                    <div class="heading-part mb_20 ">
                        <h2 class="main_title">Blog Category</h2>
                    </div>
                    <ul>
                        <li><a href="#">Appliances</a></li>
                        <li><a href="#">Mobile Phones</a></li>
                        <li><a href="#">Tablet PC & Accessories</a></li>
                        <li><a href="#">Consumer Electronics</a></li>
                        <li><a href="#">Computers & Networking</a></li>
                        <li><a href="#">Electrical & Tools</a></li>
                        <li><a href="#">Apparel</a></li>
                        <li><a href="#">Bags & Shoes</a></li>
                        <li><a href="#">Toys & Hobbies</a></li>
                        <li><a href="#">Watches & Jewelry</a></li>
                        <li><a href="#">Home & Garden</a></li>
                        <li><a href="#">Health & Beauty</a></li>
                        <li><a href="#">Outdoors & Sports</a></li>
                    </ul>
                </div>
                <div class="left-blog left-sidebar-widget mb_50">
                    <div class="heading-part mb_20 ">
                        <h2 class="main_title">Latest Post</h2>
                    </div>
                    <div id="left-blog">
                        <div class="row ">
                            <div class="blog-item mb_20">
                                <div class="post-format col-xs-4">
                                    <div class="thumb post-img"><a href="#"> <img src="{{ asset('/') }}/Frontend/images/blog/blog_img_03.jpg"  alt="HealthCare"></a></div>
                                </div>
                                <div class="post-info col-xs-8 ">
                                    <h5> <a href="single_blog.html">Unknown printer took a galley book.</a> </h5>
                                    <div class="date pull-left"> <i class="fa fa-calendar" aria-hidden="true"></i>11 May 2017 </div>
                                </div>
                            </div>
                            <div class="blog-item mb_20">
                                <div class="post-format col-xs-4">
                                    <div class="thumb post-img"><a href="#"> <img src="{{ asset('/') }}/Frontend/images/blog/blog_img_02.jpg"  alt="HealthCare"></a></div>
                                </div>
                                <div class="post-info col-xs-8 ">
                                    <h5> <a href="single_blog.html">Unknown printer took a galley book.</a> </h5>
                                    <div class="date pull-left"> <i class="fa fa-calendar" aria-hidden="true"></i>11 May 2017 </div>
                                </div>
                            </div>
                            <div class="blog-item mb_20">
                                <div class="post-format col-xs-4">
                                    <div class="thumb post-img"><a href="#"> <img src="{{ asset('/') }}/Frontend/images/blog/blog_img_01.jpg"  alt="HealthCare"></a></div>
                                </div>
                                <div class="post-info col-xs-8 ">
                                    <h5> <a href="single_blog.html">Unknown printer took a galley book.</a> </h5>
                                    <div class="date pull-left"> <i class="fa fa-calendar" aria-hidden="true"></i>11 May 2017 </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-8 col-md-8 col-lg-9 mtb_30">
                <!-- =====  BANNER STRAT  ===== -->
                <div class="breadcrumb ptb_20">
                    <h1>Fashions fade..</h1>
                    <ul>
                        <li><a href="index-2.html">Home</a></li>
                        <li><a href="blog_page.html">Home</a></li>
                        <li class="active">Fashions fade....</li>
                    </ul>
                </div>
                <!-- =====  BREADCRUMB END===== -->
                <div class="row">
                    <div class="blog-item listing-effect col-md-12 mb_50">
                        <div class="post-format">
                            <div class="thumb post-img"><a href="{{ asset('/') }}/Frontend/images/blog/blog_img_01.jpg" title="Beautiful Lady"> <img src="{{ asset('/') }}/Frontend/images/blog/blog_img_01.jpg"  alt="HealthCare"></a></div>
                            <div class="post-type"> <i class="fa fa-picture-o" aria-hidden="true"></i> </div>
                        </div>
                        <div class="post-info mtb_20 ">
                            <h2 class="mb_10"> <a href="single_blog.html">Unknown printer took a galley book.</a> </h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae provident minus similique porro assumenda illo dolore ducimus vero ipsum illum ipsa velit, deleniti accusantium repellat facilis tempora ab Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae provident minus similique porro assumenda illo dolore ducimus vero ipsum illum ipsa velit, deleniti accusantium repellat facilis tempora ab Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae provident minus similique porro assumenda illo dolore ducimus vero ipsum illum ipsa velit, deleniti accusantium repellat facilis tempora ab Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae provident minus similique porro assumenda illo dolore ducimus vero ipsum illum ipsa velit, deleniti accusantium repellat facilis tempora ab </p>
                        </div>
                        <blockquote>consectetur adipiscing elit. In rutrum odio urna, vitae ultrices mi malesuada ut. Praesent lacus erat, ultricies ut risus nec, pellentesque interdum purus. In mi justo, consectetur tincidunt sapien eget, venenatis volutpat risus. Maecenas eget pretium eros. Integer tincidunt aliquet ligula in vulputate. Ut ut justo facilisis, vulputate augue vel, vestibulum tortor. Nullam varius lacus non porttitor sodales. Vivamus ultricies est vitae pharetra convallis. Sed suscipit, nisi sit amet tempus mollis, mauris ante tempor risu</blockquote>
                        etur adipisicing elit. Repudiandae provident minus similique porro assumenda illo dolore ducimus vero ipsum illum ipsa velit, deleniti accusantium repellat facilis tempora ab Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae provident minus similique porro assumenda illo dolore ducimus vero ipsum illum ipsa velit, deleniti accusantium repellat facilis tempora ab Lorem ipsum dolor sit amet, consectet
                        <div class="details mtb_20">
                            <div class="date"> <i class="fa fa-calendar" aria-hidden="true"></i>11 May 2017 </div>
                        </div>
                        <div class="author-about mt_50">
                            <h3 class="author-about-title">About the Author</h3>
                            <div class="author mtb_30">
                                <div class="author-avatar"> <img alt="" src="{{ asset('/') }}/Frontend/images/user1.jpg"></div>
                                <div class="author-body">
                                    <h5 class="author-name"><a href="#">Radley Lobortis</a></h5>
                                    <div class="author-content mt_10">Vivamus imperdiet ex sed lobortis luctus. Aenean posuere nulla in turluctus. Aenean posuere nulla in tur pis porttitor laoreet. Quisque finibus aliquet purus. Ut et mi eu ante interdum .</div>
                                </div>
                            </div>
                        </div>
                        <div id="comments" class="comments-area mt_50">
                            <h3 class="comment-title">3 comments</h3>
                            <ul class="comment-list mt_30">
                                <li class="comment">
                                    <hr>
                                    <article class="comment-body mtb_30">
                                        <div class="comment-avatar"> <img alt="" src="{{ asset('/') }}/Frontend/images/user2.jpg"> </div>
                                        <div class="comment-main">
                                            <h5 class="author-name"> <a href="#" class="comment-name">Radley Lobortis</a> <small class="comment-date">8 months ago</small> </h5>
                                            <div class="comment-reply pull-right"> <a href="#"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a> </div>
                                            <div class="comment-content mt_10">Sed lobortis rpi luctus. Aenean posuere nulla in turluctus. Aenean posuere nulla in turs porttitor larpis porttitor larpis porttitor lauctus. Aenean posuere nulla in turpis porttitor laoreet. Quisque finibus aliquet purus.</div>
                                        </div>
                                    </article>
                                    <hr>
                                    <ol class="children">
                                        <li class="comment">
                                            <article class="comment-body mtb_30">
                                                <div class="comment-avatar"> <img alt="" src="{{ asset('/') }}/Frontend/images/user3.jpg"> </div>
                                                <div class="comment-main">
                                                    <h5 class="author-name"> <a href="#" class="comment-name">Lobortis Radley</a> <small class="comment-date">1 months ago</small> </h5>
                                                    <div class="comment-reply pull-right"> <a href="#"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a> </div>
                                                    <div class="comment-content mt_10">Dcenas euismod faucibus dolor a finibus.Maecenas euismod faucibus dolor a finibus.Maecenas euismod faucibus dolor a finibus.Maecenas euismod faucibus dolor a finibus.cenas euismod faucibus dolor a finibus.</div>
                                                </div>
                                            </article>
                                        </li>
                                    </ol>
                                </li>
                                <li class="comment">
                                    <hr>
                                    <article class="comment-body mtb_30">
                                        <div class="comment-avatar"> <img alt="" src="{{ asset('/') }}/Frontend/images/user1.jpg"> </div>
                                        <div class="comment-main">
                                            <h5 class="author-name"> <a href="#" class="comment-name">Sradle Vivamus </a> <small class="comment-date">8 days ago</small> </h5>
                                            <div class="comment-reply pull-right"> <a href="#"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a> </div>
                                            <div class="comment-content mt_10">Vivamus imperdiet ex sed lobortis luctus. Aenean posuere nulla in turpis porttitor laoreet. Quisque finibus aliquet purus. Ut et mi eu ante interdum dignissim pellentesque a mi.</div>
                                        </div>
                                    </article>
                                </li>
                            </ul>
                            <div class="leave-form">
                                <h3 class="comment-title mt_50 mb_30" id="reply-title">Leave A Comment</h3>
                                <!-- Comment Form -->
                                <div class="form-style" id="contact_form">
                                    <div id="contact_results"></div>
                                    <div class="row">
                                        <form id="contact_body" method="post">
                                            <div class="col-sm-6">
                                                <input class="full-with-form" type="text" name="name" placeholder="Name" data-required="true" />
                                            </div>
                                            <div class="col-sm-6">
                                                <input class="full-with-form" type="email" name="email" placeholder="Email Address" data-required="true" />
                                            </div>
                                            <div class="col-sm-12 mt_30">
                                                <textarea class="full-with-form" name="message" placeholder="Message" data-required="true"></textarea>
                                            </div>
                                            <div class="col-sm-6">
                                                <button class="btn mt_30" type="submit">Leave Comment</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- End Comment Form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
