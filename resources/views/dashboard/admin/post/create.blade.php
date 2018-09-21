@extends('dashboard.layout.container')

@section('title')
    افزودن پست
@endsection

@section('b-bs')
    <li class="active">افزودن پست جدید</li>
    <li><a href="#">مدیریت پست ها</a></li>
@endsection

@section('page-specific-plugin-styles')
    <link href="/js/lib/select2/css/select2.min.css" rel="stylesheet" type="text/css"/>
    <link href="/css/all.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="/simplemde/dist/simplemde.min.css">
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

                            <form class="form-horizontal" enctype="multipart/form-data"  method="POST" action="{{ route('post.store') }}" >
                                @csrf

                                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                    <label for="title" class="col-md-12 control-label">عنوان</label>

                                    <div class="col-md-12">
                                        <input id="title" class="form-control" name="title"
                                               value="{{ old('title') }}" required autofocus>
                                        @if ($errors->has('title'))
                                            <span class="help-block">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('abstract') ? ' has-error' : '' }}">
                                    <label for="abstract" class="col-md-12 control-label">چکیده</label>

                                    <div class="col-md-12">
                                        <input id="abstract" class="form-control" name="abstract"
                                               value="{{ old('abstract') }}" required autofocus>
                                        @if ($errors->has('abstract'))
                                            <span class="help-block">
                        <strong>{{ $errors->first('abstract') }}</strong>
                    </span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                                    <label for="file-input" class=" col-md-12 control-label">تصویر
                                            </label>
                                    <div class="col-12 col-md-12"><input type="file" accept="image/jpeg" id="file-input" name="image"
                                                                        class="form-control-file">
                                        @if ($errors->has('image'))
                                            <span class="help-block">
                        <strong>{{ $errors->first('image') }}</strong>
                    </span>
                                        @endif</div>
                                </div>


                                <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                                    <label for="MyBody" class="col-md-12 control-label">متن</label>

                                    <div class="col-md-12">
                                        <textarea id="MyBody" class="form-control" name="body"
                                                  value="{{ old('body') }}" required autofocus> </textarea>
                                        @if ($errors->has('body'))
                                            <span class="help-block">
                        <strong>{{ $errors->first('body') }}</strong>
                    </span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group{{ $errors->has('tags') ? ' has-error' : '' }}">
                                    <label class="control-label col-md-12"> دسته </label>

                                    <div class="col-xs-6 col-sm-12">


                                        <select class="js-example-basic-multiple col-sm-12" name="tags[]"
                                                multiple="multiple">

                                        </select>

                                        @if ($errors->has('body'))
                                            <span class="help-block">
                        <strong>{{ $errors->first('tags') }}</strong>
                    </span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 col-md-offset-4">
                                        <button class="btn btn-primary btn-block">ثبت</button>
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
    {{--<script src="/js/jquery.slimscroll.js"></script>--}}
    {{--<script src="/js/jquery.nicescroll.js"></script>--}}
    {{--<script src="/js/jquery.scrollTo.min.js"></script>--}}

    <script src="/js/lib/sweet-alert2/sweetalert2.min.js"></script>

    <script src="/js/lib/select2/js/select2.min.js"></script>
    <script src="/simplemde/dist/simplemde.min.js"></script>

    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>--}}

@endsection

@section('inline-scripts')
    <script>
        var simplemde = new SimpleMDE({element: document.getElementById("MyBody")});
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.js-example-basic-multiple').select2({
                tags: true,
            });
        });
    </script>

@endsection