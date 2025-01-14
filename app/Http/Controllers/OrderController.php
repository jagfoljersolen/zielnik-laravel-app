<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        

        $cart = json_decode($request->input('cart'), true);
        $totalPrice = $request->input('total_price');

        
        $order = Order::create([
            'user_id' => Auth::id(),
            'cart' => json_encode($cart), 
            'name' => $request->input('imie'),
            'surname' => $request->input('nazwisko'),
            'email' => $request->input('email'),
            'phone' => $request->input('telefon'),
            'total_price' => $totalPrice,
        ]);

        

        return redirect()->route('confirmation');
    }
}
