<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Store a new order.
     */
    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'menu_id' => 'required|exists:menus,id', // Ensure menu ID exists in the `menus` table
            'quantity' => 'required|integer|min:1', // Quantity must be at least 1
        ]);

        // Save the order to the database
        Order::create([
            'menu_id' => $request->menu_id,
            'quantity' => $request->quantity,
            'user_id' => auth()->id(), // Assuming orders are tied to logged-in users
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Order has been placed successfully!');
    }
}
