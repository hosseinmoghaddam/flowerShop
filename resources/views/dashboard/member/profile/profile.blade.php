@extends('dashboard.layout.container')

@section('title')
     ویرایش پروفایل: {{ $user->name }}
@endsection

@section('b-bs')
    <li class="active">ویرایش پروفایل </li>
    <li><a href="#">مدیریت پروفایل</a></li>
@endsection

@section('page-specific-plugin-styles')
    <link rel="stylesheet" href="/css/profile-upload.css"/>
    <link href="/js/lib/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="/css/all.css" rel="stylesheet" type="text/css" />
    {{--<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />--}}


@stop

@section('content')
    <div class="row">

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">اطلاعات کاربر</strong>
                </div>
                <div class="card-body">

                    <div class="col-12">

                        <div class="card-block">

                            <form class="form-horizontal" method="POST" action="{{ route('member.update', $user->id) }}">
                                @csrf
                                @method('PATCH')
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-12 control-label">نام</label>

                                    <div class="col-md-12">
                                        <input id="name" class="form-control" name="name"
                                               value="{{ old('name', $user->name) }}" required autofocus>
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
                                        <input id="email" disabled class="form-control" name="email"
                                               value="{{ old('email', $user->email) }}" required>
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
                                               value="{{ old('password') }}" placeholder="اگر می خواهید گذرواژه را تغییر دهید این قسمت را پر کنید" >

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
                                               name="password_confirmation" >
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

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">تصویر پروفایل</strong>
                </div>
                <div class="card-body">

                    <div class="col-12">

                        <div class="card-block">
                            <div style="direction: ltr">
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

                                <hr>
                                <button type="button" id="previewBtn" class="btn btn-primary btn-block">آپلود</button>
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
    {{--<script src="/js/jquery.slimscroll.js"></script>--}}
    {{--<script src="/js/jquery.nicescroll.js"></script>--}}
    {{--<script src="/js/jquery.scrollTo.min.js"></script>--}}

    <script src="/js/lib/sweet-alert2/sweetalert2.min.js"></script>

    <script src="/js/lib/select2/js/select2.min.js"></script>
    <script src="/js/profile-upload.js"></script>

    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>--}}

@endsection

@section('inline-scripts')


@endsection