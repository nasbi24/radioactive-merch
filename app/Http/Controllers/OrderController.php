<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Merch.checkout');
    }

    public function checkout(Request $request)
    {
        // $request->request->add(['total_price' => $request->qty * 75000, 'status' => 'Unpaid']);
        // $order = Order::create($request->all());

        // // Set your Merchant Server Key
        // \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        // \Midtrans\Config::$isProduction = false;
        // // Set sanitization on (default)
        // \Midtrans\Config::$isSanitized = true;
        // // Set 3DS transaction for credit card to true
        // \Midtrans\Config::$is3ds = true;

        // $params = array(
        //     'transaction_details' => array(
        //         'order_id' => $order->id,
        //         'gross_amount' => $order->total_price,
        //     ),
        //     'customer_details' => array(
        //         'first_name' => $request->name,
        //         'last_name' => '',
        //         'email' => $request->email,
        //         'phone' => $request->phone,
        //     ),
        // );

        // $snapToken = \Midtrans\Snap::getSnapToken($params);
        // return view('Tickets.checkout', compact('order', 'snapToken'));
    }
    public function orderPage() {
        if(Auth::check()){
            $cart = session('cart');
            return view('Merch.cart')->with('cart', $cart);
        } else {
            return redirect('/login');
        }
    }
    public function order(Request $request) {
        if(Auth::check()){
            Order::create([
                'name' => $request->name,
                'email' => $request->email,
                'wa' => $request->wa,
                'line' => $request->line,
                'image' => $request->file('payment_proof')->storePublicly('payment_images_merch', 'public'),
                'total_price' => $request->total_price,
                'status' => 'Unpaid'
            ]);

            return redirect('/merch');
        } else {
            return redirect('/login');
        }
    }

    public function callback(Request $request)
    {
        $serverKey = config('midtrans.server_key');
        $hashed = hash("sha512", $request->order_id . $request->status_code . $request->gross_amount . $serverKey);

        if ($hashed == $request->signature_key) {
            if ($request -> transaction_status == 'capture' or $request -> transaction_status == 'settlement') {
               $order = Order::find($request->order_id);
               $order->update(['status' => 'Paid']);
            }
        }
    }

    public function invoice($id)
    {
        $order = Order::find($id);
        return view('Tickets.invoice', compact('order'));
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