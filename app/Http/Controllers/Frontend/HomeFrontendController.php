<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeFrontendController extends Controller
{
    public function homeFrontend(Request $request)
    {
        return view('frontend.home.index');
    }
}
