<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a href="../public" class="navbar-brand">Homex<span class="fg-primary">Students</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
            <ul class="navbar-nav ml-auto pt-3 pt-lg-0">
                <li class="nav-item active">
                <li class="nav-item">
                <li>  <a href="{{ route('faq') }}" class="nav-link">Gestisci FAQ</a></li>
                <li>   <a href="{{ route('inseriscifaq') }}" class="nav-link">Inserisci FAQ</a></li>
                <li><a href="{{ route('statistiche') }}" class="nav-link">Statistiche</a></li>
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
