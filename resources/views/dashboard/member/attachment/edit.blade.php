@extends('dashboard.layout.container')

@section('title')
    ویرایش اطلاعات
@endsection

@section('b-bs')
    <li class="active">ناحیه کاربری</li>
    <li><a href="#">ویرایش اطلاعات</a></li>
@endsection

@section('page-specific-plugin-styles')
    <link rel="stylesheet" href="/css/lib/datatable/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="/js/lib/sweet-alert2/sweetalert2.min.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    {{--<link rel="stylesheet" href="/scss/style.css">--}}

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

                                <form class="form-horizontal" method="POST" action="{{ route('attachment.update') }}">
                                    @csrf
                                    @method('Patch')

                                    <div class="form-group">
                                        <label for="first_name" class="col-md-12 control-label">نام</label>

                                        <div class="col-md-12">
                                            <input id="first_name" class="form-control" name="first_name"
                                                   value="{{ old('first_name', auth()->user()->attachment->first_name) }}" required autofocus>
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
                                                   value="{{ old('last_name', auth()->user()->attachment->last_name) }}" required autofocus>
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
                                                   value="{{ old('phone_number', auth()->user()->attachment->phone_number) }}" required autofocus>
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
                                                   value="{{ old('address', auth()->user()->attachment->address) }}" required autofocus>
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
                                                   value="{{ old('postal_code', auth()->user()->attachment->postal_code) }}" required autofocus>
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


    </div>



@endsection

@section('page-specific-plugin-scripts')
    <script src="/js/lib/data-table/datatables.min.js"></script>
    <script src="/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="/js/lib/data-table/jszip.min.js"></script>
    <script src="/js/lib/data-table/pdfmake.min.js"></script>
    <script src="/js/lib/data-table/vfs_fonts.js"></script>
    <script src="/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="/js/lib/data-table/buttons.print.min.js"></script>
    <script src="/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="/js/lib/data-table/datatables-init.js"></script>

    <script src="/js/lib/sweet-alert2/sweetalert2.min.js"></script>

@endsection

@section('inline-scripts')



@endsection