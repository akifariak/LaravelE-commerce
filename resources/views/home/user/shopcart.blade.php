@extends('layouts.frontbase')

@section('title', 'User ShopCart')

@section('content')

    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shopping Cart</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page title area -->



    <form method="post" action="#">
        <table cellspacing="0" class="shop_table cart">
            <thead>
            <tr>
                <th class="product-remove">&nbsp;</th>
                <th class="product-thumbnail">&nbsp;</th>
                <th class="product-name">Product</th>
                <th class="product-price">Price</th>
                <th class="product-quantity">Quantity</th>
                <th class="product-subtotal">Total</th>
            </tr>
            </thead>
            @php
                $total=0;
            @endphp
            @foreach($data as $rs)
                <tr>
                    <td class="thumb"><img src="{{Storage::url($rs->product->image)}}" alt=""></td>
                    <td class="details">
                        <a href="#">{{$rs->product->title}}</a>

                    </td>
                    <td class="price text-center"><strong>${{$rs->product->price}}</strong><br><del class="font-weak"></td>
                    <td class="qty text-center">

                        <form action="{{route('shopcart.update',['id' => $rs->id])}}" method="post">
                            @csrf
                            <input  name="quantity" type="number" value="{{$rs->quantity}}" min="1" max="{{$rs->product->quantity}}" onchange="this.form.submit()">
                        </form>
                    </td>
                    <td class="total text-center"><strong class="primary-color">${{$rs->product->price * $rs->quantity }}</strong></td>
                    <td class="text-right">

                        <a href="{{route('shopcart.destroy',['id'=>$rs->id])}}" class="main-btn icon-btn"
                           onclick="return confirm('Deleting !! Are you sure ?')"><i class="fa fa-close"></i></a>
                    </td>
                </tr>
                @php
                    $total += $rs->product->price * $rs->quantity;
                @endphp
            @endforeach
        </table>
    </form>
    </div>

@endsection



