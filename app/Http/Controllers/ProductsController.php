<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('titulo')->get();

        return response()->json([
            'data' => [
                'products' => $products
            ]
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $orderProducts = $request->get('orderProducts');

        if ($orderProducts == 1) {
            $products = Product::orderBy('titulo')->get();
        }

        if ($orderProducts == 2) {
            $products = Product::orderBy('precio')->get();
        }

        if ($orderProducts == 3) {
            $products = Product::orderBy('precio', 'DESC')->get();
        }

        if ($orderProducts == 4) {
            $products = Product::orderBy('fecha_inicio')->get();
        }

        return response()->json([
            'products' => $products
        ]);
    }
}
