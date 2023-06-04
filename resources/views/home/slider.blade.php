<div class="slider-area">
    <!-- Slider -->
    <div class="block-slider block-slider4">
        <ul class="" id="bxslider-home4">

            @foreach($sliderdata as $rs)
            <li>
                <img src="{{Storage::url($rs->image)}}" alt="Slide" style="width: 300px; height: 400px">
                <div class="caption-group">
                    <h2 class="caption title">
                        {{$rs->title}}
                    </h2>
                    <h4 class="caption subtitle">{{$rs->title}}</h4>
                    <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
    <!-- ./Slider -->
</div> <!-- End slider area -->
