@extends('layouts.frontbase'),


@section('title', 'Contact Us '. $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))




@section('content')
    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-8">
                    @include('home.messages')
                    <form enctype="multipart/form-data" action="{{route("storemessage")}}" class="checkout"
                          method="post" name="checkout">
                        @csrf
                        <div id="customer_details" class="col2-set">
                            <div class="col-1">
                                <div class="woocommerce-billing-fields">
                                    <h3>Contact Form</h3>

                                    <div class="form-group">
                                        <input class="input" type="text" name="name" placeholder="Name & Surname">
                                    </div>
                                    <div class="form-group">
                                        <input class="input" type="tel" name="phone" placeholder="Phone Number">
                                    </div>
                                    <div class="form-group">
                                        <input class="input" type="email" name="email" placeholder="Email">
                                    </div>

                                    <div class="form-group">
                                        <input class="input" type="text" name="subject" placeholder="Subject">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="input" type="text" name="message" placeholder="Your Message"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <input class="input" type="submit" value="Send Message">
                                    </div>

                                    <div class="clear"></div>
                                </div>
                            </div>


                        </div>

                        <h3 id="order_review_heading">{{$setting->company}} Contact Information</h3>

                        <div id="order_review" style="position: relative;">
                            <table class="shop_table">
                                <thead>
                                <tr>
                                    <th class="product-name">E-mail</th>
                                    <th class="product-total">{{$setting->email}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="cart_item">
                                    <td class="product-name">Phone Number</td>
                                    <td class="product-total">
                                        <span class="amount">{{$setting->phone}}</span></td>
                                </tr>
                                </tbody>
                                <tfoot>

                                <tr class="cart-subtotal">
                                    <th>Adress</th>
                                    <td><span class="amount">{{$setting->address}}</span>
                                    </td>
                                </tr>

                                </tfoot>
                            </table>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- /row -->
    </div>
    <!-- /container -->
    </div>
    <!-- /section -->

@endsection
