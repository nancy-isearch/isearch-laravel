<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SectionField;
use App\Models\SectionTemplate;
use Illuminate\Http\Request;

class SectionFieldController extends Controller
{
    public function index()
    {
        $fields = SectionField::with('sectionTemplate')->orderBy('section_template_id')->orderBy('sort_order')->paginate(15);
        $templates = SectionTemplate::all();
        return view('admin.modules.SectionField.list', compact('fields', 'templates'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'section_template_id' => 'required|exists:section_templates,id',
            'field_name' => 'required|string|max:255',
            'field_label' => 'required|string|max:255',
            'field_type' => 'required|string|max:255',
            'is_required' => 'boolean',
            'sort_order' => 'integer',
        ]);

        $data = $request->all();
        $data['is_required'] = $request->has('is_required');
        
        SectionField::create($data);

        return redirect()->route('section-fields.index')->with('success', 'Section Field created successfully.');
    }

    public function update(Request $request, SectionField $sectionField)
    {
        $request->validate([
            'section_template_id' => 'required|exists:section_templates,id',
            'field_name' => 'required|string|max:255',
            'field_label' => 'required|string|max:255',
            'field_type' => 'required|string|max:255',
            'is_required' => 'boolean',
            'sort_order' => 'integer',
        ]);

        $data = $request->all();
        $data['is_required'] = $request->has('is_required');

        $sectionField->update($data);

        return redirect()->route('section-fields.index')->with('success', 'Section Field updated successfully.');
    }

    public function destroy(SectionField $sectionField)
    {
        $sectionField->delete();
        return redirect()->route('section-fields.index')->with('success', 'Section Field deleted successfully.');
    }
}
