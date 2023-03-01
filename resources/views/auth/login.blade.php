<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>
    <div class="container">
        <div class="login__content">
            <img src="assets/img/project5.jpg" alt="login image" class="login__img">

            <form action="{{route('login')}}" class="login__form" method="POST">
                @csrf
                <div>
                    <h1 class="login__title">
                        <span>Welcome</span> Back!
                    </h1>
                    <p class="login__description">
                        Welcome! Azar Please login to continue.
                    </p>
                </div>

                <div>
                    <div class="login__inputs">
                        <div>
                            <label for="" class="login__label">Email</label>
                            <input name="email" type="email" placeholder="Enter your email address" required class="login__input">
                        </div>

                        <div>
                            <label for="" class="login__label">Password</label>

                            <div class="login__box">
                                <input name="password" type="password" placeholder="Enter your password" required class="login__input"
                                    id="input-pass">
                                <i class="ri-eye-off-line login__eye" id="input-icon"></i>
                            </div>
                        </div>
                    </div>

                    <div class="login__check">
                        <input type="checkbox" name="remember" class="login__check-input">
                        <label for="" class="login__check-label">Remember me</label>
                    </div>
                </div>

                <div>
                    <div class="login__buttons">
                        <button class="login__button">Log In</button>
                    </div>

                    <a href="#" class="login__forgot">Forgot Password?</a>
                </div>
            </form>
        </div>
    </div>
</body>
<script src="assets/js/login.js"></script>

</html>
