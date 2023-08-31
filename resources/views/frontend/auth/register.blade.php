<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* Importing fonts from Google */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

        /* Reseting */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            margin-bottom: 15px;
        }

        body {
            background: #ecf0f3;
        }

        .wrapper {
            max-width: 350px;
            min-height: 500px;
            margin: 80px auto;
            padding: 40px 30px 30px 30px;
            background-color: #ecf0f3;
            border-radius: 15px;
            box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff;
        }

        .logo {
            width: 80px;
            margin: auto;
        }

        .logo img {
            width: 100%;
            height: 80px;
            object-fit: cover;
            border-radius: 50%;
            box-shadow: 0px 0px 3px #5f5f5f,
                0px 0px 0px 5px #ecf0f3,
                8px 8px 15px #a7aaa7,
                -8px -8px 15px #fff;
        }

        .wrapper .name {
            font-weight: 600;
            font-size: 1.0rem;
            letter-spacing: 1.3px;
            padding-left: 10px;
            color: #555;
        }

        .wrapper .form-field input {
            width: 100%;
            display: block;
            border: none;
            outline: none;
            font-size:small;
            background: none;
            color: #666;
            padding: 11px 15px 11px 10px;
            /* border: 1px solid red; */
        }

        .wrapper .form-field {
            padding-left: 10px;
            margin-bottom: 20px;
            border-radius: 20px;
            box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff;
        }

        .wrapper .form-field .fas {
            color: #555;
        }

        .wrapper .btn {
            box-shadow: none;
            width: 100%;
            height: 40px;
            background-color: #8dcdeb;
            color: #fff;
            border-radius: 25px;
            box-shadow: 3px 3px 3px #daebff,
                -3px -3px 3px #fff;
            letter-spacing: 1.3px;
        }

        .wrapper .btn:hover {
            background-color: #039BE5;
        }

        .wrapper a {
            text-decoration: none;
            font-size: 0.8rem;
            color: #03A9F4;
        }

        .wrapper a:hover {
            color: #039BE5;
        }
        .text-danger{
            color: red;
        }

        @media(max-width: 380px) {
            .wrapper {
                margin: 30px 20px;
                padding: 40px 15px 15px 15px;
            }
        }
    </style>
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
                <a href="#">Forget password?</a> or <a href="{{ route('get.started.login') }}">Sign in</a>
            </div>
        </div>
    </div>

</body>
</html>