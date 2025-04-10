<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BranchController extends Controller
{
    public function branchDashboard()
    {
        $branch = Branch::all();
        return view('dashboard.branch.index')->with('branch', $branch);
    }
    public function fetchBranchRecord(Request $request)
    {
        $data = DB::table('branch')->select(
            'id',
            'name',
            'location',
            'phone'
        )->get();
        dd($data);
        return response()->json($data);
    }
}
