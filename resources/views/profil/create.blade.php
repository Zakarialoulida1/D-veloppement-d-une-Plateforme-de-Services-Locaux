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

    {{-- @if ($errors->any())
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                @foreach ($errors->all() as $error)
                    Swal.fire({
                        icon: 'warning',
                        title: 'Error',
                        text: '{{ $error }}',
                        timer: 2000, // 2 seconds
                        showConfirmButton: false,
                    });
                @endforeach
            });
        </script>
    @endif --}}
    <form class="m-2 mx-auto w-50" method="POST" action="{{ route('store') }}">
        @csrf
        <h3 class="text-center">Post your service</h3>
        <div class="form-group">
            <label>Nom complete</label>
            <input type="text" name="name" id="" class="form-control" value="{{ old('name') }}">
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" id="" class="form-control" value="{{ old('email') }}">
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
   
        <div class="form-group">
            <label>Titre</label>
            <input type="text" name="titre" id="" class="form-control" value="{{ old('titre') }}">
            @error('titre')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="bio" id="" rows="3">{{ old('bio') }}</textarea>
            @error('bio')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Choose a categorie</label>
            <select class="form-select mt-2" name="category_id">
                @foreach ($categories as $categorie)
                    <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="d-grid">
            <button type="submit" class="btn  mt-2 btn-block btn-primary">Submit</button>
        </div>
    </form>
</x-master>
