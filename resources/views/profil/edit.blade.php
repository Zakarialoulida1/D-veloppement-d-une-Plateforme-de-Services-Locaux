<x-master title="create profil">
    @if ($errors->any())
        <x-alert type="warning">
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{ $error }}</li>
                @endforeach
            </ul>
        </x-alert>

    @endif

   
    <form class="m-2 mx-auto w-50" method="POST" action="{{ route('Updateservice',$profil->id) }}">
        @csrf
        @method('PUT')
        <h3 class="text-center">Post your service</h3>
        <div class="form-group">
            <label>Nom complete</label>
            <input type="text" name="name" id="" class="form-control" value="{{ old('name',$profil->name) }}">
            @error('name')
                <div class="text-danger">{{ $message }}</div>

            @enderror
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" id="" class="form-control" value="{{ old('email',$profil->email) }}">
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
   
        <div class="form-group">
            <label>Titre</label>
            <input type="text" name="titre" id="" class="form-control" value="{{ old('titre',$profil->titre) }}">
            @error('titre')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="bio" id="" rows="3">{{ old('bio',$profil->bio) }}</textarea>
            @error('bio')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Choose a categorie</label>
            <select class="form-select mt-2" name="category_id">
                @foreach ($categories as $categorie)
                <option value="{{ $categorie->id }}" {{ $categorie->id == $profil->category_id ? 'selected' : '' }}>{{ $categorie->name }}</option>

                @endforeach
            </select>
        </div>

        <div class="d-grid">
            <button type="submit" class="btn  mt-2 btn-block btn-primary">Submit</button>
        </div>
    </form>
</x-master>
