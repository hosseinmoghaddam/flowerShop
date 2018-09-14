@extends('site-en.layout.container')

@section('content')
    <div class="row">
        <!--Left Part Start -->
        <aside id="column-left" class="col-sm-3 hidden-xs">
            <h3 class="subtitle">Categories</h3>
            <div class="box-category">
                <ul id="cat_accordion">
                    @foreach($tags as $tag)
                        <li><a href="{{ route('en.tag', $tag->id) }}">{{ $tag->en_name }}({{ count($tag->products) }})</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </aside>
        <!--Left Part End -->
        <!--Middle Part Start-->
        <div id="content" class="col-sm-9">
            @if ($cat)
                <h1 class="title">{{ $cat->en_name }}</h1>
                <p>{{ $cat->description }}</p>
            @endif

            <div class="product-filter">
                <div class="row">
                    <div class="col-md-4 col-sm-5">
                        <div class="btn-group">
                            <button type="button" id="list-view" class="btn btn-default" data-toggle="tooltip" title="List"><i class="fa fa-th-list"></i></button>
                            <button type="button" id="grid-view" class="btn btn-default" data-toggle="tooltip" title="Grid"><i class="fa fa-th"></i></button>
                        </div>
                        <a href="compare.html" id="compare-total">Product Compare (0)</a> </div>
                    <div class="col-sm-2 text-right">
                        <label class="control-label" for="input-sort">Sort By:</label>
                    </div>
                    <div class="col-md-3 col-sm-2 text-right">
                        <select id="input-sort" class="form-control col-sm-3">
                            <option value="" selected="selected">Default</option>
                            <option value="">Name (A - Z)</option>
                            <option value="">Name (Z - A)</option>
                            <option value="">Price (Low &gt; High)</option>
                            <option value="">Price (High &gt; Low)</option>
                            <option value="">Rating (Highest)</option>
                            <option value="">Rating (Lowest)</option>
                            <option value="">Model (A - Z)</option>
                            <option value="">Model (Z - A)</option>
                        </select>
                    </div>
                    <div class="col-sm-1 text-right">
                        <label class="control-label" for="input-limit">Show:</label>
                    </div>
                    <div class="col-sm-2 text-right">
                        <select id="input-limit" onchange="limitPaginate('{{route('en.shop')}}','{{csrf_token()}}')"  class="form-control">
                            <option value="" selected="selected">20</option>
                            <option value="">25</option>
                            <option value="">50</option>
                            <option value="">75</option>
                            <option value="">100</option>
                        </select>
                    </div>
                </div>
            </div>
            <br />
                <div class="row products-category">
                    @if(count($products))
                        @foreach($products as $product)
                            <div class="product-layout product-list col-xs-12">
                                <div class="product-thumb">
                                    <div class="image"><a href="{{ route('en.detail', $product->id) }}"><img src="{{ $product->image1 }}" alt="{{ $product->name }}" title="{{ $product->name }}" class="img-responsive" /></a></div>
                                    <div>
                                        <div class="caption">
                                            <h4><a href="{{ route('en.detail', $product->id) }}">{{ $product->name }}</a></h4>
                                            <p class="description">{{ $product->description }}</p>
                                            <p class="price"> <span class="price-new">{{ $product->price }} Toman</span> <span class="price-old">{{ $product->price  }} Toman</span> <span class="saving">-26%</span> <span class="price-tax"> Ex Tax: 90000 Toman</span> </p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onClick="addToCare('{{route('en.add',$product->id)}}','{{csrf_token()}}')"><span>Add to Cart</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i> <span>Add to Wish List</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else

                        <div class="product-layout product-list col-xs-12">
                            No items found.

                        </div>
                    @endif

                </div>
                <div class="row">
                    <div class="col-sm-6 text-left">
                        <div class="text-center">
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
        </div>
        <!--Middle Part End -->
    </div>

@stop

@section('inline-scripts')

    <script>

        function addToCare(id,csrf) {
            $.ajax({
                url:id ,
                method: 'Post',
                async: true,
                cache: false,
                beforeSend: function (request) {
                    request.setRequestHeader("X-CSRF-TOKEN", csrf);

                },
                complete: function () {

                },
                success: function (data) {
                    alert('Added');
                    $('#cart-total').html( data.count +"- Item "+ data.care  +" Toman " );
                    $('#btncare').removeAttr('disabled');
                    $('#btnsee').removeAttr('disabled');

                },
                error: function (request, msg, error) {
                    console.log(request, msg, error);

                }
            });
        }

    </script>

@endsection