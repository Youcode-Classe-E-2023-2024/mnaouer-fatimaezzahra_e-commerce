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

}
