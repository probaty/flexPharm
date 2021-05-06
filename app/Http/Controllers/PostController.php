<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Product;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(Request $request)
    {
        $check='';


        foreach ($request->all() as $r){
            $check .= $r . ',';
        }
        $check = substr($check,0,-1);
        if (count($request->all()) > 0){
            $products = Product::query()->whereIn('categories_id',$request->all())->orderBy('id', 'desc')->get();
        }else{
            $products = Product::query()->orderBy('categories_id', 'desc')->get();
        }
        $cat = Categorie::query()->orderBy('id', 'desc')->get();
//        dd($check);
//        dd($request->all());

        return view('catalog',compact('products', 'cat'));
    }

    public function show_product($post_id)
    {
        $product = Product::query()->find($post_id);
        $cat = Categorie::query()->find($product->categories_id);
        return view('product', compact('product', 'cat'));
    }
}
