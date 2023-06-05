<div class="sidebar-section">
    <ul class="nav nav-sidebar" data-nav-type="accordion">
        <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}"
                class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <i class="ph-house"></i>
                <span>{{ __('Home') }}</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.categories.index') }}"
                class="nav-link {{ request()->routeIs('admin.categories.index') ? 'active' : '' }}">
                <i class="ph-equalizer"></i>
                <span>{{ __('All Category') }}</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.brand.index') }}"
                class="nav-link {{ request()->routeIs('admin.brand.index') ? 'active' : '' }}">
                <i class="ph-circle-wavy"></i>
                <span>{{ __('Brand') }}</span>
            </a>
        </li>
        <li class="nav-item nav-item-submenu">
            <a href="#" class="nav-link">
                <i class="ph-keyhole"></i>
                <span>Authentication</span>
            </a>
            <ul class="nav-group-sub collapse">
                <li class="nav-item">
                    <a href="{{ route('admin.role.index') }}" class="nav-link {{ request()->routeIs('admin.role.index') ? 'active' : '' }}"">
                        <i class="ph-person"></i>
                        Roles</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.permission.index') }}" class="nav-link {{ request()->routeIs('admin.permission.index') ? 'active' : '' }}"">
                        <i class="ph-check-square-offset"></i>
                        Permission</a>
                </li>
            </ul>
        </li>
    </ul>
</div>
