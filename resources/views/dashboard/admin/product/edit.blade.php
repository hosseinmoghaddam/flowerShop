@extends('dashboard.layout.container')

@section('title')
ویرایش گل  {{$product->name}}
    @endsection

@section('b-bs')
    <li class="active">افزودن گل جدید</li>
    <li><a href="#">مدیریت گلها</a></li>
    @endsection

@section('page-specific-plugin-styles')
    <link href="/js/lib/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="/css/all.css" rel="stylesheet" type="text/css" />
    {{--<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />--}}


@stop

@section('content')
    <div class="row">

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Data Table</strong>
                </div>
                <div class="card-body">

    <div class="col-12">

            <div class="card-block">

                <form class="form-horizontal" method="POST" action="{{ route('product.update', $product->id) }}">
                    @csrf
                    @method('PATCH')

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-12 control-label">نام</label>

                        <div class="col-md-12">
                            <input id="name" class="form-control" name="name"
                                   value="{{ old('name',$product->name) }}" required autofocus>
                            @if ($errors->has('name'))
                                <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                            @endif
                        </div>
                    </div>


                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                        <label for="description" class="col-md-12 control-label">توضیحات </label>

                        <div class="col-md-12">
                            <input id="description" class="form-control" name="description"
                                   value="{{ old('description',$product->description) }}" required>
                            @if ($errors->has('description'))
                                <span class="help-block">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                            @endif
                        </div>
                    </div>


                    <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                        <label for="price" class="col-md-12 control-label">قیمت (تومان)</label>

                        <div class="col-md-12">
                            <input id="price" type="number" class="form-control" name="price"
                                   value="{{ old('price', $product->price) }}" required>

                            @if ($errors->has('price'))
                                <span class="help-block">
                        <strong>{{ $errors->first('price') }}</strong>
                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('count') ? ' has-error' : '' }}">
                        <label for="count" class="col-md-12 control-label">تعداد</label>

                        <div class="col-md-12">
                            <input id="count" type="number" class="form-control" name="count"
                                   value="{{ old('count', $product->count) }}" required>

                            @if ($errors->has('count'))
                                <span class="help-block">
                        <strong>{{ $errors->first('count') }}</strong>
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