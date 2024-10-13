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
            <a href="{{ route('admin.user.index') }}"
                class="nav_link {{ request()->routeIs('admin.user.index') ? 'active' : '' }}">
                <i class='bx bx-user nav_icon'></i>
                <span class="nav_name">Users</span>
            </a>
            <a href="{{ route('admin.client.index') }}" class="nav_link">
                <i class='bx bxs-group nav_icon'></i>
                <span class="nav_name {{ request()->routeIs('admin.client.index') ? 'active' : '' }}">Clients</span>
            </a>
            <a href="{{ route('admin.project.index') }}"
                class="nav_link {{ request()->routeIs('admin.project.index') ? 'active' : '' }}">
                <i class='bx bx-briefcase nav_icon'></i>
                <span class="nav_name">Projects</span>
            </a>
            <a href="{{ route('admin.task.index') }}"
                class="nav_link {{ request()->routeIs('admin.task.index') ? 'active' : '' }}">
                <i class='bx bx-task nav_icon'></i>
                <span class="nav_name">Tasks</span>
            </a>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

        <a href="#" class="nav_link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class='bx bx-log-out nav_icon'></i>
            <span class="nav_name">SignOut</span>
        </a>


</nav>
