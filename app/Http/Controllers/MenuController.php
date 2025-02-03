<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(Request $request)
    {
        $sort = $request->get('sort', 'name_asc'); // Default to name_asc if no sort is selected
        
        // Fetch categories from DB for sorting
        $categories = Menu::distinct()->pluck('category')->sort();
        
        // Determine the sorting logic based on the selected option
        $query = Menu::query();
        
        switch ($sort) {
            case 'category_asc':
                $query->orderBy('category', 'asc');
                break;
            case 'category_desc':
                $query->orderBy('category', 'desc');
                break;
            case 'name_asc':
                $query->orderBy('name', 'asc');
                break;
            case 'name_desc':
                $query->orderBy('name', 'desc');
                break;
            default:
                $query->orderBy('name', 'asc');
                break;
        }
    
        // Get the items per page from the request, default to 8
        $perPage = $request->input('per_page', 8);
        
        // Get the current page, default to 1
        $page = $request->input('page', 1);
        
        // Retrieve paginated menus, applying both sorting and pagination
        $menus = $query->skip(($page - 1) * $perPage)->take($perPage)->get();
        
        // Get the total menus count for pagination
        $totalMenus = Menu::count();
        
        // Calculate the total pages
        $totalPages = ceil($totalMenus / $perPage);
    
        return view('admin.menu.index', compact('menus', 'categories', 'sort', 'page', 'perPage', 'totalPages'));
    }

    // Admin: Add a new menu item
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'category' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'image_url' => 'nullable|url',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        } elseif ($request->image_url) {
            $imagePath = $request->image_url;
        }

        Menu::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'category' => $request->category,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.menu.index')->with('success', 'Menu item added successfully');
    }

    // Admin/User: Get all menus (general use)
    public function getAllMenus()
    {
        return Menu::all();
    }

        // Admin/User: Get menus filtered by category
    public function getMenusByCategory($category)
    {
        $menus = Menu::where('category', $category)->get();
        return view('dashboard', compact('menus'));
    }

        public function edit($id)
    {
        $menu = Menu::findOrFail($id); // Get the menu by its ID
        return view('admin.menu.edit', compact('menu')); // Pass the menu to the edit view
    }

    public function update(Request $request, $id)
    {
        $menu = Menu::findOrFail($id); // Find the menu by ID
        
        // Validate the input data
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'category' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'image_url' => 'nullable|url',
        ]);
    
        // Handle image upload
        $imagePath = $menu->image;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        } elseif ($request->image_url) {
            $imagePath = $request->image_url;
        }
    
        // Update the menu item
        $menu->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'category' => $request->category,
            'image' => $imagePath,
        ]);
    
        // Redirect with success message
        return redirect()->route('admin.menu.index')->with('success', 'Menu item updated successfully!');
    }
    
    public function show($id)
    {
        $menu = Menu::findOrFail($id);
        return view('admin.menu.show', compact('menu'));
    }
    
    public function search(Request $request)
    {
        $query = $request->input('query');
        $sort = $request->get('sort', 'name_asc'); // Default to name_asc if no sort is selected
        $perPage = $request->input('per_page', 8); // Items per page
        $page = $request->input('page', 1); // Current page
    
        // Fetch the menus based on the search query and apply sorting
        $queryBuilder = Menu::where('name', 'like', "%$query%")
                            ->orWhere('description', 'like', "%$query%");
    
        // Apply sorting based on the selected sort option
        switch ($sort) {
            case 'category_asc':
                $queryBuilder->orderBy('category', 'asc');
                break;
            case 'category_desc':
                $queryBuilder->orderBy('category', 'desc');
                break;
            case 'name_asc':
                $queryBuilder->orderBy('name', 'asc');
                break;
            case 'name_desc':
                $queryBuilder->orderBy('name', 'desc');
                break;
            default:
                $queryBuilder->orderBy('name', 'asc');
                break;
        }
    
        // Paginate the results
        $menus = $queryBuilder->paginate($perPage);
    
        // Fetch distinct categories for sorting options
        $categories = Menu::distinct()->pluck('category')->sort();
    
        // Return the view with the filtered and paginated menus
        return view('admin.menu.index', compact('menus', 'categories', 'sort', 'query', 'perPage'));
    }
    
    public function create()
    {
        return view('admin.menu.create');
    }
    
}
