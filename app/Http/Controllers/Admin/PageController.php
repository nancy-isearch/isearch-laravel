<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Page;
use App\Models\Service;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::latest()->paginate(20);

        return view(
            'admin.pages.index',
            compact('pages')
        );
    }

    public function create()
    {
        $services = Service::all();

        $cities = City::all();

        $parents = Page::all();

        return view(
            'admin.pages.create',
            compact(
                'services',
                'cities',
                'parents'
            )
        );
    }

    public function store(
        Request $request
    ) {
        $validated = $request->validate([

            'title' => 'required',

            'slug' => 'required|unique:pages',

            'page_type' => 'required',

        ]);

        Page::create(
            $validated +
            $request->only([

                'service_id',
                'city_id',
                'parent_page_id',

                'seo_title',
                'seo_description',
                'seo_keywords',

                'status',

            ])
        );

        return redirect()
            ->route(
                'admin.pages.index'
            )
            ->with(
                'success',
                'Page created.'
            );
    }

    public function edit(Page $page)
    {
        $services = Service::all();

        $cities = City::all();

        $parents = Page::where(
            'id',
            '!=',
            $page->id
        )->get();

        return view(
            'admin.pages.edit',
            compact(
                'page',
                'services',
                'cities',
                'parents'
            )
        );
    }

    public function update(
        Request $request,
        Page $page
    ) {
        $validated = $request->validate([

            'title' => 'required',

            'slug' => 'required|unique:pages,slug,'.$page->id,

            'page_type' => 'required',

        ]);

        $page->update(

            $validated +

            $request->only([

                'service_id',
                'city_id',
                'parent_page_id',

                'seo_title',
                'seo_description',
                'seo_keywords',

                'status',

            ])

        );

        return back()
            ->with(
                'success',
                'Updated.'
            );
    }

    public function destroy(
        Page $page
    ) {
        $page->delete();

        return back()
            ->with(
                'success',
                'Deleted.'
            );
    }
}
