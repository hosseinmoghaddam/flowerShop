@extends('dashboard.layout.container')

@section('title')
    لیست پیام ها
@endsection

@section('b-bs')
    <li class="active">خواندن پیام : {{ $message->name }}</li>
    <li><a href="#">مدیریت پیام ها</a></li>
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
                <div class="card-header">
                    <strong class="card-title"></strong>
                </div>
                <div class="card-body">
                    <div class="card" >
                        <div class="card-body">
                            <h5 class="card-title">{{ $message->name }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $message->email }}</h6>
                            <p class="card-text">{{ $message->message }}</p>
                            <a href="#" onclick="confirmDelete('{{ route('message.destroy', $message->id) }}', '{{ $message->id }}')"  id="sa-warning" class="btn btn-outline-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">حذف</a>
                            <a href="{{ route('message.index' ) }}" data-toggle="tooltip" class="btn btn-outline-primary" data-placement="top" title="" data-original-title="Read">بازگشت</a>
                        </div>
                    </div>
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


        $(document).ready(function() {
            $('#bootstrap-data-table-export').DataTable();
        } );
    </script>


@endsection