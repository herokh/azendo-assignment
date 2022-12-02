<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FrontendController extends Controller
{
    //
    public function index(Request $request)
    {
        $url = 'http://dummyjson.com/products';
        $response = Http::get($url);

        // this should have error handling when server goes down...
        $products = $response->json()['products'];

        return view('frontend.main', ['products' => $products]);
    }
}
