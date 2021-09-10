<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cache, Auth;
use App\Models\Product;
use Illuminate\Support\Env;
use \Stripe\StripeClient;

class CheckoutController extends Controller
{
    protected $request, $stripe;
    private $secret_key = 'sk_test_51JXzIfHsI10ZCmoJsLEtUNzsSlMT1mXDqbMCEcLr8GXJt6Fo7Z3dXZtsDHzCzFIBeko3dGoY6Or1FbKuVrCOb9Ib00q2PG7Aar';

    public function __construct(Request $request)
    {
        // dd(Env::get('STRIPE_SECRET_KEY'));
        $this->request = $request;

        $this->stripe = new StripeClient(
            $this->secret_key
        );
    }

    public function verify()
    {
        $charge = $this->stripe->charges->create([
            'amount' => number_format($this->request->total, 2, '',''),
            'currency' => 'php',
            'source' => 'tok_visa',
            'description' => 'Order from :'.Auth::user()->name,
        ]);

        Order::create([
            'user_id' => Auth::id(),
            'reference_no' => bcrypt(rand(11111, 99999)),
            'order_items' => Cache::get('cart'),
            'sub_total' => $this->request->total - 100,
            'delivery_fee' => 100,
            'total' => $this->request->total,
            'full_address' => $this->request->address,
            'payment_id' => $charge->id,
            'payment_response' => $charge,
            'payment_status' => $charge->status,
            'status' => 'Processing'
        ]);
        
        if($charge->status == 'status') {

        }

        abort(500);
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
