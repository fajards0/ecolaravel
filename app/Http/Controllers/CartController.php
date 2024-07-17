<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Menampilkan isi keranjang
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $userId = Auth::id();
        $cartItems = Cart::with('produk')->where('id_user', $userId)->get();

        return view('user.cart', compact('cartItems'));
    }

    /**
     * Menambahkan produk ke keranjang
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $userId = Auth::id();
        $request->validate([
            'id_produk' => 'required|exists:produks,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $cartItem = Cart::where('id_user', $userId)
            ->where('id_produk', $request->id_produk)
            ->first();

        if ($cartItem) {
            $cartItem->quantity += $request->quantity;
            $cartItem->save();
        } else {
            Cart::create([
                'id_user' => $userId,
                'id_produk' => $request->id_produk,
                'quantity' => $request->quantity,
            ]);
        }

        return redirect()->route('cart.index')->with('success', 'Produk berhasil ditambahkan ke keranjang.');
    }

    /**
     * Mengupdate jumlah produk dalam keranjang
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $userId = Auth::id();
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        $cartItem = Cart::where('id_user', $userId)->where('id', $id)->first();

        if ($cartItem) {
            $cartItem->quantity = $request->quantity;
            $cartItem->save();

            return redirect()->route('cart.index')->with('success', 'Jumlah produk berhasil diupdate.');
        }

        return redirect()->route('cart.index')->with('error', 'Produk tidak ditemukan dalam keranjang.');
    }

    /**
     * Menghapus produk dari keranjang
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $userId = Auth::id();
        $cartItem = Cart::where('id_user', $userId)->where('id', $id)->first();

        if ($cartItem) {
            $cartItem->delete();

            return redirect()->route('cart.index')->with('success', 'Produk berhasil dihapus dari keranjang.');
        }

        return redirect()->route('cart.index')->with('error', 'Produk tidak ditemukan dalam keranjang.');
    }
}
