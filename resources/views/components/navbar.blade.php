<nav class="navbar navbar-expand-lg">
    <div class="container d-flex justify-content-between align-items-center">
        <a class="navbar-brand fw-bold text-white" href="{{ route('dashboard') }}">🌾 PanenKu</a>
        <div class="d-flex gap-2">
            <a href="{{ route('dashboard') }}" class="nav-link btn btn-sm btn-outline-light">Dashboard</a>
            <a href="{{ route('pengelolaan') }}" class="nav-link btn btn-sm btn-outline-light">Pengelolaan</a>
            <a href="{{ route('profile') }}" class="nav-link btn btn-sm btn-outline-light">Profil</a>
            <a href="{{ route('logout') }}" class="nav-link btn btn-sm btn-outline-light">Logout</a>
        </div>
    </div>
</nav>
