<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class UserController extends Controller
{
    public function userDashboard()
    {
        
        return view('dashboard.user.index');
        
    }
    public function createUserDashboard()
    {
        return view('dashboard.crudUser.createuser');
    }
    
}