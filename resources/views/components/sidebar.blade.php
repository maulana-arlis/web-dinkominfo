    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ route('home') }}" class="brand-link">
            <img src="{{ asset('assets/img/image.png') }}" alt="AdminLTE Logo" class="brand-image " style="opacity: .8">
            <span class="brand-text font-weight-light">Dashboard</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <li class="nav-item">
                        <a href="{{ route('dashboard') }}" class="nav-link {{ set_active('dashboard') }}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    @if (Auth::check() && Auth::user()->role === 'super_admin')
                        <li class="nav-item">
                            <a href="{{ route('users.index') }}" class="nav-link {{ set_active('users.index') }}">
                                <i class="nav-icon fas fa-users-cog"></i>
                                <p>Daftar user</p>
                            </a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a href="{{ route('profiles.index') }}" class="nav-link {{ set_active('profiles.index') }}">
                            <i class="nav-icon fas fa-id-card"></i>
                            <p>
                                Profil Pejabat
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('news.index') }}" class="nav-link {{ set_active('news.index') }}">
                            <i class="nav-icon fas fa-newspaper"></i>
                            <p>
                                Berita
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('contacts.index') }}" class="nav-link {{ set_active('contacts.index') }}">
                            <i class="nav-icon fas fa-address-book"></i>
                            <p>
                                Kontak
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
