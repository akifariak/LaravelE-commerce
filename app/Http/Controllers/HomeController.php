<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Faq;
use App\Models\Product;
use App\Models\Settings;
use http\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index(){
        $sliderdata = Product::limit(5)->get();
        $productlist1 = Product::limit(5)->get();
        $setting= Settings::first();

        return view('home.index', [
            'setting'=>$setting,
            'sliderdata'=>$sliderdata,
            'productlist1'=>$productlist1

        ]);
    }

    public function about(){

        $setting= Settings::first();
        return view('home.about', [
            'setting'=>$setting,

        ]);
    }

    public function references(){

        $setting= Settings::first();
        return view('home.reference', [
            'setting'=>$setting,

        ]);
    }

    public function contact(){

        $setting= Settings::first();
        return view('home.contact', [
            'setting'=>$setting,

        ]);
    }
    public function faq(){

        $setting= Settings::first();
        $datalist= Faq::all();
        return view('home.faq', [
            'setting'=>$setting,
            'datalist'=>$datalist,

        ]);
    }

    public function storemessage(Request $request){


        //dd($request);
        $data= new \App\Models\Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->ip=request()->ip();
        $data->save();
        return redirect()->route('contact')->with('info','Your message has been sent, Thank you.');
    }






    public function product($id){

        $data= Product::find($id);
        $productlist1 = Product::limit(4)->get();
        $images = DB::table('images')->where('product_id',$id)->get();
        return view('home.product', [
            'data'=>$data,
            'images'=>$images,
            'productlist1'=>$productlist1
        ]);
    }

    public function categoryproducts($id){

        $category = Category::find($id);
        $products = DB::table('products')->where('category_id',$id)->get();
        return view('home.categoryproducts', [
            'category'=>$category,
            'products'=>$products,
        ]);
    }

    public function login(){
        return view('admin.login');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
    public function loginadmincheck(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'error' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

}
