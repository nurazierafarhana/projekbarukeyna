<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        // Get cart items from session
        $cartItems = session()->get('cart', []);

        return view('cart.view', compact('cartItems'));
    }

    // Add item to cart
    public function addToCart(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Image validation
        ]);
    
        // Get the cart from the session or initialize an empty cart
        $cart = session()->get('cart', []);
    
        // Store the image if uploaded
        if ($request->hasFile('image')) {
            // Store the uploaded image and get the path
            $imagePath = $request->file('image')->store('images', 'public');
        } else {
            // Fallback image path
            $imagePath = 'default-image.jpg';
        }
    
        // Add item to the cart
        $cart[] = [
            'name' => $request->name,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'image' => $imagePath,  // Store the image path
        ];
    
        // Save cart back to the session
        session()->put('cart', $cart);
    
        return response()->json([
            'message' => 'Item added to cart!',
            'cartCount' => count($cart),
        ]);
    }

    // Get cart count
    public function cartCount()
    {
        // Get the cart from the session
        $cart = session()->get('cart', []);
        return count($cart);
    }

      // Update quantity of cart items
      public function update(Request $request)
      {
          $cart = session()->get('cart', []);
          
          // Loop through the updated cart items
          foreach ($request->cart as $index => $item) {
              // Update the item quantity
              if (isset($cart[$index])) {
                  $cart[$index]['quantity'] = $item['quantity'];
              }
          }
      
          // Save updated cart back to session
          session()->put('cart', $cart);
      
          return redirect()->route('cart.index')->with('success', 'Troli dikemas kini!');
      }
        
      // Delete item from the cart
      public function delete($index)
      {
          $cart = session()->get('cart', []);
  
          // Remove the item from the cart
          if (isset($cart[$index])) {
              unset($cart[$index]);
          }
  
          // Reindex the array to avoid gaps in keys
          $cart = array_values($cart);
  
          // Save updated cart back to session
          session()->put('cart', $cart);
  
          return redirect()->route('cart.index')->with('success', 'Item telah dihapus!');
      }
}
