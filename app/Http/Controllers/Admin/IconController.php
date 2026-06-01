<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreIconRequest;
use App\Http\Requests\UpdateIconRequest;
use App\Models\Icon;
use App\Services\IconService;

class IconController extends Controller
{
    protected $iconService;

    public function __construct(IconService $iconService) {
        $this->iconService = $iconService;
    }

    /**
     * Display listing
     */
    public function index()
    {
        $icons = $this->iconService->getAll(request());

        return view('admin.icons.index',compact('icons'));
    }

    /**
     * Show Create Form
     */
    public function create()
    {
        return view('admin.icons.create');
    }

    /**
     * Store Icon
     */
    public function store(
        StoreIconRequest $request
    ) {

        $this->iconService->store($request->validated());

        return redirect()
        ->route('icons.index')
        ->with(
            'success',
            'Icon created successfully.'
        );
    }

    /**
     * Show Single Record
     */
    public function show(Icon $icon)
    {
        return view(
            'admin.icons.show',
            compact('icon')
        );
    }

    /**
     * Edit Form
     */
    public function edit(Icon $icon) {

        return view('admin.icons.edit', compact('icon'));
    }

    /**
     * Update Icon
     */
    public function update(UpdateIconRequest $request,Icon $icon) {

        $this->iconService
        ->update(
            $icon,
            $request->validated()
        );

        return redirect()
        ->route('icons.index')
        ->with(
            'success',
            'Icon updated successfully.'
        );
    }

    /**
     * Delete Icon
     */
    public function destroy(Icon $icon) {

        $this->iconService->delete($icon);

        return redirect()
        ->route('icons.index')
        ->with(
            'success',
            'Icon deleted successfully.'
        );
    }
}
