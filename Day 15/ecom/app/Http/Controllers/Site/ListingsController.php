<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Cache, Redirect;

class ListingsController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        $product = Product::all();
        
        return view('site.listing.index')->with([
            'products' => $product
        ]);
    }

    public function add_to_cart($id)
    {
        // check if session exists
        // create session / get session
        // product available 
        // add to session

        $cart = 'cart'; 
         
        // if there is no cart 
        if(!Cache::has($cart)){
            Cache::put('cart', []);
        }
        
        $current_cart = Cache::get($cart); 

        // if products exists 
        if(array_key_exists((integer) $id, $current_cart)){ 
            $current_cart[$id]['qty'] = $current_cart[$id]['qty'] + 1;
        } else {
            $current_cart[$id] = [
                'qty' => 1
            ];
        } 

        Cache::put($cart, $current_cart);

        return Redirect::route('homepage');
    }
}
