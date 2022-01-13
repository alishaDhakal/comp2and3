<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(){
        return view('dashboard',[
            'products' => Product::orderBy('id','DESC')->paginate(10)
        ]);
    }

    public function deleteProduct(Request $request, $id){
        Product::findOrFail($id)->delete($request->all());
        return redirect('dashboard');
    }
}
