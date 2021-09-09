<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        return view('admin.products.index')->with([
            'products' => Product::all()
        ]);
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store()
    {
        $img_name = strtotime(date('Y-m-d'))
            .'_'.rand(11111,99999)
            .'.'.$this->request->img->extension();

        /**
         * putFileAs(path, image object, image name);
         */
        Storage::disk('public')->putFileAs(
            'products',
            $this->request->img,
            $img_name
        );

        $this->request->merge([
            'image' => 'products/'.$img_name
        ]);

        Product::create(
            $this->request->except('_token')
        );

        return Redirect::route('admin.products');
    }

    public function update($id)
    {
        $product = Product::find($id);

        if($this->request->has('img')){
            $img_name = strtotime(date('Y-m-d'))
                .'_'.rand(11111,99999)
                .'.'.$this->request->img->extension();

            Storage::disk('public')->putFileAs(
                'products',
                $this->request->img,
                $img_name
            );

            $this->request->merge([
                'image' => 'products/'.$img_name
            ]);
        }

        $product->update(
            $this->request->except('_token')
        );

        return Redirect::route('admin.products');
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('admin.products.edit')->withProduct($product);
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();

        return Redirect::route('admin.products');
    }


}
