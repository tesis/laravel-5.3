<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;

class ProductsController extends Controller
{
    protected $rules;

    public function __construct()
    {
        $this->rules = [
            'productName' => 'required',
            'quantity' => 'required|integer',
            'price' => 'required|integer',
        ];
    }
    public function index()
    {
        $products = Product::orderBy('created_at','desc')->get();

        // return view('products.index', compact('products'));
        return view('products.index', ['products'=>$products]);
    }

    public function show(Product $product)
    {
        return view('products.show',  ['product' => $product]);
    }

    public function store(Request $request)
    {
        $this->validate($request, $this->rules);

        $product = new Product($request->all());
        $product->save();
        flash('Product has been successfully added', 'success');

        return redirect('products');
    }

    public function edit(Product $product)
    {
        return view('products.edit',['product' => $product]);
    }

    public function update(Request $request, Product $product)
    {
        $this->validate($request, $this->rules);


        $product->update($request->all());
        flash('Product has been successfully updated', 'success');

        return redirect('products');
    }

    public function confirmDelete(Product $product)
    {
        return view('products.delete', compact('product'));
    }

    public function delete(Product $product)
    {

        $product->destroy($product->id);
        flash('Product has been successfully deleted', 'success');

        return redirect('products');
    }
}
