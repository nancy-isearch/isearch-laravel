<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;

class PageController extends Controller
{
    public function show($slug)
    {
        $page = Page::with([

            'service',
            'city',
            'parent',

            'sections.definition'

        ])
        ->where('slug',$slug)
        ->where('status',1)
        ->firstOrFail();

        return view(

            'frontend.pages.dynamic',

            compact('page')

        );
    }
}