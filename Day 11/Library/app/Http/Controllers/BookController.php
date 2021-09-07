<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Author;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        $books = Book::all();

        return view('book.index')->withBooks($books);
    }

    public function create()
    {
        return view('book.create')->with([
            'authors' => Author::all(),
            'categories' => Category::all()
        ]);
    }

    public function store()
    {
        $imageName = strtotime(
            date('Y-m-d')).'-'. rand(11111,9999) .
            '.'.$this->request->image->extension();

        // path
        Storage::disk('public')->putFileAs(
            'books/',
            $this->request->image,
            $imageName
        );

        $data = $this->request->all();
        $data['image'] ='books/'.$imageName;

        Book::create($data);

        return Redirect::route('books.home');
    }
}
