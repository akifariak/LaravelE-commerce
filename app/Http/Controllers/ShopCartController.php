<?php

namespace App\Http\Controllers;

use App\Models\ShopCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopCartController extends Controller
{
    public static function countshopcart()
    {
        return ShopCart::where('user_id', Auth::id())->count();
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $productlist1 = ShopCart::limit(5)->get();
        $data = ShopCart::where('user_id', Auth::id())->get();
        return view('home.user.shopcart',[
            'data'=>$data,
            'productlist1'=>$productlist1
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $id=+$request->id;
        $data = ShopCart::where('product_id' ,$id)->where('user_id',Auth::id())->first;
        if ($data)
        {
            $data->quantity = $data->quantity + $request->input('quantity');
        }else
        {
            $data= new ShopCart();
            $data->product_id = $request->input('id');
            $data->user_id = Auth::id();
            $data->quantity = $request->input('quantity');
            $data->save();
            return redirect()->back()->with('info','Product added to ShopCart.');
        }
        $data->save();
        return redirect()->back()->with('info','Product added to ShopCart.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
