<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AuthorController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        $authors= Author::all();
        return view('author.index')->withAuthors($authors);
    }

    public function create()
    {
        return view('author.create');
    }

    public function store()
    {
        Author::create($this->request->except('_token'));

        return Redirect::route('author.home');
    }

    public function show($id)
    {
        $author = Author::find($id);

        return view('author.show')->withAuthor($author);;
    }

    public function update($id)
    {
        $author = Author::find($id);

        $author->update($this->request->all());

        return Redirect::route('author.home');

    }

    public function delete($id)
    {
        $author = Author::find($id);

        $author->delete();

        return Redirect::route('author.home');

    }
}
