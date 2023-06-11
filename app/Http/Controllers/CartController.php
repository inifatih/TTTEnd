<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Post;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function index()
     {
        $user = Auth::user();

        $cart = Cart::where('user_id', $user->id)->first();
        return view('cart', compact('cart'));
    }

    public function order(Request $request)
    {
        $user = User::find(Auth::id());
        
        $cart = session()->get('cart', []);

        $order = $user->order()->create([
            'order_name' => $request->input('name'),
            'order_phone' => $request->input('phone'),
            'order_email' => $request->input('email'),
            'order_address' => $request->input('address'),
            'order_payment' => $request->input('paymentMethod'),
            'order_status' => 'On Process',
        ]);

        foreach(session('cart') as $id => $details){
            $order->orderDetail()->create([
                'post_id' => $id,
                'quantity' => $details['quantity']
            ]);
        }


        return redirect('/');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Cart::create([
            'user_id' => Auth::user()->id,
            // 'post_id' => $request->post_id,
            'quantity' => 1
        ]);
        return redirect('/main');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCartRequest $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
