<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Product;
use App\Models\Categorie;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{

    public function login(Request $request)
    {
        $rules = [
            'name' => 'required|',
            'password' => 'required|',
        ];
        $messages = [
            'name.required' => 'Поле логина обязательно для заполнения.',
        ];
        $validator = Validator::make($request->all(), $rules, $messages)->validate();
        if (Auth::attempt([
            'name' => $request->name,
            'password' => $request->password,
        ])){
            return redirect()->route('admin');
        }

        return redirect()->back()->with('error', 'Incorrect password or login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin');
    }

    public function show()
    {
        $products = Product::query()->orderBy('id', 'desc')->get();
        if (Auth::check()) {
            return view('admin', compact('products'));
        }else{
            return view('admin_login');
        }
    }
    public function add_product()
    {
        $categ = Categorie::query()->pluck('name', 'id')->all();
        return view('create_product', compact('categ'));
    }

    public function product_store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:60',
            'manufacturer' => 'required|max:60',
            'format' => 'required|max:100',
            'composition' => 'required|max:800',
            'price' => 'required|numeric',
            'image' => 'required|image',
            'categories_id' => 'required|exists:categories,id',
        ]);

        $image = $request->file('image')->store('images', 'public');

        Product::query()->create([
            'name' => $request->name,
            'manufacturer' => $request->manufacturer,
            'format' => $request->format,
            'composition' => $request->composition,
            'price' => $request->price,
            'image' => $image,
            'categories_id' => $request->categories_id,
        ])->save();
        $request->session()->flash('success', 'Товар добавлен!');
        return redirect()->route('admin');
    }

    public function product_edit_show($post_id)
    {
        $categ = Categorie::query()->pluck('name', 'id')->all();
        $product = Product::query()->where('id', $post_id)->first();
        return view('edit_product', compact('product', 'categ'));
    }

    public function product_edit_store(Request $request, $post_id)
    {

        $this->validate($request, [
            'name' => 'required|max:60',
            'manufacturer' => 'required|max:60',
            'format' => 'required|max:100',
            'composition' => 'required|max:800',
            'price' => 'required|numeric',
            'image' => 'image|nullable',
            'categories_id' => 'required|exists:categories,id',
        ]);

        $product = Product::query()->find($post_id);
        if (isset($request->image)) $image = $request->file('image')->store('images', 'public');
        $product->name = $request->name;
        $product->manufacturer = $request->manufacturer;
        $product->format = $request->format;
        $product->composition = $request->composition;
        $product->price = $request->price;
        $product->categories_id = $request->categories_id;
        if ($request->image){
            $image = $request->file('image')->store('images', 'public');
            $product->image = $image;
        }

        $product->save();
        $request->session()->flash('success', 'Товар изменен!');
        return redirect()->route('admin');

    }

    public function product_delete($post_id)
    {
        $prod = Product::query()->find($post_id);
        Storage::delete('public/' . $prod->image);
        $prod->delete();

        session()->flash('success', 'Товар удален!');
        return redirect()->route('admin');
    }
}
