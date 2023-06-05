@extends('layouts.frontbase')

@section('title', $data->title)

@section('content')

    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shop</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Search Products</h2>
                        <form action="">
                            <input type="text" placeholder="Search products...">
                            <input type="submit" value="Search">
                        </form>
                    </div>

                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Products</h2>
                        @foreach($productlist1 as $rs)
                        <div class="thubmnail-recent">
                            <img href="{{asset('assets')}}/img/{{$rs->image}}" target="_blank" src="{{Storage::url($rs->image)}}" class="recent-thumb" alt="">
                            <h2><a href="">{{$rs->title}}</a></h2>
                            <div class="product-sidebar-price">
                                <ins>{{$data->price}}</ins>
                            </div>
                        </div>
                        @endforeach


                    </div>

                </div>

                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="product-breadcroumb">
                            <a href="">Home</a>
                            <a href="">{{$data->category->title}}</a>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-images">
                                    @foreach($images as $rs)
                                    <div class="product-main-img">
                                        <img src="{{Storage::url($rs->image)}}" alt="" style="height: 400px ; width: 300px">
                                    </div>
                                    @endforeach

                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <h2 class="product-name">{{$data->title}}</h2>
                                    <div class="product-inner-price">
                                        <ins>{{$data->price}}</ins>
                                    </div>

                                    <form action="{{route('shopcart.store')}}" class="cart" method="post">
                                        @csrf
                                        <div class="quantity">
                                            <input type="number"  class="input-text qty text" title="Qty" value="1" min="1" name="quantity" >
                                            <input type="number"  class="input-text qty text" title="hidden" value="{{$data->id}}" min="1" name="quantity" >
                                        </div>
                                        <button  class="add_to_cart_button" type="submit">Add to cart</button>
                                    </form>


                                    <div role="tabpanel">
                                        <ul class="product-tab" role="tablist">
                                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                <h2>Product Description</h2>
                                                <p>{!! $data->detail !!} </p>


                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                                <h2>Reviews</h2>
                                                <div class="submit-review">
                                                    <p><label for="name">Name</label> <input name="name" type="text"></p>
                                                    <p><label for="email">Email</label> <input name="email" type="email"></p>
                                                    <div class="rating-chooser">
                                                        <p>Your rating</p>

                                                        <div class="rating-wrap-post">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <p><label for="review">Your review</label> <textarea name="review" id="" cols="30" rows="10"></textarea></p>
                                                    <p><input type="submit" value="Submit"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
