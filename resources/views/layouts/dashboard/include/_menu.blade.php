<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link c-active" href="{{ route('/') }}">
        <i class="c-sidebar-nav-icon cil-home"></i> @lang('menu.dashboard')
    </a>
</li>


<li class="c-sidebar-nav-item mt-1">
    <a class="c-sidebar-nav-link c-active" href="{{ route('dashboard.users.index') }}">
        <i class="c-sidebar-nav-icon cil-user"></i> @lang('menu.users')
    </a>
</li>
<li class="c-sidebar-nav-item mt-1">
    <a class="c-sidebar-nav-link c-active" href="{{ route('parent_category.index') }}">
        <i class="c-sidebar-nav-icon cil-user"></i> @lang('menu.parent_category')
    </a>
</li><li class="c-sidebar-nav-item mt-1">
    <a class="c-sidebar-nav-link c-active" href="{{ route('sub_category.index') }}">
        <i class="c-sidebar-nav-icon cil-user"></i> @lang('menu.sup_category')
    </a>
</li><li class="c-sidebar-nav-item mt-1">
    <a class="c-sidebar-nav-link c-active" href="">
        <i class="c-sidebar-nav-icon cil-user"></i> @lang('menu.')
    </a>
</li>

<li class="c-sidebar-nav-item mt-1">
    <a class="c-sidebar-nav-link c-active" href="/about">
        <i class="c-sidebar-nav-icon cil-info"></i> @lang('menu.about')
    </a>
</li>
