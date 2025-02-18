<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function aboutus(Request $request){
        return view('frontend.aboutus.index');
    }
    public function booking(Request $request){
        return view('frontend.booking.index');
    }
    public function service(Request $request){
        return view('frontend.service.index');
    }
    public function P404(Request $request){
        return view('frontend.404.index');
    }
    public function contact(Request $request){
        return view('frontend.contact.index');
    }
    public function team(Request $request){
        return view('frontend.team.index');
    }
    public function index(Request $request){
        return view('frontend.home.index');
    }
    public function testimonial(Request $request){
        return view('frontend.testimonial.index');
    }
    public function login(Request $request){
        return view('login');
    }
    public function signup(Request $request){
        return view('signup');
    }
    public function shop(Request $request){
        return view('frontend.shop.index');
    }

}