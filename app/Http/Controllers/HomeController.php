<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Appeler le model et recuperer les données des produits dans la base
        $product = Product::all();
        return view('home',['product'=>$product]);

    }

    public function create(){
        return view('ajoutProduct');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'quantity' => 'required',
        ]);

        $Produit = Product::create($data);
        return redirect(route('home'));
    }

    public function edit_Product(string $id){
        $product = Product::find($id);
//        dd($product->toArray());
        return view('edit', ['product' => $product]);
    }

    public function update_Product(Request $request){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'quantity' => 'required',
        ]);

//        dd($request->all());

        $product = Product::find($request -> id);
        $product->name =$request->name;
        $product->description =$request->description;
        $product->quantity =$request->quantity;
        $product->update();

        return redirect('/home');
    }

    public function delete_Product(string $id){
        $product = Product::find($id);
        $product -> delete();
        return redirect('/home');
    }
}
