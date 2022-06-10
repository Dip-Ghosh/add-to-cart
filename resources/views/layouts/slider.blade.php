@extends('layouts.app')
@section('slider')
    <div id="hero">
        <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
            <div class="item" style="background-image: url(assets/images/sliders/01.jpg);">
                <div class="container-fluid">
                    <div class="caption bg-color vertical-center text-left">
                        <div class="slider-header fadeInDown-1">Top Brands</div>
                        <div class="big-text fadeInDown-1"> New Collections</div>
                        <div class="excerpt fadeInDown-2 hidden-xs"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                        </div>
                        <div class="button-holder fadeInDown-3"><a href="index6c11.html?page=single-product"
                                                                   class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop
                                Now</a></div>
                    </div>
                </div>
            </div>

            <div class="item" style="background-image: url(assets/images/sliders/02.jpg);">
                <div class="container-fluid">
                    <div class="caption bg-color vertical-center text-left">
                        <div class="slider-header fadeInDown-1">Spring 2018</div>
                        <div class="big-text fadeInDown-1"> Women Fashion</div>
                        <div class="excerpt fadeInDown-2 hidden-xs"><span>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</span>
                        </div>
                        <div class="button-holder fadeInDown-3"><a href="index6c11.html?page=single-product"
                                                                   class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop
                                Now</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
