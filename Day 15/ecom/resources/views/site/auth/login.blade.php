@extends('site.layout')
@section('content')
    <main>
        <div class="page_header element_to_stick">
            <div class="container">
                <div class="row"> 
                    <div class="col-4"></div>
                    <div class="col-xl-4 col-lg-4 col-md-4" style="background: white; padding-bottom: 2%;"> 
                        <div class="modal_header">
                            <h3>Sign In</h3>
                        </div>
                        <form action="{{ URL::route('login.verify') }}" method="post">
                            @csrf

                            @if(session('error'))
                                <p style="color: red;">
                                    Wrong Login Credentails!
                                </p>
                            @endif


                            <div class="sign-in-wrapper"> 
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" id="email"> 
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" id="password"> 
                                </div>
                                
                                <div class="text-center">
                                    <input type="submit" value="Log In" class="btn_1 full-width mb_5">
                                    Don’t have an account? <a href="{{ URL::route('register') }}">Sign up</a>
                                </div> 
                            </div>
                        </form> 
                    </div>
                    <div class="col-4"></div>
                </div>
            </div>
        </div>
    </main>
@endsection