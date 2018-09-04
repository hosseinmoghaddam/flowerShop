@extends('dashboard.layout.container')

@section('title')
    افزودن دسته
@endsection


@section('b-bs')
    <li class="active">افزودن دسته</li>
    <li><a href="#">مدیریت دسته ها</a></li>
@endsection

@section('page-specific-plugin-styles')

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

                            <form class="form-horizontal" method="POST" action="{{ route('tag.store') }}">
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

                                <div class="form-group{{ $errors->has('en_name') ? ' has-error' : '' }}">
                                    <label for="en_name" class="col-md-12 control-label">نام لاتین </label>

                                    <div class="col-md-12">
                                        <input id="en_name" class="form-control" name="en_name"
                                               value="{{ old('en_name') }}" required>
                                        @if ($errors->has('en_name'))
                                            <span class="help-block">
                        <strong>{{ $errors->first('en_name') }}</strong>
                    </span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                    <label for="description" class="col-md-12 control-label">توضیحات </label>

                                    <div class="col-md-12">
                                        <input id="description" class="form-control" name="description"
                                               value="{{ old('description') }}" required>
                                        @if ($errors->has('description'))
                                            <span class="help-block">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                                        @endif
                                    </div>
                                </div>



                                <div class="form-group">
                                    <div class="col-md-12 col-md-offset-4" style="padding-top: 7px">
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
    <script src="/dashboard/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script src="/dashboard/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="/dashboard/plugins/select2/js/select2.min.js" type="text/javascript"></script>
    <script src="/dashboard/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
    <script src="/dashboard/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
    <script src="/dashboard/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>

    <!-- Plugins Init js -->
    <script src="/dashboard/pages/form-advanced.js"></script>

@endsection
