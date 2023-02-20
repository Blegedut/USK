<ul class="menu">
    <li class="sidebar-title">Menu</li>

    <li class="sidebar-item">
        <a href="{{ route('user.dashboard') }}" class="sidebar-link">
            <i class="bi bi-grid-fill"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="sidebar-item  has-sub">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-stack"></i>
            <span>Peminjaman Buku</span>
        </a>
        <ul class="submenu ">
            <li class="submenu-item ">
                <a href="{{ Route('user.form_peminjaman') }}">Formulir Peminjaman Buku</a>
            </li>
            <li class="submenu-item ">
                <a href="{{ Route('user.riwayat_peminjaman') }}">Riwayat Peminjaman Buku</a>
            </li>
        </ul>
    </li>
    <li class="sidebar-item  has-sub">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-stack"></i>
            <span>Pengembalian Buku</span>
        </a>
        <ul class="submenu ">
            <li class="submenu-item ">
                <a href="{{ Route('user.form_pengembalian') }}">Formulir Pengembalian Buku</a>
            </li>
            <li class="submenu-item ">
                <a href="{{ Route('user.riwayat_pengembalian') }}">Riwayat Pengembalian Buku</a>
            </li>
        </ul>
    </li>
    <li class="sidebar-item">
        <a href="{{ Route('user.profile') }}" class="sidebar-link">
            <i class="bi bi-grid-fill"></i>
            <span>Profile</span>
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
