<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class supplierController extends Controller
{
    public function supplier(Request $request)
    {
        return view('dashboard.supplier.index');
    }
}
