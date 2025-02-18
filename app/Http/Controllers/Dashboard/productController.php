<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function productType1(Request $request)
    {
        return view('dashboard.product.product_type_1');
    }

    public function productType2(Request $request)
    {
        return view('dashboard.product.product_type_2');
    }

    public function productType3(Request $request)
    {
        return view('dashboard.product.product_type_3');
    }
}
