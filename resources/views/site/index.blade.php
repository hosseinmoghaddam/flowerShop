@extends('site.layout.container')

@section('content')
    <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-xs-12">
            <!-- Slideshow Start-->
            <div class="slideshow single-slider owl-carousel">
                <div class="item"> <a href="#"><img class="img-responsive" src="/site/image/slider/banner-2.jpg" alt="banner 2" /></a> </div>
                <div class="item"> <a href="#"><img class="img-responsive" src="/site/image/slider/banner-1.jpg" alt="banner 1" /></a> </div>
            </div>
            <!-- Slideshow End-->
            <!-- Banner Start-->
            <div class="marketshop-banner">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><a href="#"><img src="/site/image/banner/sample-banner-3-300x300.jpg" alt="بنر نمونه 2" title="بنر نمونه 2" /></a></div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><a href="#"><img src="/site/image/banner/sample-banner-1-300x300.jpg" alt="بنر نمونه" title="بنر نمونه" /></a></div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><a href="#"><img src="/site/image/banner/sample-banner-2-300x300.jpg" alt="بنر نمونه 3" title="بنر نمونه 3" /></a></div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><a href="#"><img src="/site/image/banner/sample-banner-4-300x300.jpg" alt="بنر نمونه 4" title="بنر نمونه 4" /></a></div>
                </div>
            </div>
            <!-- Banner End-->
            <!-- محصولات Tab Start -->
            <div id="product-tab" class="product-tab">
                <ul id="tabs" class="tabs">
{{--                    {{ dd($cat1[0]) }}--}}
                    @foreach($cat1[0] as $cat)
                        {{--@dd($cat)--}}
                            <li><a href="#tab-{{ $cat->en_name }}">{{ $cat->name }}</a></li>
                    @endforeach
                        {{--          <li><a href="#tab-latest">جدیدترین</a></li>
                                  <li><a href="#tab-bestseller">پرفروش</a></li>
                                  <li><a href="#tab-special">پیشنهادی</a></li>--}}

                </ul>
                @foreach($cat1[0] as $cat)
                <div id="tab-{{ $cat->en_name }}" class="tab_content">
                    <div class="owl-carousel product_carousel_tab">
                        @foreach($cat->products as $product)
                        <div class="product-thumb clearfix">
                            <div class="image"><a href="product.html"><img src="{{ $product->image1 }}" alt="تی شرت کتان مردانه" title="تی شرت کتان مردانه" class="img-responsive" /></a></div>
                            <div class="caption">
                                <h4><a href="product.html">{{ $product->name }}</a></h4>
                                <p class="price"><span class="price-new">{{ $product->price }} تومان</span> <span class="price-old">122000 تومان</span><span class="saving">-10%</span></p>
                            </div>
                            <div class="button-group">
                                <button class="btn-primary" type="button" onClick="cart.add('42');"><span>افزودن به سبد</span></button>
                                <div class="add-to-links">
                                    <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی ها" onClick=""><i class="fa fa-heart"></i></button>
                                    <button type="button" data-toggle="tooltip" title="مقایسه این محصول" onClick=""><i class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
   @endforeach
                    </div>
                </div>
                @endforeach
            </div>    <!-- محصولات Tab Start -->
            <!-- Banner Start -->
            <div class="marketshop-banner">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><a href="#"><img src="/site/image/banner/sample-banner-4-600x250.jpg" alt="2 Block Banner" title="2 Block Banner" /></a></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><a href="#"><img src="/site/image/banner/sample-banner-5-600x250.jpg" alt="2 Block Banner 1" title="2 Block Banner 1" /></a></div>
                </div>
            </div>
            <!-- Banner End -->
            <!-- دسته ها محصولات Slider Start-->
            <div class="category-module" id="latest_category">
                <h3 class="subtitle">مد و زیبایی - <a class="viewall" href="category.tpl">نمایش همه</a></h3>
                <div class="category-module-content">
                    <ul id="sub-cat" class="tabs">
                        <div class="hidden">{{ $i = 0 }}</div>
                        @foreach($cat1[1] as $cat2)
                                    <li><a href="#tab-{{ $cat2->en_name }}">{{ $cat2->name }}</a></li>
          @endforeach
                    </ul>
                    @foreach($cat1[1] as $cat2)
                    <div id="tab-{{ $cat2->en_name }}" class="tab_content">
                        @foreach($cat2->products as $product)
                        <div class="owl-carousel latest_category_tabs">
                            <div class="product-thumb">
                                <div class="image"><a href="product.html"><img src="/site/image/product/samsung_tab_1-220x330.jpg" alt="تبلت ایسر" title="تبلت ایسر" class="img-responsive" /></a></div>
                                <div class="caption">
                                    <h4><a href="product.html">{{ $product->name }}</a></h4>
                                    <p class="price"> <span class="price-new">{{ $product->price }}</span> <span class="price-old">240000 تومان</span> <span class="saving">-5%</span> </p>
                                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                </div>
                                <div class="button-group">
                                    <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                                    <div class="add-to-links">
                                        <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                        <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                            @endforeach
                    </div>
                        @endforeach
                </div>
            </div>
            <!-- دسته ها محصولات Slider End-->

            <!-- دسته ها محصولات Slider Start -->
            <h3 class="subtitle">البسه - <a class="viewall" href="category.html">نمایش همه</a></h3>
            <div class="owl-carousel latest_category_carousel">
                <div class="product-thumb">
                    <div class="image"><a href="product.html"><img src="/site/image/product/iphone_6-220x330.jpg" alt="کرم مو آقایان" title="کرم مو آقایان" class="img-responsive" /></a></div>
                    <div class="caption">
                        <h4><a href="product.html">نام گل</a></h4>
                        <p class="price"> 42300 تومان </p>
                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                    </div>
                    <div class="button-group">
                        <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                        <div class="add-to-links">
                            <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                            <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                        </div>
                    </div>
                </div>
                <div class="product-thumb">
                    <div class="image"><a href="product.html"><img src="/site/image/product/nikon_d300_5-220x330.jpg" alt="محصولات مراقبت از مو" title="محصولات مراقبت از مو" class="img-responsive" /></a></div>
                    <div class="caption">
                        <h4><a href="product.html">نام گل</a></h4>
                        <p class="price"> <span class="price-new">66000 تومان</span> <span class="price-old">90000 تومان</span> <span class="saving">-27%</span> </p>
                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                    </div>
                    <div class="button-group">
                        <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                        <div class="add-to-links">
                            <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                            <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                        </div>
                    </div>
                </div>
                <div class="product-thumb">
                    <div class="image"><a href="product.html"><img src="/site/image/product/nikon_d300_4-220x330.jpg" alt="کرم لخت کننده مو" title="کرم لخت کننده مو" class="img-responsive" /></a></div>
                    <div class="caption">
                        <h4><a href="product.html">نام گل</a></h4>
                        <p class="price"> 88000 تومان </p>
                    </div>
                    <div class="button-group">
                        <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                        <div class="add-to-links">
                            <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                            <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                        </div>
                    </div>
                </div>
                <div class="product-thumb">
                    <div class="image"><a href=""><img src="/site/image/product/macbook_5-220x330.jpg" alt="ژل حمام بانوان" title="ژل حمام بانوان" class="img-responsive" /></a></div>
                    <div class="caption">
                        <h4><a href="product.html">نام گل</a></h4>
                        <p class="price"> <span class="price-new">19500 تومان</span> <span class="price-old">21900 تومان</span> <span class="saving">-4%</span> </p>
                    </div>
                    <div class="button-group">
                        <button class="btn-primary" type="button" onClick="cart.add('61');"><span>افزودن به سبد</span></button>
                        <div class="add-to-links">
                            <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick="wishlist.add('61');"><i class="fa fa-heart"></i></button>
                            <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick="compare.add('61');"><i class="fa fa-exchange"></i></button>
                        </div>
                    </div>
                </div>
                <div class="product-thumb">
                    <div class="image"><a href="product.html"><img src="/site/image/product/macbook_4-220x330.jpg" alt="عطر گوچی" title="عطر گوچی" class="img-responsive" /></a></div>
                    <div class="caption">
                        <h4><a href="product.html">نام گل</a></h4>
                        <p class="price"> 85000 تومان </p>
                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                    </div>
                    <div class="button-group">
                        <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                        <div class="add-to-links">
                            <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                            <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                        </div>
                    </div>
                </div>
                <div class="product-thumb">
                    <div class="image"><a href="product.html"><img src="/site/image/product/macbook_3-220x330.jpg" alt="رژ لب گارنیر" title="رژ لب گارنیر" class="img-responsive" /></a></div>
                    <div class="caption">
                        <h4><a href="product.html">نام گل</a></h4>
                        <p class="price"> 123000 تومان </p>
                    </div>
                    <div class="button-group">
                        <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                        <div class="add-to-links">
                            <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                            <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                        </div>
                    </div>
                </div>
                <div class="product-thumb">
                    <div class="image"><a href="product.html"><img src="/site/image/product/macbook_2-220x330.jpg" alt="عطر نینا ریچی" title="عطر نینا ریچی" class="img-responsive" /></a></div>
                    <div class="caption">
                        <h4><a href="product.html">نام گل</a></h4>
                        <p class="price"> 110000 تومان </p>
                    </div>
                    <div class="button-group">
                        <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                        <div class="add-to-links">
                            <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                            <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- دسته ها محصولات Slider End -->

            <!-- برند Logo Carousel Start-->
            <div id="carousel" class="owl-carousel nxt">
                <div class="item text-center"> <a href="#"><img src="/site/image/product/apple_logo-100x100.jpg" alt="پالم" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="/site/image/product/canon_logo-100x100.jpg" alt="سونی" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="/site/image/product/apple_logo-100x100.jpg" alt="کنون" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="/site/image/product/canon_logo-100x100.jpg" alt="اپل" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="/site/image/product/apple_logo-100x100.jpg" alt="اچ تی سی" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="/site/image/product/canon_logo-100x100.jpg" alt="اچ پی" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="/site/image/product/apple_logo-100x100.jpg" alt="brand" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="/site/image/product/canon_logo-100x100.jpg" alt="brand1" class="img-responsive" /></a> </div>
            </div>
            <!-- برند Logo Carousel End -->
        </div>
        <!--Middle Part End-->
    </div>
@stop