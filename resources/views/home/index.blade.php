@extends('layouts.frontbase')

@section('title' , $setting->title)
@section('description' , $setting->description)
@section('keywords' , $setting->keywords)
@section('icon' , Storage::url($setting->icon))


@section('content')


    <!-- Main content area -->

    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Products</h2>
                        <div class="product-carousel">

                            @foreach($productlist1 as $rs)
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="{{Storage::url($rs->image)}}" style="width: 600px; height: 250px">
                                        <div class="product-hover">
                                            <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="{{route('product', ['id'=>$rs->id])}}" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="single-product.html">{{$rs->title}}</a></h2>

                                    <div class="product-carousel-price">
                                        <ins>{{$rs->price}}</ins> <del>{{$rs->price * 1.10}}</del>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->

@endsection

