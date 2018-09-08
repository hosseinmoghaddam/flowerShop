@extends('site-en.layout.container')

@section('content')
    <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-12">
            <h1 class="title">Shopping Cart</h1>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <td class="text-center">Image</td>
                        <td class="text-left">Product Name</td>
                        <td class="text-left">Categories</td>
                        <td class="text-left">Quantity</td>
                        <td class="text-right">Unit Price</td>
                        <td class="text-right">Total</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td class="text-center"><a href="{{ route('en.detail', $product->id) }}"><img src="{{ $product->image1 }}" style="    max-width: 20%;" alt="{{ $product->name }}" title="{{ $product->name }}" class="img-thumbnail" /></a></td>
                            <td class="text-left"><a href="{{ route('en.detail', $product->id) }}">{{ $product->name }}</a><br />
                                <small>Purchase Points : {{ $product->rate }}</small></td>
                            <td class="text-left">
                                @foreach( $product->tags  as $tag)
                                    <span class="btn btn-success">{{$tag->name}}</span>
                                @endforeach
                            </td>
                            <td class="text-left"><div class="input-group btn-block quantity">
                                    <input type="text" name="quantity" value="1" size="1" class="form-control" />
                                    <span class="input-group-btn">
                        <button type="submit" data-toggle="tooltip" title="Update" class="btn btn-primary"><i class="fa fa-refresh"></i></button>
                        <button type="button" data-toggle="tooltip" title="Delete" class="btn btn-danger" onClick=""><i class="fa fa-times-circle"></i></button>
                        </span></div></td>
                            <td class="text-right">{{ $product->price }}  Toman</td>
                            <td class="text-right">{{ $product->price }} Toman</td>
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
                            <td class="text-right"><strong>Sub-Total:</strong></td>
                            <td class="text-right">{{ $ps->sum() }} Toman</td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Eco Tax :</strong></td>
                            <td class="text-right">4000 Toman</td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>VAT :</strong></td>
                            <td class="text-right">{{ ($ps->sum())/9 }} Toman</td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Total:</strong></td>
                            <td class="text-right">{{ ($ps->sum())-(($ps->sum())/9)-4000 }} Toman</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="buttons">
                <div class="pull-left"><a href="#" class="btn btn-default">Continue Shopping</a></div>
                <div class="pull-right"><a href="#" class="btn btn-primary">Checkout</a></div>
            </div>
        </div>
        <!--Middle Part End -->
    </div>

@stop

@section('inline-scripts')


@endsection