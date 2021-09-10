<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cache, Auth;
use App\Models\Product;
use \Stripe\StripeClient;

class CheckoutController extends Controller
{
    protected $request, $stripe;

    public function __construct(Request $request)
    {
        $this->request = $request;

        $this->stripe = new StripeClient(
            env('STRIPE_SECRET_KEY')
        );
    }

    public function verify()
    {
        $charge = $this->stripe->charges->create([
            'amount' => $this->request->total,
            'currency' => 'php',
            'source' => 'tok_visa',
            'description' => 'Order from :'.Auth::user()->name,
        ]);
        
        dd($charge);
    }

    public function index()
    { 
        $cart = Cache::get('cart') ?? [];
        $items = [];
        $total = 0;

        foreach($cart as $product_id => $item){
            $product = Product::find($product_id);

            $product->qty = $item['qty'];

            $product->total = $item['qty'] * $product->price;

            $total += $product->total;

            array_push($items, $product);
        }
 
        return view('site.checkout.cart')->with([
            'items' => $items,
            'total' => $total
        ]);
    }
}
