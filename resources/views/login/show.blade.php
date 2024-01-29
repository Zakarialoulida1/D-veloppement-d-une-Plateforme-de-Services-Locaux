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
            <h2>Sign In</h2>
            <x-input class="inputBox" type='text'  name="Username" ></x-input>
            <x-input class="inputBox" type='password'  name="Password" ></x-input>
            <div class="inputBox">
                <input type="submit" value="Login" id="btn">
            </div>
            <div class="group">
                <a href="#">Forget Password</a>
                <a href="#">Signup</a>
            </div>
        </div>

    </section>
</x-master>
