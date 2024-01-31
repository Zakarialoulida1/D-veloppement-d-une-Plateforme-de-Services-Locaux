<x-master title="all profiles">
    
     <div class="row m-2">
    @foreach ($profiles as $profil)
        <x-profilcard  :profil='$profil' />
    @endforeach
    </div>
    <div>{{ $profiles->links() }}
        </div>
</x-master>

