<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        // Ensure the user is authenticated
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Musisz być zalogowany, aby złożyć zamówienie.');
        }


        $cart = json_decode($request->input('cart'), true); // Retrieve cart data
        $totalPrice = $request->input('total_price');

        // Create the order
        $order = Order::create([
            'user_id' => Auth::id(),
            'cart' => json_encode($cart), // Store cart data in JSON format
            'name' => $request->input('imie'),
            'surname' => $request->input('nazwisko'),
            'email' => $request->input('email'),
            'phone' => $request->input('telefon'),
            'total_price' => $totalPrice,
        ]);

        // Debug: Check if order was created
        logger('Order Created', $order->toArray());

        //return redirect()->route('order.success')->with('message', 'Zamówienie zostało złożone.');
    }
}
