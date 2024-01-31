<x-master title="Se connecter">
        <section>
        <div class="leaves">
            <div class="set">
                <div><img src="{{ asset('img/leaf_01.png') }}"></div>
                <div><img src="{{ asset('img/leaf_02.png') }}"></div>
                <div><img src="{{ asset('img/leaf_03.png') }}"></div>
                <div><img src="{{ asset('img/leaf_04.png') }}"></div>
				<div><img src="{{ asset('img/leaf_01.png') }}"></div>
                <div><img src="{{ asset('img/leaf_02.png') }}"></div>
                <div><img src="{{ asset('img/leaf_03.png') }}"></div>
                <div><img src="{{ asset('img/leaf_04.png') }}"></div>
            </div>
        </div>
        <img src="{{ asset('img/bg.jpg') }}" class="bg">
        <img src="{{ asset('img/girl.png') }}" class="girl">
        <img src="{{ asset('img/trees.png') }}" class="trees">
        <div class="login">
            <form method="POST"  action="{{route('login')}}">
                @csrf
            <h2>Sign In</h2>
            {{-- <x-input  type='text'  name="Username" ></x-input>
            <x-input  type='password'  name="Password" ></x-input> --}}

            <div class="inputBox">
            
                <input type="text" placeholder="Enter EMAIL" name="email" id="" class="form-control" value="{{ old('email') }}">
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="inputBox">
              
                <input type="password" placeholder="Enter Password" class="form-control" name="password" value="{{ old('password') }}">
                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div >
                <input type="submit" value="Login" id="btn">
            </div>
            <div class="group">
                <a >Create an acoount</a>
                <a href="{{ route('register') }}">Signup</a>
            </div>
            </form>
        </div>

    </section>
</x-master>
