@extends('Frontend.master')
@section('product-details-page')
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
                <div class="left-special left-sidebar-widget mb_50">
                    <div class="heading-part mb_20 ">
                        <h2 class="main_title">Top Products</h2>
                    </div>
                    <div id="left-special" class="owl-carousel">
                        <ul class="row ">
                            <li class="item product-layout-left mb_20">
                                <div class="product-list col-xs-4">
                                    <div class="product-thumb">
                                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('/') }}/Frontend/images/product/product1.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('/') }}/Frontend/images/product/product1-1.jpg"> </a> </div>
                                    </div>
                                </div>
                                <div class="col-xs-8">
                                    <div class="caption product-detail">
                                        <h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
                                        <div class="rating">
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                                        </div>
                                        <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                      </span>
                                    </div>
                                </div>
                            </li>
                            <li class="item product-layout-left mb_20">
                                <div class="product-list col-xs-4">
                                    <div class="product-thumb">
                                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('/') }}/Frontend/images/product/product2.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('/') }}/Frontend/images/product/product2-1.jpg"> </a> </div>
                                    </div>
                                </div>
                                <div class="col-xs-8">
                                    <div class="caption product-detail">
                                        <h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
                                        <div class="rating">
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                                        </div>
                                        <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                      </span>
                                    </div>
                                </div>
                            </li>
                            <li class="item product-layout-left mb_20">
                                <div class="product-list col-xs-4">
                                    <div class="product-thumb">
                                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('/') }}/Frontend/images/product/product3.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('/') }}/Frontend/images/product/product3-1.jpg"> </a> </div>
                                    </div>
                                </div>
                                <div class="col-xs-8">
                                    <div class="caption product-detail">
                                        <h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
                                        <div class="rating">
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                                        </div>
                                        <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                      </span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="row ">
                            <li class="item product-layout-left mb_20">
                                <div class="product-list col-xs-4">
                                    <div class="product-thumb">
                                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('/') }}/Frontend/images/product/product4.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('/') }}/Frontend/images/product/product4-1.jpg"> </a> </div>
                                    </div>
                                </div>
                                <div class="col-xs-8">
                                    <div class="caption product-detail">
                                        <h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
                                        <div class="rating">
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                                        </div>
                                        <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                      </span>
                                    </div>
                                </div>
                            </li>
                            <li class="item product-layout-left mb_20">
                                <div class="product-list col-xs-4">
                                    <div class="product-thumb">
                                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('/') }}/Frontend/images/product/product5.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('/') }}/Frontend/images/product/product5-1.jpg"> </a> </div>
                                    </div>
                                </div>
                                <div class="col-xs-8">
                                    <div class="caption product-detail">
                                        <h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
                                        <div class="rating">
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                                        </div>
                                        <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                      </span>
                                    </div>
                                </div>
                            </li>
                            <li class="item product-layout-left mb_20">
                                <div class="product-list col-xs-4">
                                    <div class="product-thumb">
                                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('/') }}/Frontend/images/product/product6.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('/') }}/Frontend/images/product/product6-1.jpg"> </a> </div>
                                    </div>
                                </div>
                                <div class="col-xs-8">
                                    <div class="caption product-detail">
                                        <h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
                                        <div class="rating">
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                                        </div>
                                        <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                      </span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="row ">
                            <li class="item product-layout-left mb_20">
                                <div class="product-list col-xs-4">
                                    <div class="product-thumb">
                                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('/') }}/Frontend/images/product/product7.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('/') }}/Frontend/images/product/product7-1.jpg"> </a> </div>
                                    </div>
                                </div>
                                <div class="col-xs-8">
                                    <div class="caption product-detail">
                                        <h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
                                        <div class="rating">
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                                        </div>
                                        <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                      </span>
                                    </div>
                                </div>
                            </li>
                            <li class="item product-layout-left mb_20">
                                <div class="product-list col-xs-4">
                                    <div class="product-thumb">
                                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('/') }}/Frontend/images/product/product8.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('/') }}/Frontend/images/product/product8-1.jpg"> </a> </div>
                                    </div>
                                </div>
                                <div class="col-xs-8">
                                    <div class="caption product-detail">
                                        <h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
                                        <div class="rating">
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                                        </div>
                                        <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                      </span>
                                    </div>
                                </div>
                            </li>
                            <li class="item product-layout-left mb_20">
                                <div class="product-list col-xs-4">
                                    <div class="product-thumb">
                                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('/') }}/Frontend/images/product/product9.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('/') }}/Frontend/images/product/product9-1.jpg"> </a> </div>
                                    </div>
                                </div>
                                <div class="col-xs-8">
                                    <div class="caption product-detail">
                                        <h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
                                        <div class="rating">
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                                        </div>
                                        <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                      </span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="row ">
                            <li class="item product-layout-left mb_20">
                                <div class="product-list col-xs-4">
                                    <div class="product-thumb">
                                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('/') }}/Frontend/images/product/product10.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('/') }}/Frontend/images/product/product10-1.jpg"> </a> </div>
                                    </div>
                                </div>
                                <div class="col-xs-8">
                                    <div class="caption product-detail">
                                        <h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
                                        <div class="rating">
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                                        </div>
                                        <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                      </span>
                                    </div>
                                </div>
                            </li>
                            <li class="item product-layout-left mb_20">
                                <div class="product-list col-xs-4">
                                    <div class="product-thumb">
                                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('/') }}/Frontend/images/product/product1.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('/') }}/Frontend/images/product/product1-1.jpg"> </a> </div>
                                    </div>
                                </div>
                                <div class="col-xs-8">
                                    <div class="caption product-detail">
                                        <h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
                                        <div class="rating">
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                                        </div>
                                        <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                      </span>
                                    </div>
                                </div>
                            </li>
                            <li class="item product-layout-left mb_20">
                                <div class="product-list col-xs-4">
                                    <div class="product-thumb">
                                        <div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('/') }}/Frontend/images/product/product2.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="{{ asset('/') }}/Frontend/images/product/product2-1.jpg"> </a> </div>
                                    </div>
                                </div>
                                <div class="col-xs-8">
                                    <div class="caption product-detail">
                                        <h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
                                        <div class="rating">
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                                        </div>
                                        <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                      </span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-8 col-md-8 col-lg-9 mtb_30">
                <!-- =====  BANNER STRAT  ===== -->
                <div class="breadcrumb ptb_20">
                    <h1>New LCDScreen...</h1>
                    <ul>
                        <li><a href="index-2.html">Home</a></li>
                        <li><a href="category_page.html">Products</a></li>
                        <li class="active">New LCDS...</li>
                    </ul>
                </div>
                <!-- =====  BREADCRUMB END===== -->
                <div class="row mt_10 ">
                    <div class="col-md-6">
                        <div><a class="thumbnails"> <img data-name="product_image" src="{{ asset('/') }}/Frontend/images/product/product1.jpg" alt="" /></a></div>
                        <div id="product-thumbnail" class="owl-carousel">
                            <div class="item">
                                <div class="image-additional"><a class="thumbnail" href="{{ asset('/') }}/Frontend/images/product/product1.jpg" data-fancybox="group1"> <img src="{{ asset('/') }}/Frontend/images/product/product1.jpg" alt="" /></a></div>
                            </div>
                            <div class="item">
                                <div class="image-additional"><a class="thumbnail" href="{{ asset('/') }}/Frontend/images/product/product2.jpg" data-fancybox="group1"> <img src="{{ asset('/') }}/Frontend/images/product/product2.jpg" alt="" /></a></div>
                            </div>
                            <div class="item">
                                <div class="image-additional"><a class="thumbnail" href="{{ asset('/') }}/Frontend/images/product/product3.jpg" data-fancybox="group1"> <img src="{{ asset('/') }}/Frontend/images/product/product3.jpg" alt="" /></a></div>
                            </div>
                            <div class="item">
                                <div class="image-additional"><a class="thumbnail" href="{{ asset('/') }}/Frontend/images/product/product4.jpg" data-fancybox="group1"> <img src="{{ asset('/') }}/Frontend/images/product/product4.jpg" alt="" /></a></div>
                            </div>
                            <div class="item">
                                <div class="image-additional"><a class="thumbnail" href="{{ asset('/') }}/Frontend/images/product/product5.jpg" data-fancybox="group1"> <img src="{{ asset('/') }}/Frontend/images/product/product5.jpg" alt="" /></a></div>
                            </div>
                            <div class="item">
                                <div class="image-additional"><a class="thumbnail" href="{{ asset('/') }}/Frontend/images/product/product6.jpg" data-fancybox="group1"> <img src="{{ asset('/') }}/Frontend/images/product/product6.jpg" alt="" /></a></div>
                            </div>
                            <div class="item">
                                <div class="image-additional"><a class="thumbnail" href="{{ asset('/') }}/Frontend/images/product/product7.jpg" data-fancybox="group1"> <img src="{{ asset('/') }}/Frontend/images/product/product7.jpg" alt="" /></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 prodetail caption product-thumb">
                        <h4 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Latin literature from 45 BC, making it over old.</a></h4>
                        <div class="rating">
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                        </div>
                        <span class="price mb_20"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
              </span>
                        <hr>
                        <ul class="list-unstyled product_info mtb_20">
                            <li>
                                <label>Brand:</label>
                                <span> <a href="#">Apple</a></span></li>
                            <li>
                                <label>Product Code:</label>
                                <span> product 20</span></li>
                            <li>
                                <label>Availability:</label>
                                <span> In Stock</span></li>
                        </ul>
                        <hr>
                        <p class="product-desc mtb_30"> More room to move. With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go. Cover Flow. Browse through your music collection by flipping..</p>
                        <div id="product">
                            <div class="form-group">
                                <div class="row">
                                    <div class="Sort-by col-md-6">
                                        <label>Sort by</label>
                                        <select name="product_size" id="select-by-size" class="selectpicker form-control">
                                            <option>Small</option>
                                            <option>Medium</option>
                                            <option>Large</option>
                                        </select>
                                    </div>
                                    <div class="Color col-md-6">
                                        <label>Color</label>
                                        <select name="product_color" id="select-by-color" class="selectpicker form-control">
                                            <option>Blue</option>
                                            <option>Green</option>
                                            <option>Orange</option>
                                            <option>White</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="qty mt_30 form-group2">
                                <label>Qty</label>
                                <input name="product_quantity" min="1" value="1" type="number">
                            </div>
                            <div class="button-group mt_30">
                                <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                <div class="compare"><a href="#"><span>Compare</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="exTab5" class="mtb_30">
                            <ul class="nav nav-tabs">
                                <li class="active"> <a href="#1c" data-toggle="tab">Overview</a> </li>
                                <li><a href="#2c" data-toggle="tab">Reviews (1)</a> </li>
                                <li><a href="#3c" data-toggle="tab">Solution</a> </li>
                            </ul>
                            <div class="tab-content mt_20">
                                <div class="tab-pane active" id="1c">
                                    <p>CLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lobortis malesuada mi id tristique. Sed ipsum nisi, dapibus at faucibus non, dictum a diam. Nunc vitae interdum diam. Sed finibus, justo vel maximus facilisis, sapien turpis euismod tellus, vulputate semper diam ipsum vel tellus.</p>
                                </div>
                                <div class="tab-pane" id="2c">
                                    <form class="form-horizontal">
                                        <div id="review"></div>
                                        <h4 class="mt_20 mb_30">Write a review</h4>
                                        <div class="form-group required">
                                            <div class="col-sm-12">
                                                <label class="control-label" for="input-name">Your Name</label>
                                                <input name="name" value="" id="input-name" class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <div class="col-sm-12">
                                                <label class="control-label" for="input-review">Your Review</label>
                                                <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
                                                <div class="help-block"><span class="text-danger">Note:</span> HTML is not translated!</div>
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <div class="col-md-6">
                                                <label class="control-label">Rating</label>
                                                <div class="rates"><span>Bad</span>
                                                    <input name="rating" value="1" type="radio">
                                                    <input name="rating" value="2" type="radio">
                                                    <input name="rating" value="3" type="radio">
                                                    <input name="rating" value="4" type="radio">
                                                    <input name="rating" value="5" type="radio">
                                                    <span>Good</span></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="buttons pull-right">
                                                    <button class="btn btn-md btn-link">Continue</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="3c">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lobortis malesuada mi id tristique. Sed ipsum nisi, dapibus at faucibus non, dictum a diam. Nunc vitae interdum diam. Sed finibus, justo vel maximus facilisis, sapien turpis euismod tellus, vulputate semper diam ipsum vel tellus.applied clearfix to the tab-content to rid of the gap between the tab and the content</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading-part text-center">
                            <h2 class="main_title mt_50">Related Products</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="product-layout  product-grid related-pro  owl-carousel mb_50">
                        <div class="item">
                            <div class="product-thumb">
                                <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="{{ asset('/') }}/Frontend/images/product/product2.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="{{ asset('/') }}/Frontend/images/product/product2-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                                <div class="caption product-detail text-left">
                                    <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">Latin literature from 45 BC, making it over old.</a></h6>
                                    <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                                    </div>
                                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                    </span>
                                    <div class="button-group text-center">
                                        <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                        <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                        <div class="compare"><a href="#"><span>Compare</span></a></div>
                                        <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-thumb">
                                <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="{{ asset('/') }}/Frontend/images/product/product3.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="{{ asset('/') }}/Frontend/images/product/product3-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                                <div class="caption product-detail text-left">
                                    <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">Latin literature from 45 BC, making it over old.</a></h6>
                                    <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                                    </div>
                                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                    </span>
                                    <div class="button-group text-center">
                                        <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                        <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                        <div class="compare"><a href="#"><span>Compare</span></a></div>
                                        <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-thumb">
                                <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="{{ asset('/') }}/Frontend/images/product/product4.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="{{ asset('/') }}/Frontend/images/product/product4-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                                <div class="caption product-detail text-left">
                                    <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">Latin literature from 45 BC, making it over old.</a></h6>
                                    <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                                    </div>
                                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                    </span>
                                    <div class="button-group text-center">
                                        <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                        <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                        <div class="compare"><a href="#"><span>Compare</span></a></div>
                                        <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-thumb">
                                <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="{{ asset('/') }}/Frontend/images/product/product6.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="{{ asset('/') }}/Frontend/images/product/product6-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                                <div class="caption product-detail text-left">
                                    <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">Latin literature from 45 BC, making it over old.</a></h6>
                                    <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                                    </div>
                                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                    </span>
                                    <div class="button-group text-center">
                                        <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                        <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                        <div class="compare"><a href="#"><span>Compare</span></a></div>
                                        <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-thumb">
                                <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="{{ asset('/') }}/Frontend/images/product/product7.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="{{ asset('/') }}/Frontend/images/product/product7-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                                <div class="caption product-detail text-left">
                                    <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">Latin literature from 45 BC, making it over old.</a></h6>
                                    <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                                    </div>
                                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                    </span>
                                    <div class="button-group text-center">
                                        <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                        <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                        <div class="compare"><a href="#"><span>Compare</span></a></div>
                                        <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-thumb">
                                <div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="{{ asset('/') }}/Frontend/images/product/product8.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="{{ asset('/') }}/Frontend/images/product/product8-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
                                <div class="caption product-detail text-left">
                                    <h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">Latin literature from 45 BC, making it over old.</a></h6>
                                    <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                                    </div>
                                    <span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
                    </span>
                                    <div class="button-group text-center">
                                        <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                        <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                        <div class="compare"><a href="#"><span>Compare</span></a></div>
                                        <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="brand_carouse" class="ptb_30 text-center">
            <div class="type-01">
                <div class="heading-part mb_20 ">
                    <h2 class="main_title">Brand Logo</h2>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="brand owl-carousel ptb_20">
                            <div class="item text-center"> <a href="#"><img src="{{ asset('/') }}/Frontend/images/brand/brand1.png" alt="Disney" class="img-responsive" /></a> </div>
                            <div class="item text-center"> <a href="#"><img src="{{ asset('/') }}/Frontend/images/brand/brand2.png" alt="Dell" class="img-responsive" /></a> </div>
                            <div class="item text-center"> <a href="#"><img src="{{ asset('/') }}/Frontend/images/brand/brand3.png" alt="Harley" class="img-responsive" /></a> </div>
                            <div class="item text-center"> <a href="#"><img src="{{ asset('/') }}/Frontend/images/brand/brand4.png" alt="Canon" class="img-responsive" /></a> </div>
                            <div class="item text-center"> <a href="#"><img src="{{ asset('/') }}/Frontend/images/brand/brand5.png" alt="Canon" class="img-responsive" /></a> </div>
                            <div class="item text-center"> <a href="#"><img src="{{ asset('/') }}/Frontend/images/brand/brand6.png" alt="Canon" class="img-responsive" /></a> </div>
                            <div class="item text-center"> <a href="#"><img src="{{ asset('/') }}/Frontend/images/brand/brand7.png" alt="Canon" class="img-responsive" /></a> </div>
                            <div class="item text-center"> <a href="#"><img src="{{ asset('/') }}/Frontend/images/brand/brand8.png" alt="Canon" class="img-responsive" /></a> </div>
                            <div class="item text-center"> <a href="#"><img src="{{ asset('/') }}/Frontend/images/brand/brand9.png" alt="Canon" class="img-responsive" /></a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
