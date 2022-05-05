<?php

namespace App\Http\Controllers;

use App\Models\Shops_Product;
use App\Http\Requests\StoreShops_ProductRequest;
use App\Http\Requests\UpdateShops_ProductRequest;
use App\Models\ShopsProduct;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ShopsProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $shop=User::all()->first();
        $shops_products = ShopsProduct::where('shop_id', $shop->id)
        ->join('products', 'products.id', '=', 'shops_products.product_id')
        ->join('shops', 'shops.id', '=', 'shops_products.shop_id')
     
        ->get();
        dd($shops_products);
        return response()->json([
            'shops_products' => $shops_products,
            'status' => 'success',
            'message' => 'Shops_Products retrieved successfully'
        ], 200);
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
