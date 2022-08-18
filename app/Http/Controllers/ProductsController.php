<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('home', compact('products'));
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function purchase(Product $product, $payment_method_id)
    {
        $stripeCharge = (new User)->charge((int)($product->price), $payment_method_id, [
            'description' => 'Product purchase',
            'metadata' => [
                'name' => 'Jenny Rosen',
                'address' => "sdsdsdsd",
            ],
            'shipping' => [
                'name' => 'Jenny Rosen',
                'address' => [
                    'line1' => '510 Townsend St',
                    'postal_code' => '98140',
                    'city' => 'San Francisco',
                    'state' => 'CA',
                    'country' => 'US',
                ],
            ],
        ]);

        if ($stripeCharge) {
            return redirect('/purchase_successful');
        } else {
            return redirect('/');
        }
    }

    public function purchase_successful()
    {
        return view('products.purchase_successful');
    }
}
