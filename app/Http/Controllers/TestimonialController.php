<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimonials.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'nullable|image|max:2048',
            'designation' => 'nullable|string|max:255',
            'testimonial' => 'required|string',
            'city' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'industry' => 'nullable|string|max:255',
            'service' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('logo')) {
            $validated['logo'] = $request->file('logo')->store('testimonials', 'public');
        }

        Testimonial::create($validated);

        return redirect()->route('testimonials.index')->with('success', 'Testimonial created successfully.');
    }

    public function show(Testimonial $testimonial)
    {
        return view('admin.testimonials.show', compact('testimonial'));
    }

    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'nullable|image|max:2048',
            'designation' => 'nullable|string|max:255',
            'testimonial' => 'required|string',
            'city' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'industry' => 'nullable|string|max:255',
            'service' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('logo')) {
            if ($testimonial->logo) {
                Storage::disk('public')->delete($testimonial->logo);
            }
            $validated['logo'] = $request->file('logo')->store('testimonials', 'public');
        }

        $testimonial->update($validated);

        return redirect()->route('testimonials.index')->with('success', 'Testimonial updated successfully.');
    }

    public function destroy(Testimonial $testimonial)
    {
        if ($testimonial->logo) {
            Storage::disk('public')->delete($testimonial->logo);
        }
        $testimonial->delete();

        return redirect()->route('testimonials.index')->with('success', 'Testimonial deleted successfully.');
    }
}
