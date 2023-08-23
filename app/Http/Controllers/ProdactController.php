<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Products;
use Illuminate\Http\Request;

class ProdactController extends Controller
{

    public function products() {
        $products = Products::latest()->get();
        return view('products.index', (['products'=>$products]));
    }


    public function showOneProduct($id) {
        $product = Products::find($id);
        return view('products.showOneProduct',(['product'=>$product]));
    }

    public function addToCart($id) {
        $user = auth()->user();
        if($user == null) {
            return redirect()->back();
        }
        Cart::create([
            'user_id' => $user->id,
            'product_id' => $id
        ]);
        return redirect()->route('cart');

    }

    public function cart() {
        $user = auth()->user();
        $carts = Cart::where('user_id', $user->id)->get();
        
        return view('products.cart',['carts' => $carts]);
    }

    public function deleteFromCart($cart_id) {
        $cart = Cart::find($cart_id);
        $cart->delete();
         return redirect()->route('cart');

    }

  
}
