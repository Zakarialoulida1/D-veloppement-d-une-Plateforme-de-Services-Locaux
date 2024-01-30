<x-master title="Register">
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
        <form method="POST" action="{{ route('registerUser') }}">
            @csrf
            <div class="login">
                <h2>Sign Up</h2>
                <div class="inputBox">
                    <input type="text" name="name" placeholder="Username Lastname">
                </div>

                <div class="inputBox">
                    <input type="text" name="email" placeholder="Email">
                </div>
                <div class="inputBox">
                    <input type="password" name="password" placeholder="Password">
                </div>
                <div class="inputBox">
                    <input type="password" name="password_confirmation" placeholder="Password_confirmaton">
                </div>

                <div class="d-grid">
                    <input type="submit" value="Login" id="btn">
                </div>
                <div class="group">
                    <p>I have already an Account?</p>
                    <a href="{{ route('login.show') }}">Signup</a>
                </div>
            </div>
        </form>
    </section>
</x-master>
