@extends('dashboard.layout.container')

@section('title')
تکمیل اطلاعات
    @endsection

@section('b-bs')
    <li class="active">تکمیل اطلاعات</li>
    <li><a href="#">مدیریت گلها</a></li>
    @endsection

@section('page-specific-plugin-styles')
    <link href="/css/all.css" rel="stylesheet" type="text/css" />
    {{--<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />--}}


@stop

@section('content')
    <div class="row">

        @if (auth()->user()->attachment)

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-info">
                        <strong class="card-title">اطلاعات ثبت شده</strong>
                        <a href="{{ route('attachment.edit') }}" data-toggle="tooltip" class="btn btn-sm btn-success" style="float: left" data-placement="top" title="" data-original-title="Read">ویرایش</a>
                    </div>
                    <div class="card-body">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">نام: {{ auth()->user()->attachment->first_name }}</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">نام خانوادگی: {{ auth()->user()->attachment->last_name }}</h6>
                                    <h6 class="card-subtitle mb-2 text-muted">ایمیل:{{ auth()->user()->email }}</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">آدرس: {{ auth()->user()->attachment->address }}</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">کد پستی: {{ auth()->user()->attachment->postal_code }}</h6>
                                    <h6 class="card-subtitle mb-2 text-muted">تلفن: {{ auth()->user()->attachment->phone_number }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            @else

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title"></strong>
                    </div>
                    <div class="card-body">

                        <div class="col-12">

                            <div class="card-block">

                                <form class="form-horizontal" method="POST" action="#">
                                    @csrf

                                    <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                        <label for="first_name" class="col-md-12 control-label">نام</label>

                                        <div class="col-md-12">
                                            <input id="first_name" class="form-control" name="first_name"
                                                   value="{{ old('first_name') }}" required autofocus>
                                            @if ($errors->has('first_name'))
                                                <span class="help-block">
                        <strong>{{ $errors->first('first_name') }}</strong>
                    </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                        <label for="last_name" class="col-md-12 control-label">نام خانوادگی</label>

                                        <div class="col-md-12">
                                            <input id="last_name" class="form-control" name="last_name"
                                                   value="{{ old('last_name') }}" required autofocus>
                                            @if ($errors->has('last_name'))
                                                <span class="help-block">
                        <strong>{{ $errors->first('last_name') }}</strong>
                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                                        <label for="phone_number" class="col-md-12 control-label">تلفن</label>

                                        <div class="col-md-12">
                                            <input id="phone_number" class="form-control" name="phone_number"
                                                   value="{{ old('phone_number') }}" required autofocus>
                                            @if ($errors->has('phone_number'))
                                                <span class="help-block">
                        <strong>{{ $errors->first('phone_number') }}</strong>
                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                        <label for="address" class="col-md-12 control-label">آدرس</label>

                                        <div class="col-md-12">
                                            <input id="address" class="form-control" name="address"
                                                   value="{{ old('address') }}" required autofocus>
                                            @if ($errors->has('address'))
                                                <span class="help-block">
                        <strong>{{ $errors->first('address') }}</strong>
                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('postal_code') ? ' has-error' : '' }}">
                                        <label for="postal_code" class="col-md-12 control-label">کدپستی</label>

                                        <div class="col-md-12">
                                            <input id="postal_code" class="form-control" name="postal_code"
                                                   value="{{ old('postal_code') }}" required autofocus>
                                            @if ($errors->has('postal_code'))
                                                <span class="help-block">
                        <strong>{{ $errors->first('postal_code') }}</strong>
                    </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="col-md-12 col-md-offset-4">
                                            <button  class="btn btn-primary btn-block">ثبت</button>
                                        </div>
                                    </div>
                                </form>

                            </div>

                        </div> <!-- end row -->

                    </div>
                </div>
            </div>

        @endif



    </div>


@endsection

@section('page-specific-plugin-scripts')


    <script src="/js/jquery.min.js"></script>
    <script src="/js/jquery.slimscroll.js"></script>
    <script src="/js/jquery.nicescroll.js"></script>
    <script src="/js/jquery.scrollTo.min.js"></script>

    <script src="/js/lib/sweet-alert2/sweetalert2.min.js"></script>


    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>--}}

@endsection

@section('inline-scripts')

@endsection