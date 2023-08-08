<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
 with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="/dashboard" class="nav-link {{ $title == 'Dashboard' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                        {{-- <i class="right fas fa-angle-left"></i> --}}
                    </p>
                </a>
            </li>
            @can('admin')
                <li class="nav-item">
                    <a href="/kader" class="nav-link {{ $title == 'Kader' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Kader
                        </p>
                    </a>
                </li>
            @endcan
            <li class="nav-item">
                <a href="/peserta" class="nav-link {{ $title == 'Peserta' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Peserta
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/screening" class="nav-link {{ $title == 'Screenings' ? 'active' : '' }}">

                    <i class="nav-icon fas fa-table"></i>
                    <p>
                        Screenings
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/category" class="nav-link {{ $title == 'Categories' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Categories
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/articles" class="nav-link {{ $title == 'Articles' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Articles
                        {{-- <span class="right badge badge-danger">New</span> --}}
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/featured-articles" class="nav-link {{ $title == 'Featured Articles' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Featured Articles
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="/gallery" class="nav-link {{ $title == 'Gallery' ? 'active' : '' }}">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                        Gallery
                    </p>
                </a>
            </li>
            @can('admin')
                <li class="nav-item">
                    <a href="/settings" class="nav-link {{ $title == 'Settings' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>
                            Settings
                        </p>
                    </a>
                </li>
            @endcan
            <li class="nav-item">
                <a href="/logout" class="nav-link">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <p>
                        Logout
                    </p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
