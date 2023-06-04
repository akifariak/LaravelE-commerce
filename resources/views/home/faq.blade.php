@extends('layouts.frontbase'),



@section('title', 'Frequently Asked Questions '. $setting->title)
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
                    <h1>Frequently Asked Questions </h1>

                    @foreach($datalist as $rs)
                        <h3>{{$rs->question}}</h3>
                        <p>{!! $rs->answer !!}</p>

                    @endforeach
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->





@endsection
