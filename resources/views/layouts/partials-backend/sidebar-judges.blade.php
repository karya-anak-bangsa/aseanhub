@if (Auth::guard('judges')->check())
    {{-- 1. DASHBOARD --}}
    <li class="nav-item">
        <a href="{{ route('judges.dashboard') }}" class="nav-link @yield('nav-dashboard')">
            <i class="nav-icon fa-solid fa-building-columns"></i>
            <p>Main Dashboard</p>
        </a>
    </li>
@endif
