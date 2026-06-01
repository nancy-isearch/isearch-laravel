<?php

namespace App\Services;

use App\Models\ServiceCategory;
use Illuminate\Support\Str;

class ServiceCategoryService
{
    /**
     * Get All Categories
     */
    public function getAll($request)
    {
        $query = ServiceCategory::with('icon');

        if ($request->filled('search')) {

            $query->where(function ($q) use ($request) {

                $q->where('name', 'LIKE', '%' . $request->search . '%')
                  ->orWhere('slug', 'LIKE', '%' . $request->search . '%');
            });
        }

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        return $query
            ->orderBy('sort_order')
            ->paginate($request->per_page ?? 10);
    }

    /**
     * Store Category
     */
    public function store(array $data)
    {
        return ServiceCategory::create([

            'name' => $data['name'],

            'slug' => $data['slug']
                ?? Str::slug($data['name']),

            'icon_id' => $data['icon_id'] ?? null,

            'status' => $data['status'] ?? true,

            'sort_order' => $data['sort_order'] ?? 0,
        ]);
    }

    /**
     * Update Category
     */
    public function update(
        ServiceCategory $category,
        array $data
    ) {

        $category->update([

            'name' => $data['name'],

            'slug' => $data['slug']
                ?? Str::slug($data['name']),

            'icon_id' => $data['icon_id']
                ?? $category->icon_id,

            'status' => $data['status']
                ?? $category->status,

            'sort_order' => $data['sort_order']
                ?? $category->sort_order,
        ]);

        return $category->fresh()->load('icon');
    }

    /**
     * Delete Category
     */
    public function delete(
        ServiceCategory $category
    ) {
        return $category->delete();
    }
}