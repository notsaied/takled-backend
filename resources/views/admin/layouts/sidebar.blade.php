<!-- ---------------------------------- -->
<!-- Start Vertical Layout Sidebar -->
<!-- ---------------------------------- -->
<div class="brand-logo text-center mt-3">
    <a href="{{ route('dash.home') }}" class="text-nowrap logo-img">
        <img style="
    width: 60px;
    height: 60px;
" src="{{ URL::asset('build/images/logos/logo.png') }}"
            class="dark-logo" alt="Logo-Dark" />
        <img style="
    width: 60px;
    height: 60px;
" src="{{ URL::asset('build/images/logos/logo.png') }}"
            class="light-logo" alt="Logo-light" />
    </a>
    <a href="javascript:void(0)" class="sidebartoggler ms-auto text-decoration-none fs-5 d-block d-xl-none">
        <i class="ti ti-x"></i>
    </a>
</div>

<nav class="sidebar-nav scroll-sidebar" data-simplebar>
    <ul id="sidebarnav">
        <!-- ---------------------------------- -->
        <!-- Home -->
        <!-- ---------------------------------- -->
        <li class="nav-small-cap">
            <i class="ti ti-home nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Home</span>
        </li>
        <!-- ---------------------------------- -->
        <!-- Dashboard -->
        <!-- ---------------------------------- -->
        <li class="sidebar-item">
            <a class="sidebar-link {{ request()->is('*home*') ? 'active' : '' }}" href="{{ route('admin.home') }}"
                aria-expanded="false">
                <span>
                    <i class="ti ti-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
            </a>
        </li>

        <li class="nav-small-cap">
            <i class="ti ti-briefcase nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Management</span>
        </li>


        <li class="sidebar-item">
            <a class="sidebar-link {{ request()->is('*barbers*') ? 'active' : '' }}"
                href="{{ route('admin.barbers.index') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-receipt"></i>
                </span>
                <span class="hide-menu">Barbers</span>
            </a>
        </li>


        <li class="sidebar-item">
            <a class="sidebar-link {{ request()->is('*services*') ? 'active' : '' }}"
                href="{{ route('admin.services.index') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-receipt"></i>
                </span>
                <span class="hide-menu">Services</span>
            </a>
        </li>


        <li class="sidebar-item">
            <a class="sidebar-link {{ request()->is('*feedbacks*') ? 'active' : '' }}"
                href="{{ route('admin.feedbacks.index') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-receipt"></i>
                </span>
                <span class="hide-menu">Feedbacks</span>
            </a>
        </li>

        <li class="sidebar-item">
            <a class="sidebar-link {{ request()->is('*bookings*') ? 'active' : '' }}"
                href="{{ route('admin.bookings.index') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-receipt"></i>
                </span>
                <span class="hide-menu">Bookings</span>
            </a>
        </li>







        <li class="nav-small-cap">
            <i class="ti ti-settings nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Settings</span>
        </li>


        <li class="sidebar-item">
            <a class="sidebar-link {{ request()->is('*settings') ? 'active' : '' }}"
                href="{{ route('admin.settings.index') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-settings"></i>
                </span>
                <span class="hide-menu">Settings</span>
            </a>
        </li>

        <li class="sidebar-item">
            <a class="sidebar-link {{ request()->is('*configs') ? 'active' : '' }}"
                href="{{ route('admin.configs.index') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-settings"></i>
                </span>
                <span class="hide-menu">Configuration</span>
            </a>
        </li>
    </ul>
</nav>


<div class="fixed-profile p-3 mx-4 mb-2 bg-secondary-subtle rounded mt-3">
    <div class="hstack gap-3">
        <div class="john-img">
            <img src="{{ URL::asset('build/images/profile/user-1.jpg') }}" class="rounded-circle" width="40"
                height="40" alt="modernize-img" />
        </div>
        <div class="john-title">
            <h6 class="mb-0 fs-4 fw-semibold">{{ Auth::user()->name }}</h6>
        </div>
        <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button class="border-0 bg-transparent text-primary ms-auto" tabindex="0" type="submit" aria-label="logout"
                data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="logout">
                <i class="ti ti-power fs-6"></i>
            </button>

        </form>
    </div>
</div>

<!-- ---------------------------------- -->
<!-- Start Vertical Layout Sidebar -->
<!-- ---------------------------------- -->
