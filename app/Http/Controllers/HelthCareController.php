<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelthCareController extends Controller
{
    public function index(){
        return view('Frontend.home.home');
    }
    public function shop(){
        return view('Frontend.shop.shop');
    }
    public function blog(){
        return view('Frontend.blog.blog');
    }
    public function contactUs(){
        return view('Frontend.pages.contact-us');
    }
    public function cart(){
        return view('Frontend.pages.cart');
    }
    public function CheckOut(){
        return view('Frontend.pages.check-out');
    }
    public function productDetailsPage(){
        return view('Frontend.pages.product-details-page');
    }
    public function singlePage(){
        return view('Frontend.pages.single-page');
    }
    public function aboutUs(){
        return view('Frontend.about-us.about-us');
    }

}
