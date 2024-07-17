<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $carts = Cart::with('produk')->where('id_user', Auth::id())->get();
        return view('user.checkout', compact('carts'));
    }

    public function placeOrder(Request $request)
    {
        $request->validate([
            'address' => 'required|string|max:255',
            'payment_method' => 'required|string|max:50',
        ]);

        $total = 0;
        $carts = Cart::with('produk')->where('id_user', Auth::id())->get();

        foreach ($carts as $cart) {
            $total += $cart->quantity * $cart->produk->harga;
        }

        $order = Order::create([
            'id_user' => Auth::id(),
            'address' => $request->address,
            'payment_method' => $request->payment_method,
            'total' => $total
        ]);

        foreach ($carts as $cart) {
            Transaksi::create([
                'id_order' => $order->id,
                'id_produk' => $cart->id_produk,
                'quantity' => $cart->quantity,
                'price' => $cart->produk->harga,
            ]);
            $cart->delete();
        }

        return redirect()->route('orders.index')->with('success', 'Order berhasil dibuat.');
    }
}
