<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Page;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::withCount('items')->latest()->paginate(10);
        $pages = Page::where('is_active', 1)->get();
        return view('admin.modules.Menu.list', compact('menus', 'pages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
        ]);

        $menu = Menu::create($request->only('name', 'location'));

        $this->syncMenuItems($menu, $request);

        if ($request->ajax()) {
            return response()->json(['success' => true, 'message' => 'Menu created successfully.']);
        }
        return redirect()->back()->with('success', 'Menu created successfully.');
    }

    public function edit(string $id)
    {
        $menu = Menu::with('allItems')->findOrFail($id);
        return response()->json(['success' => true, 'menu' => $menu]);
    }

    public function update(Request $request, string $id)
    {
        $menu = Menu::findOrFail($id);
        
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
        ]);

        $menu->update($request->only('name', 'location'));

        $this->syncMenuItems($menu, $request);

        if ($request->ajax()) {
            return response()->json(['success' => true, 'message' => 'Menu updated successfully.']);
        }
        return redirect()->back()->with('success', 'Menu updated successfully.');
    }

    public function destroy(string $id, Request $request)
    {
        $menu = Menu::findOrFail($id);
        $menu->delete();
        
        if ($request->ajax() || $request->wantsJson()) {
            return response()->json(['success' => true, 'message' => 'Menu deleted successfully.']);
        }
        return redirect()->back()->with('success', 'Menu deleted successfully.');
    }
    
    protected function syncMenuItems(Menu $menu, Request $request)
    {
        $menu->allItems()->delete(); 
        
        if ($request->has('items') && is_array($request->items)) {
            foreach ($request->items as $index => $itemData) {
                if (empty($itemData['title'])) continue;
                $menu->allItems()->create([
                    'title' => $itemData['title'],
                    'page_id' => !empty($itemData['page_id']) ? $itemData['page_id'] : null,
                    'url' => $itemData['url'] ?? null,
                    'order_index' => $index
                ]);
            }
        }
    }
}
