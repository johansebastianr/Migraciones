<ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }} ">
            <svg class="nav-icon">
                <use xlink:href="{{ asset('icons/logo2') }}"></use>
            </svg>
            {{ __('Inicio') }}
        </a>
    </li>


    <li class="nav-item">
        <a class="nav-link {{ request()->is('users*') ? 'active' : ''}}" href="{{ route('users.index') }}">
            <svg class="nav-icon">
                <use xlink:href="{{ asset('icons/logo2') }}"></use>
            </svg>
            {{ __('Usuarios') }}
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ request()->is('roles*') ? 'active' : ''}}" href="{{ route('roles.index') }}">
            <svg class="nav-icon">
                <use xlink:href="{{ asset('icons/logo2') }}"></use>
            </svg>
            {{ __('Roles') }}
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ request()->is('permissions*') ? 'active' : ''}}" href="{{ route('permissions.index') }}">
            <svg class="nav-icon">
                <use xlink:href="{{ asset('icons/logo2') }}"></use>
            </svg>
            {{ __('Permisos') }}
        </a>
    </li>

</ul>
