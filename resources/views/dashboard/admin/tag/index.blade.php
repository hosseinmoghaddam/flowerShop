@extends('dashboard.layout.container')
@section('title')
    لیست دسته ها
@endsection


@section('b-bs')
    <li class="active">لیست دسته ها</li>
    <li><a href="#">مدیریت دسته ها</a></li>
@endsection

@section('page-specific-plugin-styles')

@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title"></strong>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">نام</th>
                            <th scope="col">توضیحات</th>
                            <th scope="col" style="width: 127px">عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tags as $tag)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{ $tag->name }}</td>
                                <td>{{ $tag->description}}</td>
                                <td>
                                    <a href="{{ route('tag.edit', $tag->id ) }}" class="btn btn-success btn-sm">ویرایش</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
