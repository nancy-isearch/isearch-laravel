<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = \App\Models\Menu::withCount('items')->latest()->paginate(10);
        return view('admin.modules.Menu.list', compact('menus'));
    }

    public function create()
    {
        $pages = \App\Models\Page::where('status', 1)->get();
        return view('admin.modules.Menu.add', compact('pages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
        ]);

        $menu = \App\Models\Menu::create($request->only('name', 'location'));

        $this->syncMenuItems($menu, $request);

        return redirect()->route('menus.index')->with('success', 'Menu created successfully.');
    }

    public function edit(string $id)
    {
        $menu = \App\Models\Menu::with('allItems')->findOrFail($id);
        $pages = \App\Models\Page::where('status', 1)->get();
        return view('admin.modules.Menu.edit', compact('menu', 'pages'));
    }

    public function update(Request $request, string $id)
    {
        $menu = \App\Models\Menu::findOrFail($id);
        
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
        ]);

        $menu->update($request->only('name', 'location'));

        $this->syncMenuItems($menu, $request);

        return redirect()->route('menus.index')->with('success', 'Menu updated successfully.');
    }

    public function destroy(string $id)
    {
        $menu = \App\Models\Menu::findOrFail($id);
        $menu->delete();
        return redirect()->route('menus.index')->with('success', 'Menu deleted successfully.');
    }
    
    protected function syncMenuItems(\App\Models\Menu $menu, Request $request)
    {
        $menu->allItems()->delete(); 
        
        if ($request->has('items') && is_array($request->items)) {
            foreach ($request->items as $index => $itemData) {
                $menu->allItems()->create([
                    'title' => $itemData['title'],
                    'page_id' => $itemData['page_id'] ?? null,
                    'url' => $itemData['url'] ?? null,
                    'order_index' => $index
                ]);
            }
        }
    }
}
