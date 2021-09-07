<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        $category = Category::all();

        return view('category.index')->withCategory($category);
    }

    public function create()
    {
        return view('category.create');
    }

    public function store()
    {

        Category::create($this->request->except('_token'));

        return Redirect::route('category.home');
    }

    public function show($id)
    {
        $category = Category::find($id);

        return view('category.show')->withCategory($category);
    }

    public function update($id)
    {
        $category = Category::find($id);

        $category->update($this->request->all());

        return Redirect::route('category.home');
    }

    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();

        return Redirect::route('category.home');

    }
}
