<?php

namespace App\Http\Controllers\Settings;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Exception;

// use Auth, Log, Exception, Validator;

class SettingsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }



    public function profile(Request $request){
        try {
            
            $data = [
                'page' => 'settings'
            ];
            return view('Settings.profile', $data);
        } catch (Exception $error) {
            Log::info("errorMessage". $error->getMessage());
        }
    }

}
