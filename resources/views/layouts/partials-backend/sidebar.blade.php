<div class="user-panel mt-3 mb-3 pb-3 d-flex align-items-center">
    <div class="image">
        <img src="{{ asset('img/dki-jakarta.png') }}" class="img-fluid">
    </div>
    <div class="info">
        <a href="{{ route('admin.dashboard') }}" class="d-block text-light">ASEAN HUB 2026</a>
    </div>
</div>

<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        @include('layouts.partials-backend.sidebar-admin')
        @include('layouts.partials-backend.sidebar-judges')
        @include('layouts.partials-backend.sidebar-participants')

        {{-- LOGOUT --}}
        <li class="nav-header mt-2">LOGOUT</li>
        <li class="nav-item">
            <a href="#" class="nav-link"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="nav-icon fa-solid fa-arrow-right-from-bracket"></i>
                <p>Logout</p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>
</nav>
