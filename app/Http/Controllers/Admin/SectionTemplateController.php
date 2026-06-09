<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SectionTemplate;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SectionTemplateController extends Controller
{
    public function index()
    {
        $templates = SectionTemplate::latest()->paginate(10);
        return view('admin.modules.SectionTemplate.list', compact('templates'));
    }

    public function create()
    {
        return view('admin.modules.SectionTemplate.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:section_templates,slug',
        ]);

        $data = $request->only('name', 'slug');
        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['name']);
        }

        SectionTemplate::create($data);

        return redirect()->route('section-templates.index')->with('success', 'Section Template created successfully.');
    }

    public function edit(SectionTemplate $sectionTemplate)
    {
        return view('admin.modules.SectionTemplate.edit', compact('sectionTemplate'));
    }

    public function update(Request $request, SectionTemplate $sectionTemplate)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:section_templates,slug,' . $sectionTemplate->id,
        ]);

        $sectionTemplate->update($request->only('name', 'slug'));

        return redirect()->route('section-templates.index')->with('success', 'Section Template updated successfully.');
    }

    public function destroy(SectionTemplate $sectionTemplate)
    {
        $sectionTemplate->delete();
        return redirect()->route('section-templates.index')->with('success', 'Section Template deleted successfully.');
    }
}
