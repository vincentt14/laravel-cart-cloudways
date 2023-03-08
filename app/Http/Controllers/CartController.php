<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart()
    {
        dd(session('cartItems'));
        return view('cart.cart');
    }

    public function addToCart($id)
    {
        $product = Product::FindOrFail($id);
        $cartItems = session()->get('cartItems', []);

        if (isset($cartItems[$id])) {
            $cartItems[$id]['quantity']++;
        } else {
            $cartItems[$id] = [
                'image_path' => $product->image_path,
                'name' => $product->name,
                'detail' => $product->detail,
                'price' => $product->price,
                'quantity' => 1
            ];
        }

        session()->put('cartItems', $cartItems);
        return redirect()->back()->with('success', 'Product Added to Cart!');
    }
}