@extends('site.layout.container')

@section('content')
    <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-12">
            <h1 class="title">سبد خرید</h1>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <td class="text-center">تصویر</td>
                        <td class="text-left">نام محصول</td>
                        <td class="text-left">دسته ها</td>
                        <td class="text-left">تعداد</td>
                        <td class="text-right">قیمت واحد</td>
                        <td class="text-right">کل</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td class="text-center"><a href="{{ route('detail', $product->id) }}"><img src="{{ $product->image1 }}" style="    max-width: 20%;" alt="{{ $product->name }}" title="{{ $product->name }}" class="img-thumbnail" /></a></td>
                        <td class="text-left"><a href="{{ route('detail', $product->id) }}">{{ $product->name }}</a><br />
                            <small>امتیازات خرید: {{ $product->rate }}</small></td>
                        <td class="text-left">
                            @foreach( $product->tags  as $tag)
                                <span class="btn btn-success">{{$tag->name}}</span>
                                @endforeach
                        </td>
                        <td class="text-left"><div class="input-group btn-block quantity">
                                <input type="text" name="quantity" value="1" size="1" class="form-control" />
                                <span class="input-group-btn">
                        <button type="submit" data-toggle="tooltip" title="بروزرسانی" class="btn btn-primary"><i class="fa fa-refresh"></i></button>
                        <button type="button" data-toggle="tooltip" title="حذف" class="btn btn-danger" onClick=""><i class="fa fa-times-circle"></i></button>
                        </span></div></td>
                        <td class="text-right">{{ $product->price }} تومان</td>
                        <td class="text-right">{{ $product->price }} تومان</td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-sm-4 col-sm-offset-8">
                    <table class="table table-bordered">
                        <tr>
                            @inject('ps','App\Product')
                            <td class="text-right"><strong>جمع کل:</strong></td>
                            <td class="text-right">{{ $ps->sum() }} تومان</td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>کسر هدیه:</strong></td>
                            <td class="text-right">4000 تومان</td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>مالیات:</strong></td>
                            <td class="text-right">{{ ($ps->sum())/9 }} تومان</td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>کل :</strong></td>
                            <td class="text-right">{{ ($ps->sum())-(($ps->sum())/9)-4000 }} تومان</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="buttons">
                <div class="pull-left"><a href="#" class="btn btn-default">ادامه خرید</a></div>
                <div class="pull-right"><a href="#" class="btn btn-primary">تسویه حساب</a></div>
            </div>
        </div>
        <!--Middle Part End -->
    </div>
@stop

@section('inline-scripts')


@endsection