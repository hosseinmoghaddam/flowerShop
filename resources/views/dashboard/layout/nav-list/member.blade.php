<ul class="nav navbar-nav">
    <li>
        <a href="{{ route('home') }}" style="font-family: 'Samim', serif"> <i class="menu-icon fa fa-dashboard"></i>داشبورد </a>
    </li>
    <li class="menu-item-has-children active dropdown">
        <a href="#" class="dropdown-toggle" style="font-family: 'Samim', serif" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa  fa-leaf"></i>ناحیه کاربری</a>
        <ul class="sub-menu children dropdown-menu">
            <li><i class="fa fa-bars"></i><a href="{{ route('attachment.create') }}" style="font-family: 'Samim', serif">کامل کردن اطلاعات</a></li>
        </ul>
    </li>

    <li class="menu-item-has-children active dropdown">
        <a href="#" class="dropdown-toggle" style="font-family: 'Samim', serif" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa  fa-leaf"></i>تاریخچه سفارشات من</a>
        <ul class="sub-menu children dropdown-menu">
            <li><i class="fa fa-bars"></i><a href="{{ route('member.order.index') }}" style="font-family: 'Samim', serif">لیست سفارشات</a></li>
        </ul>
    </li>
</ul>