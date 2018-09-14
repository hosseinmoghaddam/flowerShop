
<!DOCTYPE html>
<html>
@inject('ps','App\Product')
<head>
    <meta charset="UTF-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="/site/image/favicon.png" rel="icon" />
    <title>Flower Shop</title>
    <meta name="description" content="Responsive and clean html template design for any kind of ecommerce webshop">
    <!-- CSS Part Start-->
    <link rel="stylesheet" type="text/css" href="/site/js/bootstrap/css/bootstrap.min.css" />

    <link rel="stylesheet" type="text/css" href="/site/css/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="/site/css/stylesheet.css" />
    <link rel="stylesheet" type="text/css" href="/site/css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="/site/css/owl.transitions.css" />
    <link rel="stylesheet" type="text/css" href="/site/css/responsive.css" />

    <link rel="stylesheet" type="text/css" href="/site/css/stylesheet-skin2.css" />
    <link rel='stylesheet' href='//fonts.googleapis.com/css?family=Droid+Sans' type='text/css'>
    @yield("page-specific-plugin-styles")
    @yield("inline-style")


    <!-- CSS Part End-->
</head>
<body>
<div class="wrapper-wide">
    <div id="header">
        <!-- Top Bar Start-->
        <nav id="top" class="htop">
            <div class="container">
                <div class="row"> <span class="drop-icon visible-sm visible-xs"><i class="fa fa-align-justify"></i></span>
                    <div class="pull-left flip left-top">
                        <div id="language" class="btn-group">
                            <button class="btn-link dropdown-toggle" data-toggle="dropdown"> <span> <img src="/site/image/flags/us.png" alt="English" title="English">English <i class="fa fa-caret-down"></i></span></button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="btn btn-link btn-block language-select" href="{{ route('en.index') }}" name="GB"><img src="/site/image/flags/us.png" alt="English" title="English" /> English</a>
                                </li>
                                <li>
                                    <a class="btn btn-link btn-block language-select" href="{{ route('index') }}" name="GB"><img src="/site/image/flags/ir.png" alt="فارسی" title="فارسی" /> فارسی</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="top-links" class="nav pull-right flip">
                        <ul>
                            <li><a href="{{ route('login') }}">Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Top Bar End-->
        <!-- Header Start-->
        <header class="header-row">
            <div class="container">
                <div class="table-container">
                    <!-- Logo Start -->
                    <div class="col-table-cell col-lg-6 col-md-6 col-sm-12 col-xs-12 inner">
                        <div id="logo"><a href="{{ route('en.index') }}"><img class="img-responsive" src="/site/image/logo-en.png" title="MarketShop" alt="MarketShop" /></a></div>
                    </div>
                    <!-- Logo End -->
                    <!-- Mini Cart Start-->
                    <div class="col-table-cell col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div id="cart">
                            <button type="button" data-toggle="dropdown" data-loading-text="Loading..." class="heading dropdown-toggle">
                                <span class="cart-icon pull-left flip"></span>
                                <span id="cart-total">{{ count(\Session::get('products'))}} Item - {{ $ps->sum() }} Toman</span></button>
                            <ul class="dropdown-menu">
                                <li>
                                    <table class="table">
                                        <tbody>
                                        @if(\Session::get('products'))
                                            @foreach(\Session::get('products') as $p)
                                                <tr>
                                                    <td class="text-center"><a href="{{ route('detail', $p->id) }}"><img class="img-thumbnail" style="max-width: 50%" title="{{ $p->name }}" alt="{{ $p->name }}" src="{{ $p->image1 }}"></a></td>
                                                    <td class="text-left"><a href="{{ route('detail', $p->id) }}">{{ $p->name }}</a></td>
                                                    <td class="text-right">{{ $p->price }} Toman</td>
                                                    <td class="text-center"><button class="btn btn-danger btn-xs remove" title="delete" onClick="" type="button"><i class="fa fa-times"></i></button></td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </li>
                                <li>
                                    <div>
                                        <table class="table table-bordered">
                                            <tbody>
                                            <tr>
                                                <td class="text-right"><strong>sub-Total</strong></td>
                                                <td class="text-right">{{ $ps->sum() }} Toman</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>Eco Tax </strong></td>
                                                <td class="text-right">4000 Toman</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>VAT</strong></td>
                                                <td class="text-right">{{ ($ps->sum())/9 }} Toman</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>Total</strong></td>
                                                <td class="text-right">{{ ($ps->sum())-(($ps->sum())/9)-4000 }} Toman</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <p class="checkout"><a href="{{ route('en.care') }}" class="btn btn-primary" id="btncare"
                                                               @if (count(\Session::get('products')) == 0)
                                                               disabled
                                                    @endif
                                            ><i class="fa fa-shopping-cart"></i> View Cart</a>&nbsp;&nbsp;&nbsp;<a href="{{route('en.checkout')}}" class="btn btn-primary" id="btnsee"
                                                                                                                   @if (count(\Session::get('products')) == 0)
                                                                                                                   disabled
                                                    @endif><i class="fa fa-share"
                                                                   ></i> Checkout</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Mini Cart End-->
                    <!-- Search Start-->
                    <div class="col-table-cell col-lg-3 col-md-3 col-sm-6 col-xs-12 inner">
                        <form class="navbar-form" method="post" action="{{ route('en.search') }}" role="search">
                            @csrf
                        <div id="search" class="input-group">
                            <input id="filter_name" type="text" name="search" value="" placeholder="Search" class="form-control input-lg" />
                            <button type="button" class="button-search"><i class="fa fa-search"></i></button>
                        </div>
                        </form>
                    </div>
                    <!-- Search End-->
                </div>
            </div>
        </header>
        <!-- Header End-->
        <!-- Main Menu Start-->


    @include('site-en.layout.navbar')

        <!-- Main آقایانu End-->
    </div>