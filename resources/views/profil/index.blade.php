<x-master title="all profiles">
    <h3 class="text-center">SERVICES</h3>
     <div class="row m-2">
    @foreach ($profiles as $profil)
        <x-profilcard  :profil='$profil' />
    @endforeach
    </div>

</x-master>

