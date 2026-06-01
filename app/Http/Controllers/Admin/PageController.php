<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $pages = \App\Models\Page::latest()->paginate(10);
        return view('admin.modules.Page.list', compact('pages'));
    }

    public function create()
    {
        return view('admin.modules.Page.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:pages,slug|max:255',
            'status' => 'required|boolean',
        ]);

        $page = \App\Models\Page::create($request->only('title', 'slug', 'meta_title', 'meta_description', 'status'));

        $this->syncSections($page, $request);

        return redirect()->route('pages.index')->with('success', 'Page created successfully.');
    }

    public function edit(string $id)
    {
        $page = \App\Models\Page::with('sections')->findOrFail($id);
        return view('admin.modules.Page.edit', compact('page'));
    }

    public function update(Request $request, string $id)
    {
        $page = \App\Models\Page::findOrFail($id);
        
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:pages,slug,'.$page->id,
            'status' => 'required|boolean',
        ]);

        $page->update($request->only('title', 'slug', 'meta_title', 'meta_description', 'status'));

        $this->syncSections($page, $request);

        return redirect()->route('pages.index')->with('success', 'Page updated successfully.');
    }

    public function destroy(string $id)
    {
        $page = \App\Models\Page::findOrFail($id);
        $page->delete();
        return redirect()->route('pages.index')->with('success', 'Page deleted successfully.');
    }
    
    protected function syncSections(\App\Models\Page $page, Request $request)
    {
        $page->sections()->delete(); 
        
        if ($request->has('sections') && is_array($request->sections)) {
            foreach ($request->sections as $index => $sectionData) {
                $content = $sectionData['content'] ?? [];
                
                if (isset($sectionData['files']) && is_array($sectionData['files'])) {
                   foreach ($sectionData['files'] as $key => $file) {
                       $path = $file->store('page_sections', 'public');
                       $content[$key] = $path;
                   }
                }
                
                if (isset($sectionData['existing_files']) && is_array($sectionData['existing_files'])) {
                   foreach ($sectionData['existing_files'] as $key => $path) {
                       if(!isset($content[$key])) { 
                           $content[$key] = $path;
                       }
                   }
                }

                $page->sections()->create([
                    'section_type' => $sectionData['type'],
                    'content' => $content,
                    'order_index' => $index
                ]);
            }
        }
    }
}
