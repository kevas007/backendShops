<?php

namespace App\Http\Controllers;

use App\Models\Shops_Product;
use App\Http\Requests\StoreShops_ProductRequest;
use App\Http\Requests\UpdateShops_ProductRequest;

class ShopsProductController extends Controller
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
     * @param  \App\Http\Requests\StoreShops_ProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShops_ProductRequest $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shops_Product  $shops_Product
     * @return \Illuminate\Http\Response
     */
    public function show(Shops_Product $shops_Product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shops_Product  $shops_Product
     * @return \Illuminate\Http\Response
     */
    public function edit(Shops_Product $shops_Product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateShops_ProductRequest  $request
     * @param  \App\Models\Shops_Product  $shops_Product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShops_ProductRequest $request, Shops_Product $shops_Product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shops_Product  $shops_Product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shops_Product $shops_Product)
    {
        //
    }
}
