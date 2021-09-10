@extends('site.layout')
@section('content')
    <main>
        <div class="page_header element_to_stick">
            <div class="container">
                <div class="row"> 
                    <div class="col-4"></div>
                    <div class="col-xl-4 col-lg-4 col-md-4" style="background: white; padding-bottom: 2%;"> 
                        <div class="modal_header">
                            <h3>Register Account</h3>
                        </div>
                        <form method="post" action="{{ URL::route('register.submit') }}">
                            @csrf
                            <div class="sign-in-wrapper"> 
                                <div class="form-group">
                                    <label>Fullname</label>
                                    <input type="text" class="form-control" name="name" id="email" required> 
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" id="email" required> 
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" id="password" required> 
                                </div>
                                <div class="clearfix add_bottom_15">
                                    <div class="checkboxes float-left">
                                        <label class="container_check">Remember me
                                          <input type="checkbox">
                                          <span class="checkmark"></span>
                                        </label>
                                    </div> 
                                </div>
                                <div class="text-center">
                                    <input type="submit" value="Register" class="btn_1 full-width mb_5"> 
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