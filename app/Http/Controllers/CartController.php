<?php

// app/Http/Controllers/CartController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request, $merchandise)
    {
        // Assuming $merchandise is the ID of the merchandise you want to add to the cart

        // Check if the cart session variable exists, create it if not
        $cart = session()->get('cart', []);

        // Check if the merchandise is already in the cart, increase the quantity
        if (isset($cart[$merchandise])) {
            $cart[$merchandise]['quantity']++;
        } else {
            // If not, add the merchandise to the cart with a quantity of 1
            $cart[$merchandise] = [
                'quantity' => 1,
                // You might want to store more details about the merchandise here
            ];
        }

        // Store the updated cart back in the session
        session()->put('cart', $cart);

        // Redirect the user to the cart page or any other page
        return redirect()->route('cart.show')->with('success', 'Product added to cart successfully');
    }

    public function show()
    {
        // Retrieve the cart data from the session
        $cart = session()->get('cart', []);

        // You can return a view to display the cart contents
        return view('cart.show', ['cart' => $cart]);
    }
}
