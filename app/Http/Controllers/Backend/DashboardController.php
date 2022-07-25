<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use DB;

class DashboardController extends Controller
{
    public function index(){
        $users = User::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"))
                    ->whereYear('created_at', date('Y'))
                    ->groupBy('created_at')
                    ->pluck('count', 'month_name');
 
        $labels = array('1 Day','1 Week','1 Month','All Time');        
        $data = array(0.01,0.05,0.08,0.1);
        return view('backend.dashboard',compact('labels', 'data'));
       
    }

    
}
