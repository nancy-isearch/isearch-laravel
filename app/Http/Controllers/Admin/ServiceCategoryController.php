<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServiceCategoryRequest;
use App\Http\Requests\UpdateServiceCategoryRequest;
use App\Models\Icon;
use App\Models\ServiceCategory;
use App\Services\ServiceCategoryService;

class ServiceCategoryController extends Controller
{
    protected $categoryService;

    public function __construct(
        ServiceCategoryService $categoryService
    ) {
        $this->categoryService = $categoryService;
    }

    /**
     * List Categories
     */
    public function index()
    {
        $categories = $this->categoryService
            ->getAll(request());

        return view(
            'admin.service-categories.index',
            compact('categories')
        );
    }

    /**
     * Create Form
     */
    public function create()
    {
        $icons = Icon::where(
            'status',
            1
        )->orderBy('name')->get();

        return view(
            'admin.service-categories.create',
            compact('icons')
        );
    }

    /**
     * Store Category
     */
    public function store(
        StoreServiceCategoryRequest $request
    ) {

        $this->categoryService
            ->store(
                $request->validated()
            );

        return redirect()
            ->route('service-categories.index')
            ->with(
                'success',
                'Category created successfully.'
            );
    }

    /**
     * Show Record
     */
    public function show(
        ServiceCategory $serviceCategory
    ) {

        $serviceCategory->load('icon');

        return view(
            'admin.service-categories.show',
            compact('serviceCategory')
        );
    }

    /**
     * Edit Form
     */
    public function edit(
        ServiceCategory $serviceCategory
    ) {

        $icons = Icon::where(
            'status',
            1
        )->orderBy('name')->get();

        return view(
            'admin.service-categories.edit',
            compact(
                'serviceCategory',
                'icons'
            )
        );
    }

    /**
     * Update Category
     */
    public function update(UpdateServiceCategoryRequest $request, ServiceCategory $serviceCategory) {

        $this->categoryService->update(
            $serviceCategory,
            $request->validated()
        );

        return redirect()->route(
            'service-categories.index'
        )->with(
            'success',
            'Category updated successfully.'
        );
    }

    /**
     * Delete Category
     */
    public function destroy(ServiceCategory $serviceCategory) {

        $this->categoryService->delete($serviceCategory);

        return redirect()->route('service-categories.index')
        ->with(
            'success',
            'Category deleted successfully.'
        );
    }
}
