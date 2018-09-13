@extends('dashboard.layout.container')

@section('title')
جزئیات
@endsection

@section('b-bs')
    <li class="active">جزئیات</li>
    <li><a href="#">مدیریت سفارشات </a></li>
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
                <div class="card-header bg-info">
                    <strong class="card-title">اطلاعات سفارش دهنده</strong>
                </div>
                <div class="card-body">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">نام: {{ $order->first_name }}</h5>
                                <h5 class="card-title">نام خانوادگی: {{ $order->last_name }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">ایمیل:{{ $order->email }}</h6>
                                <h6 class="card-subtitle mb-2 text-muted">تاریخ تحویل:{{ $order->delivery_date }}</h6>
                                <p class="card-text">توضیحات:{{ $order->description }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">آدرس: {{ $order->address }}</h5>
                                <h5 class="card-title">قابل پرداخت :  {{ $order->sum }} تومان</h5>
                                <h6 class="card-subtitle mb-2 text-muted">کد پستی: {{ $order->postal_code }}</h6>
                                <h6 class="card-subtitle mb-2 text-muted">تلفن: {{ $order->phone_number }}</h6>
                                <h6 class="card-subtitle mb-2 text-muted">روش پرداخت:  @if ($order->pay_way == 0)پرداخت هنگام تحویل@elseif($order->pay_way == 1)واریز به حساب@elseپی پال@endif</h6>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">محصولات سفارش داده شده</strong>
                </div>
                <div class="card-body">
                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>ردیف</th>
                            <th>نام</th>
                            <th>قیمت</th>
                            <th>توضیحات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr data-id="{{ $product->id }}">
                                <td>{{$loop->iteration}}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->description }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
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

    <script>
        function changState(id,csrf) {
            $.ajax({
                url:id ,
                method: 'Post',
                async: true,
                cache: false,
                beforeSend: function (request) {
                    request.setRequestHeader("X-CSRF-TOKEN", csrf);
                    $('#payment-button-sending2').css("display","inline");
                    $('#payment-button-sending1').css("display","none");

                },
                complete: function () {

                },
                success: function (data) {
                    $('#payment-button2').css("display","none");;
                    $('#payment-button1').css("display","block");


                },
                error: function (request, msg, error) {
                    console.log(request, msg, error);
                    alert('مشکلی پیش امده');

                }
            });
        }

    </script>

    <script type="text/javascript">function confirmDelete(url, mId) {
            swal({
                title: "آیا مطمئن هستید حذف شود؟",
                text: "اگر حذف شود دیگر بازیابی نخواهد شد",
                type: "warning",
                showCancelButton: !0,
                confirmButtonClass: "btn btn-success",
                cancelButtonClass: "btn btn-danger m-l-10",
                confirmButtonText: "بله ٫ حذف شود",
                cancelButtonText: "بی خیال"
            }).then(function () {
                $.ajax({
                    url: url,
                    method: 'DELETE',
                    async: true,
                    cache: false,
                    beforeSend: function (request) {
                        request.setRequestHeader("X-CSRF-TOKEN", $('meta[name="csrf-token"]').attr('content'));
                        // $('.loader').show();
                    },
                    complete: function () {
                        // $('.loader').hide();
                    },
                    success: function (data) {
                        if (data.status) {
                            $('tr[data-id=' + mId + ']').remove();
                            swal("حذف شد!", "عملیات حذف با موفقیت انجام شد", "success")
                        } else {

                            swal("حذف نشد!", "لطفا به فناوری اطلاعات مراجعه فرمایید", "error")
                        }
                    },
                    error: function (request, msg, error) {
                        console.log(request, msg, error);
                        swal("حذف نشد!", "لطفا به فناوری اطلاعات مراجعه فرمایید", "error")
                    }
                });
            })

        }


        $(document).ready(function () {
            $('#bootstrap-data-table-export').DataTable();
        });
    </script>


@endsection