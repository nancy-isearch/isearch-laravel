<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DynamicPageController extends Controller
{
    public function show($slug)
    {
        $page = \App\Models\Page::with(['pageSections.sectionTemplate', 'template'])
            ->where('slug', $slug)
            ->where('is_active', 1)
            ->firstOrFail();

        // Map section data into an easy-to-use associative array keyed by section slug
        $sections = [];
        if ($page->pageSections) {
            foreach ($page->pageSections as $section) {
                if ($section->sectionTemplate) {
                    $sections[$section->sectionTemplate->slug] = $section->section_data ?? [];
                }
            }
        }

        // If page has a template, try to load its specific view
        if ($page->template && $page->template->slug) {
            $viewName = 'frontend.pages.' . $page->template->slug;
            if (view()->exists($viewName)) {
                return view($viewName, compact('page', 'sections'));
            }
        }
        
        // Fallback to the generic dynamic page
        return view('frontend.dynamic-page', compact('page', 'sections'));
    }
}
