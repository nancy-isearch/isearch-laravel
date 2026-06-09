<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\PageSection;
use App\Models\SectionTemplate;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::latest()->paginate(20);
        return view('admin.pages.index', compact('pages'));
    }

    public function create()
    {
        $templates = SectionTemplate::with('sectionFields')->get();
        return view('admin.pages.create', compact('templates'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:pages,slug',
        ]);

        DB::beginTransaction();
        try {
            $data = $request->only(['name', 'is_active', 'meta_title', 'meta_description', 'schema']);
            $data['slug'] = empty($request->slug) ? Str::slug($request->name) : $request->slug;
            $data['is_active'] = $request->has('is_active');

            $page = Page::create($data);

            if ($request->has('sections') && is_array($request->sections)) {
                foreach ($request->sections as $section) {
                    if (isset($section['template_id'])) {
                        PageSection::create([
                            'page_id' => $page->id,
                            'section_template_id' => $section['template_id'],
                            'section_data' => $section['data'] ?? [],
                        ]);
                    }
                }
            }

            DB::commit();
            return redirect()->route('pages.index')->with('success', 'Page created successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withInput()->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function edit(Page $page)
    {
        $templates = SectionTemplate::with('sectionFields')->get();
        $page->load(['pageSections' => function($query) {
            $query->orderBy('id'); // Or add a sort_order to page_sections later if needed
        }]);
        
        return view('admin.pages.edit', compact('page', 'templates'));
    }

    public function update(Request $request, Page $page)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:pages,slug,' . $page->id,
        ]);

        DB::beginTransaction();
        try {
            $data = $request->only(['name', 'slug', 'meta_title', 'meta_description', 'schema']);
            $data['is_active'] = $request->has('is_active');

            $page->update($data);

            // Delete old sections and recreate them to keep it simple and maintain order
            $page->pageSections()->delete();

            if ($request->has('sections') && is_array($request->sections)) {
                foreach ($request->sections as $section) {
                    if (isset($section['template_id'])) {
                        PageSection::create([
                            'page_id' => $page->id,
                            'section_template_id' => $section['template_id'],
                            'section_data' => $section['data'] ?? [],
                        ]);
                    }
                }
            }

            DB::commit();
            return redirect()->route('pages.index')->with('success', 'Page updated successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withInput()->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function destroy(Page $page)
    {
        $page->delete();
        return back()->with('success', 'Page deleted successfully.');
    }
}
