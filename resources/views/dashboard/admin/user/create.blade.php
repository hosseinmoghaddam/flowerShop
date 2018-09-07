@extends('dashboard.layout.container')

@section('title')
    افزودن ادمین
@endsection

@section('b-bs')
    <li class="active">افزودن ادمین جدید</li>
    <li><a href="#">مدیریت ادمین ها</a></li>
@endsection

@section('page-specific-plugin-styles')
    <link href="/js/lib/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="/css/all.css" rel="stylesheet" type="text/css" />
    {{--<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />--}}


@stop

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

                            <form class="form-horizontal" method="POST" action="{{ route('user.store') }}">
                                @csrf

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-12 control-label">نام</label>

                                    <div class="col-md-12">
                                        <input id="name" class="form-control" name="name"
                                               value="{{ old('name') }}" required autofocus>
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-12 control-label">ایمیل </label>

                                    <div class="col-md-12">
                                        <input id="email" class="form-control" name="email"
                                               value="{{ old('email') }}" required>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-12 control-label">رمز</label>

                                    <div class="col-md-12">
                                        <input id="password" type="password" class="form-control" name="password"
                                               value="{{ old('password') }}" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password-confirm" class="col-md-12 control-label">تایید گذرواژه</label>

                                    <div class="col-md-12">
                                        <input id="password-confirm" type="password" class="form-control"
                                               name="password_confirmation" required>
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


    </div>


@endsection

@section('page-specific-plugin-scripts')


    <script src="/js/jquery.min.js"></script>
    <script src="/js/jquery.slimscroll.js"></script>
    <script src="/js/jquery.nicescroll.js"></script>
    <script src="/js/jquery.scrollTo.min.js"></script>

    <script src="/js/lib/sweet-alert2/sweetalert2.min.js"></script>

    <script src="/js/lib/select2/js/select2.min.js"></script>

    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>--}}

@endsection

@section('inline-scripts')

    <script type="text/javascript">
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>

@endsection