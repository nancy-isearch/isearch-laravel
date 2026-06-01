<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DynamicPageController extends Controller
{
    public function show($slug)
    {
        $page = \App\Models\Page::with('sections')->where('slug', $slug)->where('status', 1)->firstOrFail();

        // Also fetch global header menu (Assuming a menu named 'Header')
        // Usually, this should be done in a View Composer in AppServiceProvider
        // but for simplicity in this module, we can fetch it or just rely on a composer.
        
        return view('frontend.dynamic-page', compact('page'));
    }
}
