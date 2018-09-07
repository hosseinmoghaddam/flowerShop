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
                    @foreach($cat1[0] as $cat)
                            <li><a href="#tab-{{ $cat->en_name }}">{{ $cat->name }}</a></li>
                    @endforeach
                </ul>
                @foreach($cat1[0] as $cat)
                <div id="tab-{{ $cat->en_name }}" class="tab_content">
                    <div class="owl-carousel product_carousel_tab">
                        @foreach($cat->products as $product)
                        <div class="product-thumb clearfix">
                            <div class="image"><a href="{{ route('detail', $product->id) }}"><img src="{{ $product->image1 }}" alt="{{ $product->name }}" title="{{ $product->name }}" class="img-responsive" /></a></div>
                            <div class="caption">
                                <h4><a href="{{ route('detail', $product->id) }}">{{ $product->name }}</a></h4>
                                <p class="price"><span class="price-new">{{ $product->price }} تومان</span> <span class="price-old">122000 تومان</span><span class="saving">-10%</span></p>
                            </div>
                            <div class="button-group">
                                <button class="btn-primary" type="button" onClick="addToCare('{{route('add',$product->id)}}','{{csrf_token()}}')"><span>افزودن به سبد</span></button>
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
                        @foreach($cat1[0] as $cat2)
                                    <li><a href="#tab-{{ $cat2->en_name }}">{{ $cat2->name }}</a></li>
          @endforeach
                    </ul>
                    @foreach($cat1[0] as $cat2)
                    <div id="tab-{{ $cat2->en_name }}" class="tab_content">
                        @foreach($cat2->products as $product)
                        <div class="owl-carousel latest_category_tabs">
                            <div class="product-thumb">
                                <div class="image"><a href="{{ route('detail', $product->id) }}"><img src="{{ $product->image1 }}" alt="تبلت ایسر" title="تبلت ایسر" class="img-responsive" /></a></div>
                                <div class="caption">
                                    <h4><a href="{{ route('detail', $product->id) }}">{{ $product->name }}</a></h4>
                                    <p class="price"> <span class="price-new">{{ $product->price }}</span> <span class="price-old">240000 تومان</span> <span class="saving">-5%</span> </p>
                                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                </div>
                                <div class="button-group">
                                    <button class="btn-primary" type="button" onClick="addToCare('{{route('add',$product->id)}}','{{csrf_token()}}')"><span>افزودن به سبد</span></button>
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

@section('inline-scripts')

    <script>

        function addToCare(id,csrf) {
            $.ajax({
                url:id ,
                method: 'Post',
                async: true,
                cache: false,
                beforeSend: function (request) {
                    request.setRequestHeader("X-CSRF-TOKEN", csrf);

                },
                complete: function () {

                },
                success: function (data) {
                    alert('اضافه شد');
                    $('#cart-total').html( data.count +"- آیتم "+ data.care  +" تومان " );

                },
                error: function (request, msg, error) {
                    console.log(request, msg, error);

                }
            });
        }

    </script>

@endsection