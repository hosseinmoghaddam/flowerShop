@extends('blog.layout.main')


@section('content')
    <section class="post-area section">
        <div class="container">

            <div class="row">

                <div class="col-lg-8 col-md-12 no-right-padding">

                    <div class="main-post">

                        <div class="blog-post-inner">

                            <div class="post-info">

                                <div class="left-area">
                                    <a class="avatar" href="#"><img src="{{ $post->user->image }}" alt="Profile Image"></a>
                                </div>

                                <div class="middle-area">
                                    <a class="name" href="#"><b>{{ $post->user->name }}</b></a>
                                    <h6 class="date"> در {{ $post->created_at }}</h6>
                                </div>

                            </div><!-- post-info -->

                            <h3 class="title"><a href="#"><b>{{ $post->title }}</b></a></h3>
                            <section class="content">
                                @markdown($post->body)
                            </section>

                            <ul class="tags">
                                @for ($i = 0; $i < count($post->tags); $i++)
                                    <li><a href="{{ route('blog.tag',['tag' => $post->tags[$i] ]) }}">{{$post->tags[$i]}}</a></li>
                                @endfor
                            </ul>
                        </div><!-- blog-post-inner -->

                        <div class="post-icons-area">
                            <ul class="post-icons">

                                <li><a href="#"><i class="ion-chatbubble"></i> {{ count($post->comments) }} </a></li>

                            </ul>

                            <ul class="icons">
                                <li>اشتراک گذاشتن : </li>
                                <li><a href="https://facebook.com"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="https://twitter.com"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="https://www.pinterest.com"><i class="ion-social-pinterest"></i></a></li>
                            </ul>
                        </div>

                        <div class="post-footer post-info">

                            <div class="left-area">
                                <a class="avatar" href="#"><img src="{{ $post->user->image }}" alt="Profile Image"></a>
                            </div>

                            <div class="middle-area">
                                <a class="name" href="#"><b>{{ $post->user->name }}</b></a>
                                <h6 class="date">در {{ $post->created_at}}</h6>
                            </div>

                        </div><!-- post-info -->


                    </div><!-- main-post -->
                </div><!-- col-lg-8 col-md-12 -->

                <div class="col-lg-4 col-md-12 no-left-padding">

                    <div class="single-post info-area">

                        <div class="sidebar-area about-area">
                            <h4 class="title"><b>چکیده</b></h4>
                            <p>{{ $post->abstract }}</p>
                        </div>

                        <div class="tag-area">

                            <h4 class="title"><b>برچسب ها</b></h4>
                            <ul>
                                @foreach($posts as $post1)
                                    @for ($i = 0; $i < count($post1->tags); $i++)
                                        <li><a href="{{ route('blog.tag',['tag' => $post1->tags[$i] ]) }}">{{$post1->tags[$i]}}</a></li>
                                    @endfor
                                    @endforeach
                            </ul>

                        </div><!-- subscribe-area -->

                    </div><!-- info-area -->

                </div><!-- col-lg-4 col-md-12 -->

            </div><!-- row -->

        </div><!-- container -->
    </section><!-- post-area -->


    <section class="recomended-area section">
        <div class="container">
            <div class="row">

                @foreach($posts as $post1)
@if ($loop->iteration <= 3)
                        <div class="col-lg-4 col-md-6">
                            <div class="card h-100">
                                <div class="single-post post-style-1">

                                    <div class="blog-image"><img src="{{ $post1->image }}" alt="Blog Image"></div>

                                    <a class="avatar" href="#"><img src="{{ $post1->user->image }}" alt="Profile Image"></a>

                                    <div class="blog-info">

                                        <h4 class="title"><a href="{{ route('blog.post', $post1->id) }}"><b>{{ $post1->abstract }}</b></a></h4>

                                        <ul class="post-footer">
                                            {{--<li><a href="#"><i class="ion-heart"></i>57</a></li>--}}
                                            <li><a href="#"><i class="ion-chatbubble"></i> {{ count($post1->comments) }} </a></li>
                                            {{--<li><a href="#"><i class="ion-eye"></i>138</a></li>--}}
                                        </ul>

                                    </div><!-- blog-info -->
                                </div><!-- single-post -->
                            </div><!-- card -->
                        </div><!-- col-lg-4 col-md-6 -->
@endif


                @endforeach

            </div><!-- row -->

        </div><!-- container -->
    </section>

    <section class="comment-section">
        <div class="container">
            <h4><b>نظر</b></h4>
            <div class="row">

                <div class="col-lg-8 col-md-12">
                 @if (auth()->guest())
                        <div class="comment-form">

                                <div class="row">
                                    <div class="col-sm-12">
								<h4 class="info">برای گذاشتن نظر ابتدا باید وارد شوید.</h4>
                                    </div><!-- col-sm-12 -->
                                    <div class="col-sm-12" style="margin-top: 20px">
                                        <a class="btn btn-success" href="{{ route('login') }}">ورود</a>
                                        <a class="btn btn-primary" href="{{ route('register') }}">ثبت نام</a>
                                    </div><!-- col-sm-12 -->

                                </div><!-- row -->

                        </div><!-- comment-form -->
                     @else
                        <div class="comment-form">
                            <form method="post" action="{{route('comment.create', $post->id)}}">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12">
									<textarea  rows="2" class="text-area-messge form-control"
                                               placeholder="نظرتان را بنویسید" name="body" aria-required="true" aria-invalid="false"></textarea >
                                    </div><!-- col-sm-12 -->
                                    <div class="col-sm-12">
                                        <button class="submit-btn" type="submit" id="form-submit"><b>ثبت نظر</b></button>
                                    </div><!-- col-sm-12 -->

                                </div><!-- row -->
                            </form>
                        </div><!-- comment-form -->
                 @endif

                    <h4><b>نظرات</b></h4>

@foreach($post->comments as $comment)
                    <div class="commnets-area ">

                        <div class="comment">

                            <div class="post-info">

                                <div class="left-area">
                                    <a class="avatar" href="#"><img src="{{ $comment->user->image }}" alt="Profile Image"></a>
                                </div>

                                <div class="middle-area">
                                    <a class="name" href="#"><b>{{ $comment->user->name }}</b></a>
                                    <h6 class="date">  در{{ $comment->created_at }}</h6>
                                </div>

                                <div class="right-area">
                                    <h5 class="reply-btn" ><a href="#"><b>REPLY</b></a></h5>
                                </div>

                            </div><!-- post-info -->

                            <p>{{ $comment->body }}</p>

                        </div>

                    </div><!-- commnets-area -->
@endforeach
                    {{--<a class="more-comment-btn" href="#"><b>VIEW MORE COMMENTS</b></a>--}}

                </div><!-- col-lg-8 col-md-12 -->

            </div><!-- row -->

        </div><!-- container -->
    </section>

    @endsection