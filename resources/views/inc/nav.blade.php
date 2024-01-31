@once
    <nav class="navbar navbar-expand-lg ">
        <img class="logo" src="{{ asset('img/logo.png') }}" alt="">
        <button id="navbar-toggler" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse px-4" id="navbarNav">
            <div class=" d-flex justify-content-between">
                <ul class="navbar-nav ">
                    {{-- <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home.index') }}">ACCEUIL <span class="sr-only">(current)</span></a>

                </li>
          
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('setting.index') }}">Mes informations</a>
                </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profil.index') }}">SERVICES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('create') }}">Ajouter profil</a>
                    </li>
                </ul>
                <form action="{{ route('logout') }}">
                    @method('delete')
                    @csrf
                    <button class="nav-link"> Se Déconnecter</button>
                </form>
            </div>
        </div>
    </nav>






@endonce
