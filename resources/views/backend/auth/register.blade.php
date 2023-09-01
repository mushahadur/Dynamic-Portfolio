<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('backend/assets/css/custom-auth.css') }}">

</head>
<body>
    <div class="container">

        <div class="wrapper">
            <div class="logo">
               <a href="{{ route('home') }}"> <img src="{{ asset('/') }}frontend/assets/images/logo.png" alt="" height="25%" width="25%"></a>
            </div>
            <div class="text-center mt-4 name">
                
            </div>
            <form class="pt-3" action="{{ route('store.register') }}" method="POST">
                @csrf
                <div class="form-field d-flex align-items-center">
                    <span class="far fa-user"></span>
                    <input type="text" name="name" id="Name" placeholder="name">
                </div>
                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror

                <div class="form-field d-flex align-items-center">
                    <span class="far fa-user"></span>
                    <input type="text" name="username" id="userName" placeholder="Username">
                </div>
                @error('username')
                    <span class="text-danger">{{$message}}</span>
                @enderror

                <div class="form-field d-flex align-items-center">
                    <span class="far fa-user"></span>
                    <input type="email" name="email" id="userName" placeholder="email">
                </div>
                @error('email')
                    <span class="text-danger">{{$message}}</span>
                @enderror

                <div class="form-field d-flex align-items-center">
                    <span class="fas fa-key"></span>
                    <input type="password" name="password" id="pwd" placeholder="Password">
                </div>
                @error('password')
                    <span class="text-danger">{{$message}}</span>
                @enderror

                <div class="form-field d-flex align-items-center">
                    <span class="fas fa-key"></span>
                    <input type="password" name="password_confirmation" id="pwd" placeholder="Confirmation Password">
                </div>
                @error('password_confirmation')
                    <span class="text-danger">{{$message}}</span>
                @enderror

                <button type="submit" class="btn mt-3">Register</button>
            </form>
            <div class="text-center fs-6">
                <a href="#">Forget password?</a> or <a href="{{ route('login') }}">Sign in</a>
            </div>
        </div>
    </div>

</body>
</html>