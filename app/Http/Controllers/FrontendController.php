<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    
    public function getHomeContent()
    {

        return view('frontend.pages.home');
    }

    public function getTestimonials()
    {
        $testimonials = \App\Models\Testimonial::all();
        return view('frontend.pages.testimonials', compact('testimonials'));
    }

    public function getClients()
    {
        $clients = \App\Models\Client::all();
        return view('frontend.pages.clients', compact('clients'));
    }
}
