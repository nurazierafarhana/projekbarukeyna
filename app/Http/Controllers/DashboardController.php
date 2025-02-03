<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    // Default dashboard view
    public function index()
    {
        // Fetch all menus
        $menus = Menu::all();
        return view('dashboard', compact('menus'));
    }

    public function filterByCategory($category)
    {
        // Decode the category name in case it has spaces
        $decodedCategory = urldecode($category);
    
        // Fetch menus based on the category
        $menus = Menu::where('category', $decodedCategory)->get();
    
        return view('dashboard', compact('menus'));
    }

    
}
