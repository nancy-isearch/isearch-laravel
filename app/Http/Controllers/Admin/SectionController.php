<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\DynamicValidation;
use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\PageSection;
use App\Models\SectionDefinition;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index(Page $page)
    {
        $sections = $page->sections()->with(
            'definition'
        )->get();

        return view('admin.sections.index', compact('page', 'sections'));
    }

    public function create(Page $page)
    {
        $definitions = SectionDefinition::all();

        return view('admin.sections.create', compact('page', 'definitions'));
    }

    public function store(Request $request, Page $page)
    {
        PageSection::create([
            'page_id' => $page->id,
            'section_definition_id' => $request->section_definition_id,
            'sort_order' => $request->sort_order ?? 0,
            'content' => [],
        ]);

        return redirect()->route('admin.sections.index', $page->id);
    }

    public function edit(PageSection $section)
    {
        $schema = config('sections')[
            $section->definition->slug
        ]['fields'];

        return view('admin.sections.edit', compact('section', 'schema'));
    }

    public function update(
        Request $request,
        PageSection $section
    ) {

        $schema =

        config(
            'sections'
        )[

        $section
            ->definition
            ->slug

        ]['fields'];

        $rules =
        DynamicValidation::generate(
            $schema
        );

        $validated =
        $request
            ->validate(
                $rules
            );

        $data =
        $request
            ->except(
                '_token',
                '_method'
            );

        foreach (
            $schema as $field
        ) {

            if (
                $field['type']
                == 'image'
            ) {

                if (
                    $request
                        ->hasFile(
                            $field['name']
                        )
                ) {

                    $path =
                    $request
                        ->file(
                            $field['name']
                        )
                        ->store(

                            'sections',

                            'public'

                        );

                    $data[
                    $field['name']
                    ]
                    =
                    $path;

                } else {

                    $data[
                    $field['name']
                    ]
                    =
                    $section
                        ->content[
                    $field['name']
                    ]
                    ?? null;

                }

            }

        }

        $section
            ->update([

                'content' => $data,

            ]);

        return back()->with('success', 'Section updated.');

    }

    public function destroy(PageSection $section)
    {
        $section->delete();

        return back();
    }
}
