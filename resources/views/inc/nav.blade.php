@once
    <nav class="navbar navbar-expand-lg ">
        <img class="logo" src="{{ asset('img/logo.png') }}" alt="">
        <button id="navbar-toggler" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse px-4" id="navbarNav">
            <div class=" d-flex justify-content-between w-100 align-items-center">
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
                <div>
                    @auth
                        <form action="{{ route('logout') }}" method="POST">
                            @method('delete')
                            @csrf
                            <button style="background-color: #90281f; padding:10px;" class="text-white rounded nav-link"> Se Déconnecter</button>
                        </form>
                    @endauth

                    @guest
                        <a class="bg-90281f rounded" href="{{ route('login.show') }}" style="background-color: #90281f; padding:10px;"><button type="button" class="btn bg-90281f text-white"> Se Connecter</button>
                        </a>
                    @endguest
                </div>
            </div>
        </div>
    </nav>






@endonce
