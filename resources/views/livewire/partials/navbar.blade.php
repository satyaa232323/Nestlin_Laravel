<nav>
    <div class="logo">
        <img src="assets/logo.svg" alt="Logo" />
    </div>
    <div class="navbar">
        <ul class="nav-links">
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/menu">Menu</a></li>
        </ul>
        <div class="nav-buttons">
            <form action="{{route('filament.admin.auth.login')}}" method="GET">
                <button id="btLogin" type="submit">Masuk</button>
            </form>
            <form action="" method="GET">
                <button id="create" type="submit">Daftar</button>
            </form>
        </div>
    </div>
    <div class="menu-icon" id="nav-toggle">
        <i class='bx bx-menu'></i>name('home');
    </div>
</nav
