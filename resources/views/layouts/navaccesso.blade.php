<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand">Homex<span class="fg-primary">Students</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
            <ul class="navbar-nav ml-auto pt-3 pt-lg-0">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('chi_siamo') }}" class="nav-link">Chi Siamo</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('faq') }}" class="nav-link">FAQ</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('messaggistica', [Auth::user()->id]) }}" class="nav-link">Messaggi</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('profilo', [Auth::user()->id]) }}" class="nav-link">Profilo</a>
                </li>
                @auth
                <li><a href="" title="Esci dal sito" class="highlight" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                <form id="logout-form" action="{{ route('logout') }}" class="nav-link" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                @endauth
            </ul>
        </div>
    </div>
</nav>
