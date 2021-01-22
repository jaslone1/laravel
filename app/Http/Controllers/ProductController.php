<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Respone;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all()->toArray();
        return array_reverse($products);
    }


    public function store(Request $request)
    {
        $product = new Product([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'detail' => $request->input('detail'),
        ]);
        $product->save();

        return response()->json('Product created!');
    }


    public function edit($id)
    {
        $product = Product::find($id);
        return response()->json($product);
    }

    // update product
    public function update($id, Request $request)
    {
        $product = Product::find($id);
        $product->update($request->all());

        return response()->json('The product successfully updated');
    }

    // delete product
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return response()->json('The product successfully deleted');
    }
}
