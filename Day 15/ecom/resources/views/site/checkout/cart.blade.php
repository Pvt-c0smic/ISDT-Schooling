@extends('site.layout')
@section('content') 
    <main class="bg_gray pattern">
            
        <div class="container margin_60_40">
            <div class="row justify-content-center">
                @if(session('success'))
                    <div class="col-xl-10 col-lg-10" id="sidebar_fixed">
                        <div class="box_booking"   style="background: white; padding:4%;">
                            <div class="head">
                                <h3>Order Success</h3> 
                            </div> 
                            <div class="main">
                                Your payment was successful, order is now procesing!
                            </div>
                        </div>
                    </div>
                @endif
                @if(!session('success'))
                    <div class="col-xl-6 col-lg-8" style="background: white; padding:2%;">
                        <form action="{{ URL::route('checkout.verify') }}" method="post">
                            <input type="hidden" name="total" value="{{ $total + 100 }}">
                            @csrf
                            <div class="box_booking_2 style_2">
                                <div class="head">
                                    <div class="title">
                                        <h3>Personal Details</h3>
                                    </div>
                                </div>
                                <!-- /head -->
                                <div class="main">
                                    <div class="form-group">
                                        <label>First and Last Name</label>
                                        <input class="form-control" value="{{ Auth::user()->name }}" readonly>
                                    </div> 
                                    <div class="form-group">
                                        <label>Full Address</label>
                                        <input class="form-control" name="address">
                                    </div> 
                                </div>
                            </div> 
                            <div class="box_booking_2 style_2">
                                <div class="head">
                                    <div class="title">
                                        <h3>Payment Method</h3>
                                    </div>
                                </div>
                                <!-- /head -->
                                <div class="main">
                                    <div class="payment_select">
                                        <label class="container_radio">Credit Card
                                            <input type="radio" value="" checked name="payment_method">
                                            <span class="checkmark"></span>
                                        </label>
                                        <i class="icon_creditcard"></i>
                                    </div>
                                    <div class="form-group">
                                        <label>Name on card</label>
                                        <input type="text" class="form-control" id="name_card_order" name="name_card_order" placeholder="First and last name">
                                    </div>
                                    <div class="form-group">
                                        <label>Card number</label>
                                        <input type="text" id="card_number" name="card_number" class="form-control" placeholder="Card number">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Expiration date</label>
                                            <div class="row">
                                                <div class="col-md-6 col-6">
                                                    <div class="form-group">
                                                        <input type="text" id="expire_month" name="expire_month" class="form-control" placeholder="mm">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-6">
                                                    <div class="form-group">
                                                        <input type="text" id="expire_year" name="expire_year" class="form-control" placeholder="yyyy">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Security code</label>
                                                <div class="row">
                                                    <div class="col-md-4 col-6">
                                                        <div class="form-group">
                                                            <input type="text" id="ccv" name="ccv" class="form-control" placeholder="CCV">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 col-6">
                                                        <img src="{{ URL::asset('theme/img/icon_ccv.gif') }}" width="50" height="29" alt="ccv"><small>Last 3 digits</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12"> 
                                            <button href="" class="btn_1 full-width mb_5">Place Order</button> 
                                        </div>
                                    </div>  
                                </div>
                            </div> 
                        </form>
                    </div> 
                    <div class="col-xl-4 col-lg-4" id="sidebar_fixed">
                        <div class="box_booking"   style="background: white; padding:4%;">
                            <div class="head">
                                <h3>Order Summary</h3> 
                            </div>
                            <!-- /head -->
                            <div class="main">
                                <ul>
                                    <li>Date: <span>{{ \Carbon\Carbon::now()->format('M d, Y') }}</span></li>
                                    <li>Hour: <span>{{ \Carbon\Carbon::now()->format('h:i A') }}</span></li>
                                    <li>Type<span>Delivery</span></li>
                                </ul>
                                <hr>
                                <ul class="clearfix">
                                    @foreach($items as $item)
                                        <li>
                                            <b class="pull-right text-right">
                                                P {{ number_format($item->total, 2, '.', ',') }}
                                            </b><br>

                                            {{ $item->qty }}x {{ $item->name }}
                                            <br><br>
                                        </li> 
                                    @endforeach
                                </ul>
                                
                                <ul class="clearfix">
                                    <li>
                                        Subtotal: 
                                        <span>P {{ number_format($total, 2, '.', ',') }}</span>
                                    </li>
                                    <li>
                                        Delivery fee: 
                                        <span>P {{ number_format(100, 2, '.', ',') }}</span>
                                    </li>
                                    <li class="total">
                                        Total: 
                                        <span>P {{ number_format(($total + 100), 2, '.', ',') }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /box_booking -->
                    </div>
                @endif
            </div> 
        </div> 
        
    </main>
@endsection 