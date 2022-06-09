<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        @can('isLocatore')
        <a href="{{ route('home_locatore') }}" class="navbar-brand">Homex<span class="fg-primary">Students</span></a>
        @endcan
        @can('isLocatario')
        <a href="{{ route('home_locatario') }}" class="navbar-brand">Homex<span class="fg-primary">Students</span></a>
        @endcan
        @can('isAdmin')
        <a href="{{ route('home_admin') }}" class="navbar-brand">Homex<span class="fg-primary">Students</span></a>
        @endcan
        @guest
        <a href="{{ route('home') }}" class="navbar-brand">Homex<span class="fg-primary">Students</span></a>
        @endguest

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
            <ul class="navbar-nav ml-auto pt-3 pt-lg-0">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('catalogo') }}" class="nav-link">Catalogo</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('chi_siamo') }}" class="nav-link">Chi Siamo</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('faq') }}" class="nav-link">FAQ</a>
                </li>
                @guest
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('register') }}" class="nav-link">Registrazione</a>
                </li>
                @endguest
                @auth
                @can('isLocatore')
                <li class="nav-item">
                    <a href="{{ route('home_locatore') }}" class="nav-link">Home Locatore</a>
                </li>
                @endcan
                @can('isLocatario')
                <li class="nav-item">
                    <a href="{{ route('home_locatario') }}" class="nav-link">Home Locatario</a>
                </li>
                @endcan
                @can('isAdmin')
                <li class="nav-item">
                    <a href="{{ route('home_admin') }}" class="nav-link">Home Admin</a>
                </li>
                @endcan
                <li><a href="" title="Esci dal sito" class="highlight" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                <form id="logout-form" action="{{ route('logout') }}" class="nav-link" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                @endauth
            </ul>
        </div>
    </div>
</nav>
