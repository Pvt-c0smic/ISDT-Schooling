<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Redirect, Auth;

class AuthController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        return view('site.auth.login');
    }

    public function register()
    {
        return view('site.auth.register');
    }

    public function register_submit()
    {
        $this->request->merge([
            'password' => bcrypt($this->request->password)
        ]);

        $user = User::create(
            $this->request->except('_token')
        );
 
        Auth::loginUsingId($user->id);

        return Redirect::route('homepage');
    }

    public function logout()
    {
        Auth::logout();

        return Redirect::route('homepage');
    }
    
    public function login_verify()
    {
        if(Auth::attempt($this->request->except('_token'))){
            return Redirect::route('homepage');
        }

        return back()->withError(true);
    }
}
