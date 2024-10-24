<?php

namespace App\Http\Controllers;

use App\Models\payment;
use App\Http\Requests\StorepaymentRequest;
use App\Http\Requests\UpdatepaymentRequest;
use App\Models\User;
use App\Notifications\SendPaymentEmail;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payment = payment::all();
        return $payment;
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
    public function store(StorepaymentRequest $request)
    {
        $payment = new payment;
        $payment->paymeny_type = $request->payment_type;
        $payment->amount = $request->amount;
        $payment->user_id = $request->user_id;
        $payment->payment_status = $request->payment_status;
        $payment->order_id = $request->order_id;
        $payment->save();

        $user = User::find($request->user_id);
        $user->notify(new SendPaymentEmail($user,$payment));
        return $payment;
    }

    /**
     * Display the specified resource.
     */
    public function show(payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepaymentRequest $request, payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(payment $payment)
    {
        //
    }
}
