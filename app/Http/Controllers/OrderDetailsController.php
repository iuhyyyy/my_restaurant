<?php

namespace App\Http\Controllers;

use App\Models\order_details;
use App\Http\Requests\Storeorder_detailsRequest;
use App\Http\Requests\Updateorder_detailsRequest;

class OrderDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orderdetails =order_details::all();
        return $orderdetails;
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
    public function store(Storeorder_detailsRequest $request)
    {
        $orderdetails = new order_details;
        $orderdetails->order_id = $request->order_id;
        $orderdetails->menu_id = $request->menu_id;
        $orderdetails->quantinty = $request->quantinty;

        $orderdetails->save();
        return $orderdetails;
    }

    /**
     * Display the specified resource.
     */
    public function show(order_details $order_details)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(order_details $order_details)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updateorder_detailsRequest $request, order_details $order_details)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(order_details $order_details)
    {
        //
    }
}
