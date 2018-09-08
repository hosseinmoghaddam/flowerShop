@extends('site-en.layout.container')

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
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><a href="#"><img src="/site/image/banner/sample-banner-3-300x300.jpg" alt="Sample Banner 2" title="Sample Banner 2" /></a></div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><a href="#"><img src="/site/image/banner/sample-banner-1-300x300.jpg" alt="Sample Banner" title="Sample Banner" /></a></div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><a href="#"><img src="/site/image/banner/sample-banner-2-300x300.jpg" alt="Sample Banner 3" title="Sample Banner 3" /></a></div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><a href="#"><img src="/site/image/banner/sample-banner-4-300x300.jpg" alt="Sample Banner 4" title="Sample Banner 4" /></a></div>
                </div>
            </div>
            <!-- Banner End-->
            <!-- Product Tab Start -->
            <div id="product-tab" class="product-tab">
                <ul id="tabs" class="tabs">
                    <li><a href="#tab-{{ $tt->en_name }}">{{ $tt->name }}</a></li>
                </ul>
                <div id="tab-{{ $tt->en_name }}" class="tab_content">
                    <div class="owl-carousel product_carousel_tab">
                        @foreach($tt->products as $product)
                            <div class="product-thumb clearfix">
                                <div class="image"><a href="{{ route('en.detail', $product->id) }}"><img src="{{ $product->image1 }}" alt="{{ $product->name }}" title="{{ $product->name }}" class="img-responsive" /></a></div>
                                <div class="caption">
                                    <h4><a href="{{ route('en.detail', $product->id) }}">{{ $product->name }}</a></h4>
                                    <p class="price"><span class="price-new">{{ $product->price }}  Toman</span> <span class="price-old">122000 Toman</span><span class="saving">-10%</span></p>
                                </div>
                                <div class="button-group">
                                    <button class="btn-primary" type="button" onClick="addToCare('{{route('en.add',$product->id)}}','{{csrf_token()}}')"><span>Add to Cart</span></button>
                                    <div class="add-to-links">
                                        <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                        <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>    <!-- Product Tab Start -->
            <!-- Banner Start -->
            <div class="marketshop-banner">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><a href="#"><img src="/site/image/banner/sample-banner-4-600x250.jpg" alt="2 Block Banner" title="2 Block Banner" /></a></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><a href="#"><img src="/site/image/banner/sample-banner-5-600x250.jpg" alt="2 Block Banner 1" title="2 Block Banner 1" /></a></div>
                </div>
            </div>
            <!-- Banner End -->
            <!-- Categories Product Slider Start-->
            <div class="category-module" id="latest_category">
                <h3 class="subtitle">{{ $tag2->name }} <a class="viewall" href="{{ route('en.tag', $tag2->id) }}">نمایش همه</a></h3>
                <div class="category-module-content">
                    <ul id="sub-cat" class="tabs">

                        <li><a href="#tab-{{ $tag2->en_name }}">{{ $tag2->name }}</a></li>
                    </ul>

                    <div id="tab-{{ $tag2->en_name }}" class="tab_content">
                        <div class="owl-carousel latest_category_tabs">
                            @foreach($tag2->products as $product)
                                <div class="product-thumb">
                                    <div class="image"><a href="{{ route('en.detail', $product->id) }}"><img src="{{ $product->image1 }}" alt="{{ $product->name }}" title="{{ $product->name }}" class="img-responsive" /></a></div>
                                    <div class="caption">
                                        <h4><a href="{{ route('en.detail', $product->id) }}">{{ $product->name }}</a></h4>
                                        <p class="price"> <span class="price-new">{{ $product->price }}</span> <span class="price-old">240000 Toman</span> <span class="saving">-5%</span> </p>
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick="addToCare('{{route('en.add',$product->id)}}','{{csrf_token()}}')"><span>Add to Cart</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                            <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
            <!-- Categories Product Slider End-->

            <!-- Categories Product Slider Start -->
            <h3 class="subtitle">{{ $tag3->name }} - <a class="viewall" href="{{ route('en.tag', $tag3->id) }}">view all</a></h3>
            <div class="owl-carousel latest_category_carousel">
                @foreach($tag3->products as $product)
                    <div class="product-thumb">
                        <div class="image"><a href="{{ route('en.detail', $product->id) }}"><img src="{{ $product->image1 }}" alt="{{ $product->name }}" title="{{ $product->name }}" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="{{ route('en.detail', $product->id) }}">{{ $product->name }}</a></h4>
                            <p class="price">{{ $product->price }}</p>
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                        </div>
                        <div class="button-group">
                            <button class="btn-primary" type="button" onClick="addToCare('{{route('en.add',$product->id)}}','{{csrf_token()}}')"><span>Add to Cart</span></button>
                            <div class="add-to-links">
                                <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                                <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Categories Product Slider End -->

            <!-- Brand Logo Carousel Start-->
            <div id="carousel" class="owl-carousel nxt">
                <div class="item text-center"> <a href="#"><img src="/site/image/product/apple_logo-100x100.jpg" alt="Palm" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="/site/image/product/canon_logo-100x100.jpg" alt="Sony" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="/site/image/product/apple_logo-100x100.jpg" alt="Canon" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="/site/image/product/canon_logo-100x100.jpg" alt="Apple" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="/site/image/product/apple_logo-100x100.jpg" alt="HTC" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="/site/image/product/canon_logo-100x100.jpg" alt="Hewlett-Packard" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="/site/image/product/apple_logo-100x100.jpg" alt="brand" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="/site/image/product/canon_logo-100x100.jpg" alt="brand1" class="img-responsive" /></a> </div>
            </div>
            <!-- Brand Logo Carousel End -->
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
                    alert('added');
                    $('#cart-total').html( data.count +"- Item "+ data.care  +" Toman " );

                },
                error: function (request, msg, error) {
                    console.log(request, msg, error);

                }
            });
        }

    </script>

@endsection