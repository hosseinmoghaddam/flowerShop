@extends('site.layout.container')

@section('page-specific-plugin-styles')
    <link rel="stylesheet" type="text/css" href="/site/js/swipebox/src/css/swipebox.min.css">
@endsection

@section('inline-style')

@endsection

@section('content')
    <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-9">
            <div itemscope itemtype="http://schema.org/محصولات">
                <h1 class="title" itemprop="name">{{ $product->name  }}</h1>
                <div class="row product-info">
                    <div class="col-sm-6">
                        <div class="image"><img class="img-responsive" style="max-width: 300%; width: 350px; height: 500px" itemprop="image" id="zoom_01"
                                                src="{{ $product->image1 }}" title="{{ $product->name  }}"
                                                alt="{{ $product->name  }}" data-zoom-image="{{ $product->image1 }}"/>
                        </div>
                        <div class="center-block text-center"><span class="zoom-gallery"><i class="fa fa-search"></i> برای مشاهده گالری روی تصویر کلیک کنید</span>
                        </div>
                        <div class="image-additional" id="gallery_01">
                            <a class="thumbnail" href="#"
                               data-zoom-image="{{ $product->image1 }}"
                               data-image="{{ $product->image1 }}"
                               title="{{ $product->name  }}">
                                <img
                                        src="{{ $product->image1 }}" title="{{ $product->name  }}"
                                        alt="{{ $product->name  }}"/></a>
                            <a class="thumbnail" href="#" data-zoom-image="{{ $product->image2 }}"
                               data-image="{{ $product->image2 }}" title="{{ $product->name  }}">
                                <img
                                        src="{{ $product->image2 }}" title="{{ $product->name  }}"
                                        alt="{{ $product->name  }}"/></a>
                            <a class="thumbnail" href="#" data-zoom-image="{{ $product->image3 }}"
                               data-image="{{ $product->image3 }}" title="{{ $product->name  }}">
                                <img
                                        src="{{ $product->image3 }}" title="{{ $product->name  }}"
                                        alt="{{ $product->name  }}"/></a>
                            <a class="thumbnail" href="#" data-zoom-image="{{ $product->image4 }}"
                               data-image="{{ $product->image4 }}" title="{{ $product->name  }}">
                                <img
                                        src="{{ $product->image4 }}" title="{{ $product->name  }}"
                                        alt="{{ $product->name  }}"/></a>
                        </div>



                    </div>
                    <div class="col-sm-6">
                        <ul class="list-unstyled description">
                            <li><b>دسته :</b>
                                <p>    @foreach($product->tags as $tag)
                                        <span class="instock">  {{ $tag->name }}</span> -
                                    @endforeach </p>
                            </li>
                            <li><b>کد محصول :</b> <span itemprop="mpn">{{ $product->id }}</span></li>
                            <li><b>امتیازات خرید:</b> {{ $product->rate }}</li>
                            <li><b>تعداد:</b> <span class="instock">{{ $product->count }}</span></li>
                        </ul>
                        <ul class="price-box">
                            <li class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span
                                        class="price-old">{{  ($product->price)+10   }} تومان</span> <span
                                        itemprop="price">{{ $product->price }} تومان<span itemprop="availability"
                                                                                          content="موجود"></span></span>
                            </li>
                            <li></li>
                            <li>بدون مالیات : {{  ($product->price)-3   }} تومان تومان</li>
                        </ul>
                        <div id="product">
                            <h3 class="subtitle">انتخاب های در دسترس</h3>

                            <div class="cart">
                                <div>
                                    <div class="qty">
                                        <label class="control-label" for="input-quantity">تعداد</label>
                                        <input type="text" name="quantity" value="1" size="2" id="input-quantity"
                                               class="form-control"/>
                                        <a class="qtyBtn plus" href="javascript:void(0);">+</a><br/>
                                        <a class="qtyBtn mines" href="javascript:void(0);">-</a>
                                        <div class="clear"></div>
                                    </div>
                                    <button type="button" id="button-cart" class="btn btn-primary btn-lg">افزودن به
                                        سبد
                                    </button>
                                </div>
                                <div>
                                    <button type="button" class="wishlist" onClick=""><i class="fa fa-heart"></i> افزودن
                                        به علاقه مندی ها
                                    </button>
                                    <br/>
                                    <button type="button" class="wishlist" onClick=""><i class="fa fa-exchange"></i>
                                        مقایسه این محصول
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab-description" data-toggle="tab">توضیحات</a></li>
                    <li><a href="#tab-specification" data-toggle="tab">مشخصات</a></li>
                </ul>
                <div class="tab-content">
                    <div itemprop="description" id="tab-description" class="tab-pane active">
                        <div>
                            <p>{{ $product->description }}</p>
                        </div>
                    </div>
                    <div id="tab-specification" class="tab-pane">
                        <div id="tab-specification" class="tab-pane">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <td colspan="2"><strong>تعداد</strong></td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>{{ $product->count }} عدد</td>
                                </tr>
                                </tbody>
                            </table>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <td colspan="2"><strong>کد محصول</strong></td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>{{ $product->id }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <h3 class="subtitle">محصولات مرتبط</h3>
                <div class="owl-carousel related_pro">
                    @foreach($products as $product)
                        <div class="product-thumb">
                            <div class="image"><a href="product.html"><img src="{{ $product->image1 }}"
                                                                           alt="تبلت ایسر" title="تبلت ایسر"
                                                                           class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4><a href="product.html">{{ $product->name }}</a></h4>
                                <p class="price"><span class="price-new">{{ $product->price }} تومان</span> <span
                                            class="price-old">240000 تومان</span>
                                    <span class="saving">-5%</span></p>
                                <div class="rating"><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span> <span
                                            class="fa fa-stack"><i
                                                class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span> <span
                                            class="fa fa-stack"><i
                                                class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span></div>
                            </div>
                            <div class="button-group">
                                <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                                <div class="add-to-links">
                                    <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick="">
                                        <i
                                                class="fa fa-heart"></i></button>
                                    <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i
                                                class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!--Middle Part End -->
        <!--Right Part Start -->
        <aside id="column-right" class="col-sm-3 hidden-xs">
            <h3 class="subtitle">پرفروش ها</h3>
            <div class="side-item">
                @foreach($products as $product)
                    <div class="product-thumb clearfix">
                        <div class="image"><a href="product.html"><img src="{{ $product->image2 }}"
                                                                       alt="{{ $product->name }}"
                                                                       title="{{ $product->name }}"
                                                                       class="img-responsive"/></a></div>
                        <div class="caption">
                            <h4><a href="{{ route('detail', $product->id) }}">تی شرت کتان مردانه</a></h4>
                            <p class="price"><span class="price-new">{{ $product->name }} تومان</span> <span
                                        class="price-old">122000 تومان</span>
                                <span class="saving">-10%</span></p>
                        </div>
                    </div>
                @endforeach
            </div>
        </aside>
        <!--Right Part End -->
    </div>
@stop

@section('page-specific-plugin-scripts')

    <script type="text/javascript" src="/site/js/jquery.elevateZoom-3.0.8.min.js"></script>
    <script type="text/javascript" src="/site/js/swipebox/lib/ios-orientationchange-fix.js"></script>
    <script type="text/javascript" src="/site/js/swipebox/src/js/jquery.swipebox.min.js"></script>


@endsection

@section('inline-scripts')
    <script type="text/javascript">
        // Elevate Zoom for Product Page image
        $("#zoom_01").elevateZoom({
            gallery: 'gallery_01',
            cursor: 'pointer',
            galleryActiveClass: 'active',
            imageCrossfade: true,
            zoomWindowWidth: 100,
            zoomWindowHeight: 100,
            zoomWindowPosition: 11,
            loadingIcon: '/site/image/progress.gif'
        });
        //////pass the images to swipebox
        $("#zoom_01").bind("click", function (e) {
            var ez = $('#zoom_01').data('elevateZoom');
            $.swipebox(ez.getGalleryList());
            return false;
        });
    </script>

@endsection
