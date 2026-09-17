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
        $allSections = SectionTemplate::with('sectionFields')->get();
        return view('admin.pages.create', compact('allSections'));
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
                $processedSections = $this->processSectionFiles($request->sections);
                foreach ($processedSections as $section) {
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
        $allSections = SectionTemplate::with('sectionFields')->get();
        $page->load(['pageSections' => function($query) {
            $query->orderBy('id');
        }]);
        
        return view('admin.pages.edit', compact('page', 'allSections'));
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
                $processedSections = $this->processSectionFiles($request->sections);
                foreach ($processedSections as $section) {
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

    private function processSectionFiles($sections)
    {
        $processed = [];
        foreach ($sections as $index => $section) {
            $data = $section['data'] ?? [];
            $section['data'] = $this->handleNestedFiles($data);
            $processed[$index] = $section;
        }
        return $processed;
    }

    private function handleNestedFiles($array)
    {
        $processed = [];
        // First pass: process files and normal fields
        foreach ($array as $key => $value) {
            if ($value instanceof \Illuminate\Http\UploadedFile) {
                $path = $value->store('page_sections', 'public');
                $processed[$key] = $path;
            } elseif (is_array($value)) {
                $processed[$key] = $this->handleNestedFiles($value);
            } else {
                $processed[$key] = $value;
            }
        }
        
        // Second pass: handle _old fallbacks and cleanup
        foreach ($processed as $key => $value) {
            if (\Illuminate\Support\Str::endsWith((string)$key, '_old')) {
                $originalKey = substr($key, 0, -4);
                // Fallback to old file path if no new file uploaded
                if (!isset($processed[$originalKey]) || empty($processed[$originalKey])) {
                    $processed[$originalKey] = $value;
                }
                // Always unset the _old key so it doesn't pollute the JSON
                unset($processed[$key]);
            }
        }
        
        return $processed;
    }

    public function copy(Request $request, Page $page)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:pages,slug',
        ]);

        DB::beginTransaction();
        try {
            $newPage = $page->replicate();
            $newPage->name = $request->name;
            $newPage->slug = $request->slug;
            $newPage->save();

            foreach ($page->pageSections as $section) {
                $newSection = $section->replicate();
                $newSection->page_id = $newPage->id;
                $newSection->save();
            }

            DB::commit();
            return redirect()->route('pages.index')->with('success', 'Page copied successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Error: ' . $e->getMessage());
        }
    }
}
