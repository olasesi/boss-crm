<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showDashboard(){
        return view('v1.admin.dashboard');      
    }
    
}
