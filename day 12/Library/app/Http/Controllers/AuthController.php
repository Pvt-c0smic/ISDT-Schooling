<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        return view('index');
    }

    public function home()
    {
        return view('books.home');
    }

    public function verify()
    {
        $verify = Auth::attempt(
            $this->request->except('_token')
        );

        if($verify) {
            return Redirect::route('books.home');
        }

        return Redirect::route('login')->withError('Wrong login credentials!');
    }

    public function logout()
    {
        Auth::logout();

        return Redirect::route('login');
    }
}
