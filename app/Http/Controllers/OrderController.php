<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = auth()->user()->order;
        return view('order', compact('orders'), [
            "title" => "Order"
        ]);

    }
    public function completeOrder($id)
    {
        $user = \App\Models\User::find(Auth::id());
        $order = $user->order()->findOrFail($id);

        $order->orderStatusHistories()->updateOrCreate([
            'order_status_id' => 5,
        ]);

        $order->order_status_id = 5;
        $order->save();

        return redirect()->back()->with('success', 'Order completed successfully.');
    }

    public function listOrder()
    {
        
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
    public function store(StoreOrderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
