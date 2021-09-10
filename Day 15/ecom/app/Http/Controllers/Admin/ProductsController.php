<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Redirect, Storage;

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
            'products' => Product::orderBy('id', 'DESC')->get()
        ]);
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function update($id)
    {
        return view('admin.products.update')->with([
            'data' => Product::find($id)
        ]);
    }

    public function update_save($id)
    {
        if($this->request->has('img')){ 
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
        }

        Product::find($id)->update(
            $this->request->except('_token')
        );

        return Redirect::route('admin.products');
    }

    public function delete($id)
    {
        Product::find($id)->delete();

        return Redirect::route('admin.products');
    }

    public function create_save()
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
}
