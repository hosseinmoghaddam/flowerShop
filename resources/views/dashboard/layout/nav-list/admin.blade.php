<ul class="nav navbar-nav">
    <li>
        <a href="{{ route('home') }}" style="font-family: 'Samim', serif"> <i class="menu-icon fa fa-dashboard"></i>داشبورد
        </a>
    </li>
    <h3 class="menu-title" style="font-family: 'Samim', serif">مدیریت</h3><!-- /.menu-title -->
    <li class="menu-item-has-children active dropdown">
        <a href="#" class="dropdown-toggle" style="font-family: 'Samim', serif" data-toggle="dropdown"
           aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa  fa-leaf"></i>مدیریت گل ها</a>
        <ul class="sub-menu children dropdown-menu">
            <li><i class="fa fa-bars"></i><a href="{{ route('product.index') }}" style="font-family: 'Samim', serif">لیست
                    گل ها</a></li>
            <li><i class="fa fa-plus"></i><a href="{{ route('product.create') }}" style="font-family: 'Samim', serif">افزودن
                    گل</a></li>
        </ul>
    </li>
    <li class="menu-item-has-children active dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
           style="font-family: 'Samim', serif"> <i class="menu-icon fa fa-code-fork"></i>مدیریت دسته ها</a>
        <ul class="sub-menu children dropdown-menu">
            <li><i class="fa fa-bars"></i><a href="{{ route('tag.index') }}" style="font-family: 'Samim', serif">لیست
                    دسته ها</a></li>
            <li><i class="fa fa-plus"></i><a href="{{ route('tag.create') }}" style="font-family: 'Samim', serif">افزودن
                    دسته</a></li>
        </ul>
    </li>

    <li class="menu-item-has-children active dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
           style="font-family: 'Samim', serif"> <i class="menu-icon fa fa-user"></i>مدیریت ادمین ها</a>
        <ul class="sub-menu children dropdown-menu">
            <li><i class="fa fa-users"></i><a href="{{ route('user.index') }}" style="font-family: 'Samim', serif">لیست
                    ادمین ها</a></li>
            <li><i class="fa fa-plus"></i><a href="{{ route('user.create') }}" style="font-family: 'Samim', serif">افزودن
                    ادمین</a></li>
        </ul>
    </li>

    <li class="menu-item-has-children active dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
           style="font-family: 'Samim', serif"> <i class="menu-icon fa fa-user"></i>مدیریت مشتری ها</a>
        <ul class="sub-menu children dropdown-menu">
            <li><i class="fa fa-users"></i><a href="{{ route('member.index') }}" style="font-family: 'Samim', serif">لیست
                    مشتری ها</a></li>

        </ul>
    </li>

    <li class="menu-item-has-children active dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
           style="font-family: 'Samim', serif"> <i class="menu-icon fa fa-comment"></i>مدیریت پیام ها</a>
        <ul class="sub-menu children dropdown-menu">
            <li><i class="fa fa-bars"></i><a href="{{ route('message.index') }}" style="font-family: 'Samim', serif">لیست
                    پیام ها</a></li>
        </ul>
    </li>
    <li class="menu-item-has-children active dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
           style="font-family: 'Samim', serif"> <i class="menu-icon fa fa-comment"></i>مدیریت سفارشات</a>
        <ul class="sub-menu children dropdown-menu">
            <li><i class="fa fa-bars"></i><a href="{{ route('order.index') }}" style="font-family: 'Samim', serif">لیست
                    سفارشات</a></li>
        </ul>
    </li>

    <li class="menu-item-has-children active dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
           style="font-family: 'Samim', serif"> <i class="menu-icon fa fa-podcast"></i>مدیریت بلاگ</a>
        <ul class="sub-menu children dropdown-menu">
            <li><i class="fa fa-bars"></i><a href="{{ route('post.index') }}" style="font-family: 'Samim', serif">لیست
                     پست ها</a></li>

            <li><i class="fa fa-neuter"></i><a href="{{ route('post.create') }}" style="font-family: 'Samim', serif"> پست جدید</a></li>
        </ul>
    </li>

    <h3 class="menu-title" style="font-family: 'Samim', serif">بخش کابر</h3><!-- /.menu-title -->
    <li class="menu-item-has-children active dropdown">
        <a href="#" class="dropdown-toggle" style="font-family: 'Samim', serif" data-toggle="dropdown"
           aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa  fa-leaf"></i>ناحیه کاربری</a>
        <ul class="sub-menu children dropdown-menu">
            <li><i class="fa fa-bars"></i><a href="{{ route('attachment.create') }}"
                                             style="font-family: 'Samim', serif">کامل کردن اطلاعات</a></li>
        </ul>
    </li>
</ul>