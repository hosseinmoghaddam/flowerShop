@extends('site.layout.container')

@section('content')
    <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-9">
            <h1 class="title">تماس با ما</h1>
            <h3 class="subtitle">محل ما</h3>
            <div class="row">

                <div class="col-sm-3"><strong>آدرس فلورشاپ</strong><br />
                    <address>
                        قاین،<br />
                        میدان شیرازی،<br />
                        خیابان بزرگمهر،<br />
                        دانشگاه بزرگمهر </address>
                </div>
                <div class="col-sm-3"><strong>شماره تلفن</strong><br>
                    +91 9898989898<br />
                    <br />
                    <strong>فکس</strong><br>
                    +91 9898989898 </div>
                <div class="col-sm-3"> <strong>ساعات کار</strong><br />
                    خدمات مشتریان 24x7<br />
                    <br />
                    <strong>دیدگاه ها</strong><br />
                    در اینجا توضیحات دلخواه خود را قرار دهید. فروشگاه چک قبول نمیکند! </div>
            </div>
            <form class="form-horizontal" method="post" action="{{ route('message') }}">
                @csrf
                <fieldset>
                    <h3 class="subtitle">با ما ارتباط برقرار کنید</h3>
                    <div class="form-group required">
                        <label class="col-md-2 col-sm-3 control-label" for="input-name">نام شما</label>
                        <div class="col-md-10 col-sm-9">
                            <input type="text" name="name" value="" id="input-name" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-md-2 col-sm-3 control-label" for="input-email">آدرس ایمیل</label>
                        <div class="col-md-10 col-sm-9">
                            <input type="text" name="email" value="" id="input-email" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-md-2 col-sm-3 control-label" for="input-enquiry">پرسش</label>
                        <div class="col-md-10 col-sm-9">
                            <textarea name="message" rows="10" id="input-enquiry" class="form-control"></textarea>
                        </div>
                    </div>
                </fieldset>
                <div class="buttons">
                    <div class="pull-right">
                        <input class="btn btn-primary" type="submit" value="ارسال" />
                    </div>
                </div>
            </form>
        </div>
        <aside id="column-right" class="col-sm-3 hidden-xs">
            <div class="list-group">
                <h2 class="subtitle">پیام مدیر سایت</h2>
                <p>ماموریت ما ایجاد فرصتی است برای شما که به عزیزانتان نشان دهید به آنها اهمیت میدهید.</p>
                    </div>

        </aside>
        <!--Middle Part End -->
    </div>
@stop