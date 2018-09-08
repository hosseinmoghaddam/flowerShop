<nav id="menu" class="navbar">
    <div class="navbar-header"> <span class="visible-xs visible-sm"> Menu <b></b></span></div>
    <div class="container">
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li><a class="home_link" title="Home" href="{{ route('en.index') }}">Home</a></li>
                <li class="dropdown"><a title="Flowers" href="{{ route('en.shop') }}">Flowers</a>
                    <div class="dropdown-menu">
                        <div class="hidden"> {{ $tags = \App\Tag::all() }}</div>
                        <ul>
                            @foreach($tags as $tag)
                                <li><a href="{{ route('en.tag', $tag->id) }}"> {{ $tag->en_name }} </a>
                            @endforeach
                        </ul>
                    </div>
                </li>
                <li><a class="home_link" title="About Us" href="{{ route('en.about') }}">About Us</a></li>
                <li><a class="home_link" title="Contact Us" href="{{ route('en.contact') }}">Contact Us</a></li>
                <li class="custom-link-right"><a href="#" target="_blank"> Buy Now!</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Menu End-->
