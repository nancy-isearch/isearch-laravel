<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    
    public function getHomeContent()
    {

        return view('frontend.pages.home');
    }
}
