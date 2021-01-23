@if (Auth::check())
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    @include('layouts.menu.dashboard')
    {{-- @include('layouts.menu.users') --}}
</ul>
@else
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item has-treeview">
        <a href="{{ route('login') }}" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
                LOGIN
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
</ul>
@endif