<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log, Auth, Exception;
class DashboardController extends Controller
{
    
    public function dashboard(Request $request){

        $data = ["page" => "dashboard"];
        return view('App.user-dashboard', $data);

    }
}
