@extends('site-en.layout.container')

@section('page-specific-plugin-styles')
    <link rel="stylesheet" href="/datepickk/dist/datepickk.min.css">
    <link rel="stylesheet" href="/persianDatepicker/css/persianDatepicker-default.css">
@stop

@section('content')
    <div class="row">
        <script src="/datepickk/dist/datepickk.min.js"></script>
        <!--Middle Part Start-->
        <div id="content" class="col-sm-12">
            <h1 class="title">Checkout</h1>
           @if (auth()->guest())
                <div class="well">
                    <h4>توجه</h4>
                    <p>You are logged in as a guest. If you have an account, log in first, and if you do not have a user account, you can create an account with the button below or fill out as a Guest.</p>
                    <a href="{{ url('register') }}" class="btn btn-primary">Register
                    </a>
                    <a href="{{ url('login') }}" class="btn btn-primary">login</a> </div>

                <div class="row">
                    <form  method="post" action="{{ route('order.store') }}">
                        @csrf
                        <div class="col-sm-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><i class="fa fa-user"></i>  Your Personal Details</h4>
                                </div>
                                <div class="panel-body">

                                    <fieldset id="account">
                                        <div class="form-group required{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                            <label for="input-payment-firstname" class="control-label">First Name</label>
                                            <input type="text" required class="form-control" id="input-payment-firstname"  @if (!auth()->guest()) value="{{ old('first_name', auth()->user()->attachment->first_name) }}" @endif placeholder="First Name" value="" name="first_name">
                                        </div>
                                        <div class="form-group required">
                                            <label for="input-payment-lastname" class="control-label">Last Name</label>
                                            <input type="text" required class="form-control" id="input-payment-lastname" @if (!auth()->guest()) value="{{ old('first_name', auth()->user()->attachment->last_name) }}" @endif placeholder="Last Name" value="" name="last_name">
                                        </div>
                                        <div class="form-group required">
                                            <label for="input-payment-email" class="control-label">E-Mail</label>
                                            <input type="email" required class="form-control" id="input-payment-email" @if (!auth()->guest()) value="{{ old('first_name', auth()->user()->email) }}" @endif placeholder="E-Mail" value="" name="email">
                                        </div>
                                        <div class="form-group required">
                                            <label for="input-payment-telephone" class="control-label">Telephone</label>
                                            <input type="text" required class="form-control" id="input-payment-telephone" @if (!auth()->guest()) value="{{ old('first_name', auth()->user()->attachment->phone_number) }}" @endif placeholder="Telephone" value="" name="phone_number">
                                        </div>
                                        <div class="form-group required">
                                            <label for="input-payment-address-1" class="control-label">Address</label>
                                            <input type="text" required class="form-control" id="input-payment-address-1" @if (!auth()->guest()) value="{{ old('first_name', auth()->user()->attachment->address) }}" @endif placeholder="Address" value="" name="address">
                                        </div>
                                        <div class="form-group required">
                                            <label for="input-payment-postcode" class="control-label">Post Code</label>
                                            <input type="text" required class="form-control" id="input-payment-postcode" @if (!auth()->guest()) value="{{ old('first_name', auth()->user()->attachment->postal_code) }}" @endif placeholder="Post Code" value="" name="postal_code">
                                        </div>
                                        <div class="form-group required {{ $errors->has('delivery_date') ? ' has-error' : '' }}">
                                            <label for="delivery_date" class="control-label">delivery date</label>
                                            <input type="text" required id="delivery_date" readonly class="form-control" onclick="datepicker.show()"  placeholder="delivery date" value="" name="delivery_date">
                                            @if ($errors->has('delivery_date'))
                                                <span class="help-block">
                        <strong>{{ $errors->first('delivery_date') }}</strong>
                    </span>
                                            @endif
                                        </div>
                                        <select hidden name="products[]" multiple="multiple" title="products">
                                            @foreach($products as $product)
                                                <option value="{{$product->id}}" selected>{{$product->name}}</option>
                                            @endforeach
                                        </select>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title"><i class="fa fa-credit-card"></i>Payment Method</h4>
                                        </div>
                                        <div class="panel-body">
                                            <p>Please select the preferred payment method to use on this order.</p>
                                            <input hidden type="number" value="0" name="pay_way">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" checked="checked" name="">
                                                    Cash On Delivery</label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="Bank Transfer">
                                                    Bank Transfer</label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="Paypal">
                                                    Paypal</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title"><i class="fa fa-shopping-cart"></i>Shopping cart</h4>
                                        </div>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <td class="text-center">Image</td>
                                                        <td class="text-left">Product Name</td>
                                                        <td class="text-left">Category</td>
                                                        <td class="text-left">Count</td>
                                                        <td class="text-right">Unit Price</td>
                                                        <td class="text-right">Total</td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($products as $product)
                                                        <tr>
                                                            <td class="text-center"><a href="{{ route('detail', $product->id) }}"><img src="{{ $product->image1 }}" style="    max-width: 20%;" alt="{{ $product->name }}" title="{{ $product->name }}" class="img-thumbnail" /></a></td>
                                                            <td class="text-left"><a href="{{ route('detail', $product->id) }}">{{ $product->name }}</a><br />
                                                                <small>Purchase Points:{{ $product->rate }}</small></td>
                                                            <td class="text-left">
                                                                @foreach( $product->tags  as $tag)
                                                                    <span class="btn btn-success">{{$tag->en_name}}</span>
                                                                @endforeach
                                                            </td>
                                                            <td class="text-left"><div class="input-group btn-block quantity">
                                                                    <input type="text" name="quantity" value="1" size="1" class="form-control" />
                                                                    <span class="input-group-btn">
                        <button type="submit" data-toggle="tooltip" title="update" class="btn btn-primary"><i class="fa fa-refresh"></i></button>
                        <button type="button" data-toggle="tooltip" title="delete" class="btn btn-danger" onClick=""><i class="fa fa-times-circle"></i></button>
                        </span></div></td>
                                                            <td class="text-right">{{ $product->price }} Toman</td>
                                                            <td class="text-right">{{ $product->price }} Toman</td>
                                                        </tr>
                                                    @endforeach
                                                    <tr>
                                                        @inject('ps','App\Product')
                                                        <td class="text-right" colspan="3"><strong>Sub-Total:</strong></td>
                                                        <td class="text-right" colspan="3">{{ $ps->sum() }} Toman</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right" colspan="3"><strong>VAT (20%):</strong></td>
                                                        <td class="text-right" colspan="3">{{ ($ps->sum())/9 }} Toman</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right" colspan="3"><strong>Total:</strong></td>
                                                        <td class="text-right" colspan="3">{{ ($ps->sum())-(($ps->sum())/9)}} Toman</td>
                                                        <input hidden type="number" value="{{ abs($ps->sum())-(($ps->sum())/9)}}" name="sum"/>
                                                    </tr>
                                                    </tfoot>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title"><i class="fa fa-pencil"></i> Add Comments About Your Order</h4>
                                        </div>
                                        <div class="panel-body">
                                            <textarea required rows="4" class="form-control" id="confirm_comment" name="description"></textarea>
                                            <br>
                                            <label class="control-label" for="confirm_agree">
                                                <input type="checkbox" checked="checked" value="1" required="" class="validate required" id="confirm_agree" name="confirm agree">
                                                <span><a class="agree" href="#"><b> Terms & Conditions</b></a>I have read and agree to the</span> </label>
                                            <div class="buttons">
                                                <div class="pull-right">
                                                    <input type="submit" class="btn btn-primary" id="button-confirm" value="Confirm Order">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
           @endif
          
            @if (!auth()->guest())
                @if (auth()->user()->attachment == null )
                    <div class="well">
                        <h4>توجه</h4>
                        <p>Your information is not complete. Complete your account information.</p>
                        <a href="{{ route('attachment.store') }}" class="btn btn-lg btn-info">Complete the information</a> </div>


                @else
                    <div class="row">
                        <form  method="post" action="{{ route('en.order.store') }}">
                            @csrf
                            <div class="col-sm-4">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><i class="fa fa-user"></i> Your Personal Details</h4>
                                    </div>
                                    <div class="panel-body">

                                        <fieldset id="account">
                                            <div class="form-group required{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                                <label for="input-payment-firstname" class="control-label">First Name</label>
                                                <input type="text" required class="form-control" id="input-payment-firstname"  @if (!auth()->guest()) value="{{ old('first_name', auth()->user()->attachment->first_name) }}" @endif placeholder="First Name" value="" name="first_name">
                                            </div>
                                            <div class="form-group required">
                                                <label for="input-payment-lastname" class="control-label">Last Name</label>
                                                <input type="text" required class="form-control" id="input-payment-lastname" @if (!auth()->guest()) value="{{ old('last_name', auth()->user()->attachment->last_name) }}" @endif placeholder="Last Name" value="" name="last_name">
                                            </div>
                                            <div class="form-group required">
                                                <label for="input-payment-email" class="control-label">E-Mail</label>
                                                <input type="email" required class="form-control" id="input-payment-email" @if (!auth()->guest()) value="{{ old('email', auth()->user()->email) }}" @endif placeholder="E-Mail" value="" name="email">
                                            </div>
                                            <div class="form-group required">
                                                <label for="input-payment-telephone" class="control-label">Telephone</label>
                                                <input type="text" required class="form-control" id="input-payment-telephone" @if (!auth()->guest()) value="{{ old('phone_number', auth()->user()->attachment->phone_number) }}" @endif placeholder="Telephone" value="" name="phone_number">
                                            </div>
                                            <div class="form-group required">
                                                <label for="input-payment-address-1" class="control-label">Address </label>
                                                <input type="text" required class="form-control" id="input-payment-address-1" @if (!auth()->guest()) value="{{ old('address', auth()->user()->attachment->address) }}" @endif placeholder="Address" value="" name="address">
                                            </div>
                                            <div class="form-group required">
                                                <label for="input-payment-postcode" class="control-label">Post Code</label>
                                                <input type="text" required class="form-control" id="input-payment-postcode" @if (!auth()->guest()) value="{{ old('postal_code', auth()->user()->attachment->postal_code) }}" @endif placeholder="Post Code" value="" name="postal_code">
                                            </div>
                                            <div class="form-group required {{ $errors->has('delivery_date') ? ' has-error' : '' }}">
                                                <label for="delivery_date" class="control-label">delivery date</label>
                                                <input type="text" required id="delivery_date" readonly class="form-control" onclick="datepicker.show()"  placeholder="delivery date" value="" name="delivery_date">
                                                @if ($errors->has('delivery_date'))
                                                    <span class="help-block">
                        <strong>{{ $errors->first('delivery_date') }}</strong>
                    </span>
                                                @endif
                                            </div>
                                            <select hidden name="products[]" multiple="multiple" title="products">
                                                @foreach($products as $product)
                                                    <option value="{{$product->id}}" selected>{{$product->name}}</option>
                                                @endforeach
                                            </select>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><i class="fa fa-credit-card"></i> Payment Method</h4>
                                            </div>
                                            <div class="panel-body">
                                                <p>Please select the preferred payment method to use on this order.</p>
                                                <input hidden type="number" value="0" name="pay_way">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" checked="checked" name="">
                                                        Cash On Delivery</label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="Bank Transfer">
                                                        Bank Transfer</label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="Paypal">
                                                        Paypal</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><i class="fa fa-shopping-cart"></i> Shopping cart</h4>
                                            </div>
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <td class="text-center">Image</td>
                                                            <td class="text-left">Product Name</td>
                                                            <td class="text-left">Category</td>
                                                            <td class="text-left">Count</td>
                                                            <td class="text-right">Unit Price</td>
                                                            <td class="text-right">Total</td>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($products as $product)
                                                            <tr>
                                                                <td class="text-center"><a href="{{ route('detail', $product->id) }}"><img src="{{ $product->image1 }}" style="    max-width: 20%;" alt="{{ $product->name }}" title="{{ $product->name }}" class="img-thumbnail" /></a></td>
                                                                <td class="text-left"><a href="{{ route('detail', $product->id) }}">{{ $product->name }}</a><br />
                                                                    <small>Purchase Points: {{ $product->rate }}</small></td>
                                                                <td class="text-left">
                                                                    @foreach( $product->tags  as $tag)
                                                                        <span class="btn btn-success">{{$tag->en_name}}</span>
                                                                    @endforeach
                                                                </td>
                                                                <td class="text-left"><div class="input-group btn-block quantity">
                                                                        <input type="text" name="quantity" value="1" size="1" class="form-control" />
                                                                        <span class="input-group-btn">
                        <button type="submit" data-toggle="tooltip" title="update" class="btn btn-primary"><i class="fa fa-refresh"></i></button>
                        <button type="button" data-toggle="tooltip" title="delete" class="btn btn-danger" onClick=""><i class="fa fa-times-circle"></i></button>
                        </span></div></td>
                                                                <td class="text-right">{{ $product->price }} Toman</td>
                                                                <td class="text-right">{{ $product->price }} Toman</td>
                                                            </tr>
                                                        @endforeach
                                                        <tr>
                                                            @inject('ps','App\Product')
                                                            <td class="text-right" colspan="3"><strong>Sub-Total:</strong></td>
                                                            <td class="text-right" colspan="3">{{ $ps->sum() }} Toman</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-right" colspan="3"><strong>VAT (20%):</strong></td>
                                                            <td class="text-right" colspan="3">{{ ($ps->sum())/9 }} Toman</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-right" colspan="3"><strong>Total:</strong></td>
                                                            <td class="text-right" colspan="3">{{ ($ps->sum())-(($ps->sum())/9)}} Toman</td>
                                                            <input hidden type="number" value="{{ abs($ps->sum())-(($ps->sum())/9)}}" name="sum"/>
                                                        </tr>
                                                        </tfoot>
                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><i class="fa fa-pencil"></i>Add Comments About Your Order</h4>
                                            </div>
                                            <div class="panel-body">
                                                <textarea required rows="4" class="form-control" id="confirm_comment" name="description"></textarea>
                                                <br>
                                                <label class="control-label" for="confirm_agree">
                                                    <input type="checkbox" checked="checked" value="1" required="" class="validate required" id="confirm_agree" name="confirm agree">
                                                    <span><a class="agree" href="#"><b> Terms & Conditions</b></a>I have read and agree to the</span> </label>
                                                <div class="buttons">
                                                    <div class="pull-right">
                                                        <input type="submit" class="btn btn-primary" id="button-confirm" value="Confirm Order">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                @endif
            @endif
            

        </div>
        <!--Middle Part End -->
    </div>

@stop

@section('inline-scripts')

    <script >
        //Initialize
        var datepicker = new Datepickk();
        /*And some more stuff down there...*/
        datepicker.closeOnSelect = true;
        datepicker.onSelect = function(checked){
            var state = (checked)?'selected':'unselected';
            $('#delivery_date').attr('value',this.toLocaleDateString());

        };

        datepicker.onClose = function(){
            datepicker.unselectAll();
        };

    </script>
@endsection