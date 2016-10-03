<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('created_at','desc')->get();
        $sum = 0;
        foreach ($products as $product) {
            $sum += ($product->quantity * $product->price);
        }
        return view('products.index', ['products'=>$products, 'sum' => $sum]);
    }

    public function show(Product $product)
    {
        return view('products.show',  ['product' => $product]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'productName' => 'required',
            'quantity' => 'required',
            'price' => 'required',
        ]);

        $product = new Product($request->all());
        $product->save();
        return redirect('products');
    }
    public function edit(Product $product)
    {
        return view('products.edit',['product' => $product]);
    }

    public function update(Request $request, Product $product)
    {
        $this->validate($request, [
            'productName' => 'required',
            'quantity' => 'required',
            'price' => 'required',
        ]);


        $product->update($request->all());

        return redirect('products');
    }
}
