@extends('dashboard.layout.container')

@section('title')
    ویرایش دسته
@endsection


@section('b-bs')
    <li class="active">ویرایش دسته</li>
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

                            <form class="form-horizontal" method="POST" action="{{ route('tag.update', $tag->id) }}">
                                @csrf
                                @method('PATCH')
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-12 control-label">نام</label>

                                    <div class="col-md-12">
                                        <input id="name" class="form-control" name="name"
                                               value="{{ old('name', $tag->name) }}" required autofocus>
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
                                               value="{{ old('en_name', $tag->en_name) }}" required>
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
                                               value="{{ old('description', $tag->description) }}" required>
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


@endsection
