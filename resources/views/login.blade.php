<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login DLCS</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ URL::asset('fonts/material-icon/css/material-design-iconic-font.min.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <form method="POST" action="{{action('App\Http\Controllers\UserController@loginUser')}}" id="signup-form" class="signup-form">
                        {{csrf_field()}}
                        <h2 class="form-title">Login</h2>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email" required/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Password" required/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign in"/>
                        </div>
                        @if ($loginFailed)
                        <div class="alert alert-danger" role="alert" id="login-alert">
                            Login Failed
                        </div>
                        @endif
                    </form>
                    <p class="loginhere">
                        Don't have an account? <a href="/register" class="loginhere-link">Register here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        $( "#email" ).click(function() {
            $( "#login-alert" ).fadeOut( 3000, function() {
                 // Animation complete.
            });
        });
        $( "#password" ).click(function() {
            $( "#login-alert" ).fadeOut( 3000, function() {
                 // Animation complete.
            });
        });
    </script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>