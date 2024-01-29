<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
   
    <title>Animated Glassmorphism Login Page | @codingstella</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
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
            <h2>Sign Up</h2>
            <div class="inputBox">
                <input type="text" placeholder="Username">
            </div>
            <div class="inputBox">
                <input type="text" placeholder="Lastname">
            </div>
            <div class="inputBox">
                <input type="password" placeholder="Password">
            </div>
            <div class="inputBox">
                <input type="password" placeholder="Password_confirmaton">
            </div>
            <div class="inputBox">
                <input type="password" placeholder="PhoneNumber">
            </div>
            <div class="inputBox">
                <input type="submit" value="Login" id="btn">
            </div>
            <div class="group">
                <a href="#">Forget Password</a>
                <a href="#">Signup</a>
            </div>
        </div>

    </section>
</body>

</html>
