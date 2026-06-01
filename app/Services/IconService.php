<?php

namespace App\Services;

use App\Models\Icon;

class IconService
{
    /**
     * Get All Icons
     */
    public function getAll($request)
    {
        $query = Icon::query();

        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('name', 'LIKE', '%' . $request->search . '%')
                  ->orWhere('icon', 'LIKE', '%' . $request->search . '%');
            });
        }

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        return $query
            ->latest()
            ->paginate($request->per_page ?? 10);
    }

    /**
     * Store Icon
     */
    public function store(array $data)
    {
        return Icon::create([
            'name' => $data['name'],
            'icon' => $data['icon'],
            'status' => $data['status'] ?? true,
        ]);
    }

    /**
     * Update Icon
     */
    public function update(Icon $icon, array $data)
    {
        $icon->update([
            'name' => $data['name'],
            'icon' => $data['icon'],
            'status' => $data['status'] ?? $icon->status,
        ]);

        return $icon->fresh();
    }

    /**
     * Delete Icon
     */
    public function delete(Icon $icon)
    {
        return $icon->delete();
    }
}