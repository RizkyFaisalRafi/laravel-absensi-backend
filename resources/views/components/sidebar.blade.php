<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Menu</li>

            <li class="nav-item">
                <a href="#" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span>
                </a>
            </li>

            {{-- Sidebar Users --}}
            <li class="nav-item">
                <a href="{{ route('users.index') }}" class="nav-link"><i class="fas fa-fire"></i><span>Users</span>
                </a>
            </li>

            {{-- Sidebar Company --}}
            <li class="nav-item">
                <a href="{{ route('companies.show', 1) }}" class="nav-link"><i
                        class="fas fa-fire"></i><span>Company</span>
                </a>
            </li>

            {{-- Sidebar Attendances --}}
            <li class="nav-item">
                <a href="{{ route('attendances.index') }}" class="nav-link"><i
                        class="fas fa-fire"></i><span>Attendance</span>
                </a>
            </li>


        </ul>
    </aside>
</div>
