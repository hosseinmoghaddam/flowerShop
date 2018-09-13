@extends('site.layout.container')

@section('inline-style')

    <style>
        .timeline {
            list-style-type: none;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .li {
            transition: all 200ms ease-in;
        }

        .timestamp {
            margin-bottom: 20px;
            padding: 0px 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
            font-weight: 100;
        }

        .status {
            padding: 0px 40px;
            display: flex;
            justify-content: center;
            border-top: 2px solid #D6DCE0;
            position: relative;
            transition: all 200ms ease-in;
        }
        .status h4 {
            font-weight: 600;
        }
        .status:before {
            content: "";
            width: 25px;
            height: 25px;
            background-color: white;
            border-radius: 25px;
            border: 1px solid #ddd;
            position: absolute;
            top: -15px;
            left: 42%;
            transition: all 200ms ease-in;
        }

        .li.complete .status {
            border-top: 2px solid #66DC71;
        }
        .li.complete .status:before {
            background-color: #66DC71;
            border: none;
            transition: all 200ms ease-in;
        }
        .li.complete .status h4 {
            color: #66DC71;
        }

        @media (min-device-width: 320px) and (max-device-width: 700px) {
            .timeline {
                list-style-type: none;
                display: block;
            }

            .li {
                transition: all 200ms ease-in;
                display: flex;
                width: inherit;
            }

            .timestamp {
                width: 100px;
            }

            .status:before {
                left: -8%;
                top: 30%;
                transition: all 200ms ease-in;
            }
        }




    </style>

@endsection

@section('content')
    <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-12">
            <h1 class="title">تسویه حساب</h1>
            <ul class="timeline" id="timeline">
                <li class="li ">
                    <div class="timestamp">
                        <span class="author">Abhi Sharma</span>
                        <span class="date">11/15/2014</span>
                    </div>
                    <div class="status">
                        <h4> Shift Created </h4>
                    </div>
                </li>
                <li class="li">
                    <div class="timestamp">
                        <span class="author">PAM Admin</span>
                        <span class="date">11/15/2014</span>
                    </div>
                    <div class="status">
                        <h4> Email Sent </h4>
                    </div>
                </li>
                <li class="li">
                    <div class="timestamp">
                        <span class="author">Aaron Rodgers</span>
                        <span class="date">11/15/2014</span>
                    </div>
                    <div class="status">
                        <h4> SIC Approval </h4>
                    </div>
                </li>
                <li class="li">
                    <div class="timestamp">
                        <span class="author">تکمیل اطلاعات</span>
                    </div>
                    <div class="status">
                        <h4>ورود </h4>
                    </div>
                </li>
            </ul>

            <div class="well">
                <h4>توجه</h4>
                <p>شما به عنوان مهمان وارد سایت شده اید اگر حساب کاربری دارید ابتدا وارد شوید و اگر هم حساب کاربر ندارید
                    می توانید با دکمه زیر یک حساب کاربری ایجاد کنید یا به عنوان مهمان فرم زیرا پر کنید</p>
                <a href="{{ url('register') }}" class="btn btn-primary">ثبت نام</a></div>
            <div class="row">
                <form method="post" action="{{ route('order.store') }}">
                    @csrf
                    <div class="col-sm-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><i class="fa fa-user"></i> اطلاعات شخصی شما</h4>
                            </div>
                            <div class="panel-body">

                                <fieldset id="account">
                                    <div class="form-group required">
                                        <label for="input-payment-firstname" class="control-label">نام</label>
                                        <input type="text" class="form-control" id="input-payment-firstname"
                                               placeholder="نام" value="" name="first_name">
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-payment-lastname" class="control-label">نام خانوادگی</label>
                                        <input type="text" class="form-control" id="input-payment-lastname"
                                               placeholder="نام خانوادگی" value="" name="last_name">
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-payment-email" class="control-label">آدرس ایمیل</label>
                                        <input type="text" class="form-control" id="input-payment-email"
                                               placeholder="آدرس ایمیل" value="" name="email">
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-payment-telephone" class="control-label">شماره تلفن</label>
                                        <input type="text" class="form-control" id="input-payment-telephone"
                                               placeholder="شماره تلفن" value="" name="phone_number">
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-payment-address-1" class="control-label">آدرس </label>
                                        <input type="text" class="form-control" id="input-payment-address-1"
                                               placeholder="آدرس" value="" name="address">
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-payment-postcode" class="control-label">کد پستی</label>
                                        <input type="text" class="form-control" id="input-payment-postcode"
                                               placeholder="کد پستی" value="" name="postal_code">
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
                                        <h4 class="panel-title"><i class="fa fa-credit-card"></i> شیوه پرداخت</h4>
                                    </div>
                                    <div class="panel-body">
                                        <p>لطفا یک شیوه پرداخت برای سفارش خود انتخاب کنید.</p>
                                        <input hidden type="number" value="0" name="pay_way">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" checked="checked" name="">
                                                پرداخت هنگام تحویل</label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="Bank Transfer">
                                                واریز به حساب</label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="Paypal">
                                                پی پال</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><i class="fa fa-shopping-cart"></i> سبد خرید</h4>
                                    </div>
                                    <div class="panel-body">
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
                                                        <td class="text-center"><a
                                                                    href="{{ route('detail', $product->id) }}"><img
                                                                        src="{{ $product->image1 }}"
                                                                        style="    max-width: 20%;"
                                                                        alt="{{ $product->name }}"
                                                                        title="{{ $product->name }}"
                                                                        class="img-thumbnail"/></a></td>
                                                        <td class="text-left"><a
                                                                    href="{{ route('detail', $product->id) }}">{{ $product->name }}</a><br/>
                                                            <small>امتیازات خرید: {{ $product->rate }}</small>
                                                        </td>
                                                        <td class="text-left">
                                                            @foreach( $product->tags  as $tag)
                                                                <span class="btn btn-success">{{$tag->name}}</span>
                                                            @endforeach
                                                        </td>
                                                        <td class="text-left">
                                                            <div class="input-group btn-block quantity">
                                                                <input type="text" name="quantity" value="1" size="1"
                                                                       class="form-control"/>
                                                                <span class="input-group-btn">
                        <button type="submit" data-toggle="tooltip" title="بروزرسانی" class="btn btn-primary"><i
                                    class="fa fa-refresh"></i></button>
                        <button type="button" data-toggle="tooltip" title="حذف" class="btn btn-danger" onClick=""><i
                                    class="fa fa-times-circle"></i></button>
                        </span></div>
                                                        </td>
                                                        <td class="text-right">{{ $product->price }} تومان</td>
                                                        <td class="text-right">{{ $product->price }} تومان</td>
                                                    </tr>
                                                @endforeach
                                                <tr>
                                                    @inject('ps','App\Product')
                                                    <td class="text-right" colspan="3"><strong>جمع کل:</strong></td>
                                                    <td class="text-right" colspan="3">{{ $ps->sum() }} تومان</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-right" colspan="3"><strong>مالیات:</strong></td>
                                                    <td class="text-right" colspan="3">{{ ($ps->sum())/9 }} تومان</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-right" colspan="3"><strong>کل :</strong></td>
                                                    <td class="text-right"
                                                        colspan="3">{{ ($ps->sum())-(($ps->sum())/9)}} تومان
                                                    </td>
                                                    <input hidden type="number"
                                                           value="{{ abs($ps->sum())-(($ps->sum())/9)}}" name="sum"/>
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
                                        <h4 class="panel-title"><i class="fa fa-pencil"></i> افزودن توضیح برای سفارش.
                                        </h4>
                                    </div>
                                    <div class="panel-body">
                                        <textarea rows="4" class="form-control" id="confirm_comment"
                                                  name="description"></textarea>
                                        <br>
                                        <label class="control-label" for="confirm_agree">
                                            <input type="checkbox" checked="checked" value="1" required=""
                                                   class="validate required" id="confirm_agree" name="confirm agree">
                                            <span><a class="agree" href="#"><b>شرایط و قوانین</b></a> را خوانده ام و با آنها موافق هستم.</span>
                                        </label>
                                        <div class="buttons">
                                            <div class="pull-right">
                                                <input type="submit" class="btn btn-primary" id="button-confirm"
                                                       value="تایید سفارش">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--Middle Part End -->
    </div>

@stop

@section('inline-scripts')


@endsection