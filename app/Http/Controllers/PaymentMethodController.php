<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storepayment_methodRequest;
use App\Http\Requests\Updatepayment_methodRequest;
use App\Models\payment_method;

class PaymentMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storepayment_methodRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storepayment_methodRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\payment_method  $payment_method
     * @return \Illuminate\Http\Response
     */
    public function show(payment_method $payment_method)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\payment_method  $payment_method
     * @return \Illuminate\Http\Response
     */
    public function edit(payment_method $payment_method)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatepayment_methodRequest  $request
     * @param  \App\Models\payment_method  $payment_method
     * @return \Illuminate\Http\Response
     */
    public function update(Updatepayment_methodRequest $request, payment_method $payment_method)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\payment_method  $payment_method
     * @return \Illuminate\Http\Response
     */
    public function destroy(payment_method $payment_method)
    {
        //
    }
}