<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class Productcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('form');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $product = new Product();
        $product->name = $request->name;
        $product->discription = $request->discription;
        $product->amount=$request->amount;
        $product->expier_date=$request->expier_date;
        $product->save();
        return view('form');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $data = Product::all();
        return view('viewproduct')->with('products', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function find(Product $product){
        $product = Product::find($product->id);
        return view('update')->with('product', $product);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $product = Product::find($request->id);
        $product->name=$request->name;
        $product->discription=$request->discription;
        $product->amount=$request->amount;
        $product->expier_date=$request->expier_date;
        $product->save();

        $data=Product::all();
        return view('viewproduct')->with('products' ,$data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product=Product::find($product->id);
        $product->delete();

        $data=Product::all();
        return view('viewproduct')->with('products', $data );

    }
}
