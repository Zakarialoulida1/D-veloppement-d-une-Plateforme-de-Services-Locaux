@once
    <nav class="navbar navbar-expand-lg px-20">
        <a class="navbar-brand" href="#">social</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home.index') }}">ACCEUIL <span class="sr-only">(current)</span></a>

                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('login.show') }}">Se connecter</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('setting.index') }}">Mes informations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profil.index') }}">Tous les profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('create') }}">Ajouter profil</a>
                </li>
            </ul>
        </div>
    </nav>






@endonce
