<nav class="nav">
    <div>
        <span class="nav_logo">
            <i class='bx bx-layer nav_logo-icon'></i>
            <span class="items-center nav_logo-name">CRM</span>
        </span>
        <div>
            <a href="{{ route('admin.dashboard') }}"
                class="nav_link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <i class='bx bx-grid-alt nav_icon'></i>
                <span class="nav_name">Dashboard</span>
            </a>
            <a href="{{ route('admin.user.users') }}"
                class="nav_link {{ request()->routeIs('admin.user.users') ? 'active' : '' }}">
                <i class='bx bx-user nav_icon'></i>
                <span class="nav_name">Users</span>
            </a>
            <a href="#" class="nav_link">
                <i class='bx bxs-group nav_icon'></i>
                <span class="nav_name">Clients</span>
            </a>
            <a href="#"
                class="nav_link">
                <i class='bx bx-briefcase nav_icon'></i>
                <span class="nav_name">Projects</span>
            </a>
            <a href="#" class="nav_link">
                <i class='bx bx-task nav_icon'></i>
                <span class="nav_name">Tasks</span>
            </a>
        </div>
        <a href="#" class="nav_link">
            <i class='bx bx-log-out nav_icon'></i>
            <span class="nav_name">SignOut</span>
        </a>

</nav>
