@extends('dashboard.layout.container')

@section('title')
    افزودن تصویر
    @endsection

@section('b-bs')
    <li class="active">افزودن تصویر</li>
    <li><a href="#">مدیریت گلها</a></li>
    @endsection

@section('page-specific-plugin-styles')
    <link rel="stylesheet" href="/css/style2.css"/>
    <link rel="stylesheet" href="/css/image-pruduct-upload.css"/>
    <link rel="stylesheet" href="/js/lib/magnific-popup/magnific-popup.css"/>
@endsection

@section('content')
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title"></strong>
                </div>
                <div class="card-body">

    <div class="col-12">

            <div class="card-block">

                <div style="direction: ltr" class="row">
                    <div class="col-md-6">

                        <div class="profile center-block">
                            <div class="photo">
                                <input type="file" accept="image/*" name="profile" id="profile">
                                <div class="photo__helper">
                                    <div class="photo__frame photo__frame--circle">
                                        <canvas class="photo__canvas"></canvas>
                                        <div class="message is-empty">
                                            <p class="message--desktop">تصویر خود را بندازید یا انتخاب کنید.</p>
                                            <p class="message--mobile">برای انتخاب تصویرتان اینجا را تب کنید.</p>
                                        </div>
                                        <div class="message is-loading">
                                            <i class="fa fa-2x fa-spin fa-spinner"></i>
                                        </div>
                                        <div class="message is-dragover">
                                            <i class="fa fa-2x fa-cloud-upload"></i>
                                            <p>تصویر خود را بندازید.</p>
                                        </div>
                                        <div class="message is-wrong-file-type">
                                            <p>فقط تصویر مجاز است.</p>
                                            <p class="message--desktop">تصویر خود را بندازید یا انتخاب کنید.</p>
                                            <p class="message--mobile">برای انتخاب تصویرتان اینجا را نب کنید.</p>
                                        </div>
                                        <div class="message is-wrong-image-size">
                                            <p>تصویر شما باید بزرگتر از 350px باشد.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="photo__options hide">
                                    <div class="photo__zoom">
                                        <input type="range" class="zoom-handler">
                                    </div><a href="javascript:;" class="remove"><i class="fa fa-trash"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <a href="@if ($product->image1)
                                {{ $product->image1 }}?{{  time()}}
                                @else
                                        /site/image/product/apple_cinema_30-220x330.jpg
@endif" class="gallery-popup" title="تصویر 1">
                                    <div class="project-item">
                                        <div class="overlay-container">
                                            <img src="@if ($product->image1)
                                            {{ $product->image1 }}?{{  time()}}
                                                @else
                                                    /site/image/product/apple_cinema_30-220x330.jpg
                                            @endif" alt="img" class="gallery-thumb-img" />

                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <a href="@if ($product->image2)
                                {{ $product->image2 }}?{{  time()}}
                                @else
                                        /site/image/product/apple_cinema_30-220x330.jpg
@endif" class="gallery-popup" title="تصویر 2">
                                    <div class="project-item">
                                        <div class="overlay-container">
                                            <img src="@if ($product->image2)
                                            {{ $product->image2 }}?{{  time()}}
                                            @else
                                                    /site/image/product/apple_cinema_30-220x330.jpg
@endif" alt="img" class="gallery-thumb-img" />

                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <a href="@if ($product->image3)
                                {{ $product->image3 }}?{{  time()}}
                                @else
                                        /site/image/product/apple_cinema_30-220x330.jpg
@endif" class="gallery-popup" title="تصویر 3">
                                    <div class="project-item">
                                        <div class="overlay-container">
                                            <img src="@if ($product->image3)
                                            {{ $product->image3 }}?{{  time()}}
                                            @else
                                                    /site/image/product/apple_cinema_30-220x330.jpg
@endif" alt="img" class="gallery-thumb-img" />

                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <a href="@if ($product->image4)
                                {{ $product->image4 }}?{{  time()}}
                                @else
                                        /site/image/product/apple_cinema_30-220x330.jpg
@endif" class="gallery-popup" title="تصویر 4">
                                    <div class="project-item">
                                        <div class="overlay-container">
                                            <img src="@if ($product->image4)
                                            {{ $product->image4 }}?{{  time()}}
                                            @else
                                                    /site/image/product/apple_cinema_30-220x330.jpg
@endif" alt="img" class="gallery-thumb-img" />

                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <button type="button" id="Btn1" class="btn btn-primary btn-block"><i class="fa fa-upload"></i></button>
                            </div>
                            <div class="col-md-3">
                                <button type="button" id="Btn2" class="btn btn-success btn-block"><i class="fa fa-upload"></i></button>
                            </div>
                            <div class="col-md-3">
                                <button type="button" id="Btn3" class="btn btn-warning btn-block"><i class="fa fa-upload"></i></button>
                            </div>
                            <div class="col-md-3">
                                <button type="button" id="Btn4" class="btn btn-danger btn-block"><i class="fa fa-upload"></i></button>
                           </div>

                        </div>


                    </div>
                </div>


            </div>

    </div> <!-- end row -->

                </div>
            </div>
        </div>


    </div>


@endsection

@section('page-specific-plugin-scripts')

    <script src="/js/jquery.min.js"></script>

    <script src="/js/image-pruduct-upload.js"></script>
    <script src="/js/lib/magnific-popup/jquery.magnific-popup.min.js"></script>

    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>--}}

@endsection

@section('inline-scripts')

    <script type="text/javascript">
        $('.gallery-popup').magnificPopup({
            type: 'image',
            closeOnContentClick: true,
            mainClass: 'mfp-fade',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0,1] // Will preload 0 - before current, and 1 after the current image
            }
        });
    </script>

@endsection