<div class="col-sm-4">
    <div class="card my-4 ">
        <img class="card-img-top" src="https://cdn.pixabay.com/photo/2020/03/16/17/32/lorem-4937753_640.jpg" alt="">
        <div class="card-body">
            <h4 class="card-title">{{ $profil->name }}</h4>
            <p class="card-text">{{Str::limit($profil->bio,50)}}</p>
     
                <a href="{{ route('profil.show', $profil) }}" class="stretched-link" role="button"></a>
 
        </div>
    </div>
</div>
