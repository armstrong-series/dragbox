<?php

namespace App\Http\Controllers\Blockchain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Validator;

class BlockchainController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }



    public function pageSection(){
        return view('Frontend.blockhain');
    }


    public function createContent(){
        $data = [
            "page" => "pagesection"
        ];

        return view ('App.Page.page', $data);
    }

}
