<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;

class HomeController extends Controller
{
    function index(): View
    {
        $products = Product::all();

        return view('layouts.home.index', compact('products'));
    }
}
