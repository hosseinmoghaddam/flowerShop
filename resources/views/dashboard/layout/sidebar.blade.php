<!-- Left Panel -->

<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="./"><img src="/images/logo.png" alt="Logo"></a>
            <a class="navbar-brand hidden" href="./"><img src="/images/logo2.png" alt="Logo"></a>
        </div>
        <div id="main-menu" class="main-menu collapse navbar-collapse">


            @if (auth()->user()->role == 'admin')
                @include('dashboard.layout.nav-list.admin')
            @elseif(auth()->user()->role=='member')
                @include('dashboard.layout.nav-list.member')
            @endif
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->