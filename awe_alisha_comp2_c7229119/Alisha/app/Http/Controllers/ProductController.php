<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getAllProducts() {
        return view('welcome', ["products" => Product::all()]);
    }

    public function addNewProduct(Request $request) {
        Product::create($request->all());
        return redirect()->back();
    }

    public function showEditForm($id) {
        $product = Product::find($id);
        return view("editProduct", ['product' => $product]);
    }

    public function updateProduct(Request $request, $id) {
        Product::find($id)->update($request->all());
        return redirect("/");
    }

    public function deleteProduct($id) {
        Product::find($id)->delete();
        return redirect("/");
    }
}
