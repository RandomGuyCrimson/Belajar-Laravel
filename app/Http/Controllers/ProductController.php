<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Show Form
        return view("/Barang/tambah");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Execute Data to Database
        Product::create($request->except(['_token','submit']));
        return redirect("/Product");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        // Show Data Product
        $products = Product::all();
        return view("/Barang/data", compact(["products"]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($kode_barang)
    {
        // First Part - Edit - Show Pre-Edited
        $product = Product::where('kode_barang', $kode_barang)->firstOrFail();
        return view("/Barang/edit", compact(["product"]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update($kode_barang, Request $request)
    {
        $product = Product::where('kode_barang', $kode_barang)->firstOrFail();
        $product->update($request->except(['_token','submit']));
        return redirect("/Barang/data");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($kode_barang)
    {
        // Delete Products
        $product = Product::where('kode_barang', $kode_barang)->delete();
        return redirect("/Product");
    }
}
