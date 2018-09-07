@extends('dashboard.layout.main')
@section('container')
<div id="right-panel" class="right-panel">

    <!-- Header-->
    <header id="header" class="header">

        <div class="header-menu">

            <div class="col-sm-7">
                <a id="menuToggle" class="menutoggle pull-right"><i class="fa fa fa-tasks"></i></a>
                <div class="header-left">

                    <div class="dropdown for-message">
                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti-email"></i>
                            <span class="count bg-primary">{{ count(\App\Message::all()->where('read',0)) }}</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="message">
                            <p class="red">{{ count(\App\Message::all()->where('read',0)) }} پیام خوانده نشده .</p>

                            @foreach(\App\Message::all()->where('read',0) as $message)
                            <a class="dropdown-item media bg-flat-color-1" href="{{ route('message.read', $message->id) }}">
                                <span class="message media-body">
                                    <span class="name float-left">{{$message->name}}</span>
                                    <span class="time float-right">{{$message->created_at}}</span>
                                        <p>{{$message->message}}</p>
                                </span>
                            </a>
                                @endforeach

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-5">
                <div class="user-area dropdown float-left">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="user-avatar rounded-circle" src="/images/admin.jpg" alt="User Avatar">
                    </a>

                    <div class="user-menu dropdown-menu">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        خروج
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>

                <div class="language-select dropdown" id="language-select">
                   <p>{{ auth()->user()->name }}</p>
                </div>

            </div>
        </div>

    </header><!-- /header -->
    <!-- Header-->

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-right">
                <div class="page-title">
                    <h1>@yield('title')</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-left">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
@yield('b-bs')
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div id="con-message"></div>

            @if(session()->has('message'))
                <div class="alert alert-info" id="message2">
                    <button type="button" class="close" data-dismiss="alert">
                        <i class="ace-icon fa fa-times"></i>
                    </button>
                    {{ session('message') }}
                    <br>
                </div>

            @endif
        @yield('content')
        </div><!-- .animated -->
    </div><!-- .content -->


</div><!-- /#right-panel -->

<!-- Right Panel -->

    @endsection