<nav id="menu" class="navbar">
    <div class="navbar-header"> <span class="visible-xs visible-sm"> Menu <b></b></span></div>
    <div class="container">
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li><a class="home_link" title="Home" href="{{ route('en.index') }}">Home</a></li>
                <li><a class="home_link" title="About Us" href="{{ route('en.about') }}">About Us</a></li>
                <li><a class="home_link" title="Contact Us" href="{{ route('en.contact') }}">Contact Us</a></li>

                <li class="dropdown"><a href="{{ route('en.shop') }}">Birthday</a>
                    <div class="dropdown-menu">
                        <div class="hidden"> {{ $tags = \App\Tag::all()->slice(0, 5) }}</div>
                        <ul>
                            @foreach($tags as $tag)
                                <li><a href="{{ route('en.tag', $tag->id) }}"> {{ $tag->en_name }} </a>
                            @endforeach
                        </ul>
                    </div>
                </li>

                <li class="dropdown"><a href="{{ route('en.shop') }}">Sympathy</a>
                    <div class="dropdown-menu">
                        <div class="hidden"> {{ $tags = \App\Tag::all()->slice(5, 4) }}</div>
                        <ul>
                            @foreach($tags as $tag)
                                <li><a href="{{ route('en.tag', $tag->id) }}"> {{ $tag->en_name }} </a>
                            @endforeach
                        </ul>
                    </div>
                </li>

                <li class="dropdown"><a href="{{ route('en.shop') }}">Occasion</a>
                    <div class="dropdown-menu">
                        <div class="hidden"> {{ $tags = \App\Tag::all()->slice(9, 6) }}</div>
                        <ul>
                            @foreach($tags as $tag)
                                <li><a href="{{ route('en.tag', $tag->id) }}"> {{ $tag->en_name }} </a>
                            @endforeach
                        </ul>
                    </div>
                </li>


                <li class="dropdown"><a href="{{ route('en.shop') }}">Flowers</a>
                    <div class="dropdown-menu">
                        <div class="hidden"> {{ $tags = \App\Tag::all()->slice(15, 9) }}</div>
                        <ul>
                            @foreach($tags as $tag)
                                <li><a href="{{ route('en.tag', $tag->id) }}"> {{ $tag->en_name }} </a>
                            @endforeach
                        </ul>
                    </div>
                </li>

                <li class="dropdown"><a href="{{ route('en.shop') }}">Plants</a>
                    <div class="dropdown-menu">
                        <div class="hidden"> {{ $tags = \App\Tag::all()->slice(24, 7) }}</div>
                        <ul>
                            @foreach($tags as $tag)
                                <li><a href="{{ route('en.tag', $tag->id) }}"> {{ $tag->en_name }} </a>
                            @endforeach
                        </ul>
                    </div>
                </li>

{{--                <li class="dropdown"><a href="{{ route('en.shop') }}">Gourmet</a>
                    <div class="dropdown-menu">
                        <div class="hidden"> {{ $tags = \App\Tag::all()->slice(31, 4) }}</div>
                        <ul>
                            @foreach($tags as $tag)
                                <li><a href="{{ route('en.tag', $tag->id) }}"> {{ $tag->en_name }} </a>
                            @endforeach
                        </ul>
                    </div>
                </li>--}}

                <li class="dropdown"><a href="{{ route('en.shop') }}">Specials</a>
                    <div class="dropdown-menu">
                        <div class="hidden"> {{ $tags = \App\Tag::all()->slice(36, 2) }}</div>
                        <ul>
                            @foreach($tags as $tag)
                                <li><a href="{{ route('en.tag', $tag->id) }}"> {{ $tag->en_name }} </a>
                            @endforeach
                        </ul>
                    </div>
                </li>

                <li class="dropdown"><a href="{{ route('en.shop') }}">International</a>
                    <div class="dropdown-menu">
                        <div class="hidden"> {{ $tags = \App\Tag::all()->slice(38, 5) }}</div>
                        <ul>
                            @foreach($tags as $tag)
                                <li><a href="{{ route('en.tag', $tag->id) }}"> {{ $tag->en_name }} </a>
                            @endforeach
                        </ul>
                    </div>
                </li>

                <li class="custom-link-right"><a href="{{ route('blog.index') }}" target="_blank"> Flower Blog</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Menu End-->
