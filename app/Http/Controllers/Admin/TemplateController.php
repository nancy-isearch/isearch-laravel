<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Template;
use App\Models\SectionTemplate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TemplateController extends Controller
{
    public function index()
    {
        $templates = Template::latest()->paginate(20);
        return view('admin.templates.index', compact('templates'));
    }

    public function create()
    {
        $sectionTemplates = SectionTemplate::all();
        return view('admin.templates.create', compact('sectionTemplates'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'sections' => 'nullable|array',
            'sections.*' => 'exists:section_templates,id',
        ]);

        $data = $request->except(['image', 'sections']);
        $data['is_active'] = $request->has('is_active');
        $data['slug'] = \Illuminate\Support\Str::slug($request->name);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('templates', 'public');
        }

        $template = Template::create($data);

        if ($request->has('sections')) {
            $sections = [];
            foreach ($request->sections as $index => $sectionId) {
                $sections[$sectionId] = ['sort_order' => $index];
            }
            $template->sectionTemplates()->sync($sections);
        }

        return redirect()->route('templates.index')->with('success', 'Template created successfully.');
    }

    public function edit(Template $template)
    {
        $sectionTemplates = SectionTemplate::all();
        return view('admin.templates.edit', compact('template', 'sectionTemplates'));
    }

    public function update(Request $request, Template $template)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'sections' => 'nullable|array',
            'sections.*' => 'exists:section_templates,id',
        ]);

        $data = $request->except(['image', 'sections']);
        $data['is_active'] = $request->has('is_active');
        $data['slug'] = \Illuminate\Support\Str::slug($request->name);

        if ($request->hasFile('image')) {
            if ($template->image) {
                Storage::disk('public')->delete($template->image);
            }
            $data['image'] = $request->file('image')->store('templates', 'public');
        }

        $template->update($data);

        if ($request->has('sections')) {
            $sections = [];
            foreach ($request->sections as $index => $sectionId) {
                $sections[$sectionId] = ['sort_order' => $index];
            }
            $template->sectionTemplates()->sync($sections);
        } else {
            $template->sectionTemplates()->sync([]);
        }

        return redirect()->route('templates.index')->with('success', 'Template updated successfully.');
    }

    public function destroy(Template $template)
    {
        if ($template->image) {
            Storage::disk('public')->delete($template->image);
        }
        $template->delete();
        return redirect()->route('templates.index')->with('success', 'Template deleted successfully.');
    }
}
