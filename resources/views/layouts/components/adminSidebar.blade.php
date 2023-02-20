<ul class="menu">
    <li class="sidebar-title">Menu</li>

    <li class="sidebar-item">
        <a href="{{ route('admin.dashboard') }}" class="sidebar-link">
            <i class="bi bi-grid-fill"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a href="{{ route('penerbit.index') }}" class="sidebar-link">
            <i class="bi bi-grid-fill"></i>
            <span>Penerbit</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a href="{{ route('admin.buku') }}" class="sidebar-link">
            <i class="bi bi-grid-fill"></i>
            <span>Kategori</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a href="{{ route('admin.buku') }}" class="sidebar-link">
            <i class="bi bi-grid-fill"></i>
            <span>Buku</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a href="{{ route('admin.anggota') }}" class="sidebar-link">
            <i class="bi bi-grid-fill"></i>
            <span>Anggota</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a href="{{ route('admin.index') }}" class="sidebar-link">
            <i class="bi bi-grid-fill"></i>
            <span>Admin</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a href="{{ Route('admin.profile') }}" class="sidebar-link">
            <i class="bi bi-grid-fill"></i>
            <span>Profile</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a href="{{ route('admin.laporan') }}" class="sidebar-link">
            <i class="bi bi-grid-fill"></i>
            <span>Laporan</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </li>
</ul>
