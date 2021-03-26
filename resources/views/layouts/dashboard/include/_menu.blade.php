@if (auth()->user()->hasPermission('dashboard_read'))
<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link c-active" href="{{ route('dashboard.welcome') }}">
        <i class="c-sidebar-nav-icon cil-home"></i> @lang('menu.dashboard')
    </a>
</li>
@endif
@if (auth()->user()->hasPermission('users_read'))
<li class="c-sidebar-nav-item mt-1">
    <a class="c-sidebar-nav-link c-active" href="{{ route('dashboard.users.index') }}">
        <i class="c-sidebar-nav-icon cil-user"></i> @lang('menu.users')
    </a>
</li>
@endif
@if (auth()->user()->hasPermission('cupons_read'))
<li class="c-sidebar-nav-item mt-1">
    <a class="c-sidebar-nav-link c-active" href="{{ route('dashboard.cupons.index') }}">
        <i class="c-sidebar-nav-icon cil-user"></i> @lang('dashboard.cupons')
    </a>
</li>
@endif
@if (auth()->user()->hasPermission('parent_categorys_read'))
<li class="c-sidebar-nav-item mt-1">
    <a class="c-sidebar-nav-link c-active" href="{{ route('dashboard.parent_category.index') }}">
        <i class="c-sidebar-nav-icon cil-user"></i> @lang('menu.parent_category')
    </a>
</li>
@endif
@if (auth()->user()->hasPermission('sub_categories_read'))
<li class="c-sidebar-nav-item mt-1">
    <a class="c-sidebar-nav-link c-active" href="{{ route('dashboard.sub_categories.index') }}">
        <i class="c-sidebar-nav-icon cil-user"></i> @lang('menu.sup_category')
    </a>
</li>
@endif
@if (auth()->user()->hasPermission('markets_read'))
<li class="c-sidebar-nav-item mt-1">
    <a class="c-sidebar-nav-link c-active" href="{{ route('dashboard.markets.index') }}">
        <i class="c-sidebar-nav-icon cil-user"></i> @lang('dashboard.markets')
    </a>
</li>
@endif
@if (auth()->user()->hasPermission('carts_read'))
<li class="c-sidebar-nav-item mt-1">
    <a class="c-sidebar-nav-link c-active" href="{{ route('dashboard.carts.index') }}">
        <i class="c-sidebar-nav-icon cil-user"></i> @lang('dashboard.carts')
    </a>
</li>
@endif
@if (auth()->user()->hasPermission('cupons_read'))
<li class="c-sidebar-nav-item mt-1">
    <a class="c-sidebar-nav-link c-active" href="/about">
        <i class="c-sidebar-nav-icon cil-info"></i> @lang('menu.about')
    </a>
</li>
@endif