<x-master title="all profiles">
    <h3 class="text-center">profiles</h3>
     <div class="row m-2">
    @foreach ($profiles as $profil)
        <x-profilcard  :profil='$profil' />
    @endforeach
    </div>
    {{ $profiles->links() }}
</x-master>

{{-- <table class='table'>
   <tr>
    <th>id</th>
    <th>name</th>
    <th>email</th>
    <th>bio</th>
    <th>Actions</th>
   </tr>
   
   
<tr>
    <td>{{$profil->id}}</td>
    <td>{{$profil->name}}</td>
    <td>{{$profil->email}}</td>
    <td>{{Str::limit($profil->bio,50)}}</td> 
    <td><a href="{{route('profil.show',$profil->id)}}" class="btn btn-primary"  role="button" >Afficher plus</a></td>
    {{-- the third param in str:: limit defin (... orother) ***vous pouvez ecrire autre que 3 points ' 
</tr> --}}
