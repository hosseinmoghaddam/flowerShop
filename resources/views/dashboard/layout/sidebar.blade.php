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
            <ul class="nav navbar-nav">
                <li>
                    <a href="index.html" style="font-family: 'Samim', serif"> <i class="menu-icon fa fa-dashboard"></i>داشبورد </a>
                </li>
                <h3 class="menu-title" style="font-family: 'Samim', serif">مدیریت</h3><!-- /.menu-title -->
                <li class="menu-item-has-children active dropdown">
                    <a href="#" class="dropdown-toggle" style="font-family: 'Samim', serif" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>مدیریت گل ها</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-puzzle-piece"></i><a href="{{ route('product.index') }}" style="font-family: 'Samim', serif">لیست گل ها</a></li>
                        <li><i class="fa fa-id-badge"></i><a href="{{ route('product.create') }}" style="font-family: 'Samim', serif">افزودن گل</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children active dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-family: 'Samim', serif"> <i class="menu-icon fa fa-laptop"></i>مدیریت دسته ها</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-puzzle-piece"></i><a href="ui-buttons.html" style="font-family: 'Samim', serif">لیست دسته ها</a></li>
                        <li><i class="fa fa-id-badge"></i><a href="ui-badges.html" style="font-family: 'Samim', serif">افزودن دسته</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->