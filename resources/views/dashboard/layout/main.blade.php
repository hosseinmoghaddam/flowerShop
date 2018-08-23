
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="{{ str_replace('_', '-', app()->getLocale()) }}"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="{{ str_replace('_', '-', app()->getLocale()) }}"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="{{ str_replace('_', '-', app()->getLocale()) }}"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link rel="apple-touch-icon" href="/apple-icon.png">
    <link rel="shortcut icon" href="/favicon.ico">



    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/themify-icons.css">
    <link rel="stylesheet" href="/css/flag-icon.min.css">
    <link rel="stylesheet" href="/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    @yield("page-specific-plugin-styles")
    <link rel="stylesheet" href="/scss/style.css">

    <link rel="stylesheet" href="/css/rtl.css">


    @yield("inline-style")

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>

@include('dashboard.layout.sidebar')
@yield('container')


@yield("page-specific-plugin-scripts")

<script src="/js/vendor/jquery-2.1.4.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/plugins.js"></script>
<script src="/js/main.js"></script>



@yield("inline-scripts")

</body>
</html>
