<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up DLCS</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ URL::asset('fonts/material-icon/css/material-design-iconic-font.min.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        input[type="submit"]:disabled {
  background: #dddddd;
}
    </style>
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" action="{{action('App\Http\Controllers\UserController@registerUser')}}" id="signup-form" class="signup-form">
                        {{csrf_field()}}
                        <h2 class="form-title">Create account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Your Name" required/>
                        </div>
                        <div class="form-group">
                            <input type="username" class="form-input" name="username" id="username" placeholder="Your Username" required/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email" required/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Password" required/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Repeat your password" required/>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required/>
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                        @if ($registerFailed)
                        <div class="alert alert-danger" role="alert" id="register-alert">
                            Registeration Failed (Try another username and email)
                        </div>
                        @endif
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="/login" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        $(document).ready(function(){
            if($("#agree-term").is(':checked')) {
                $("#submit").prop('disabled', false);
            } else {
                $("#submit").prop('disabled', true);
            }
        });
        $('#agree-term').on('change', function() {
            if($("#agree-term").is(':checked')) {
                $("#submit").prop('disabled', false);
            } else {
                $("#submit").prop('disabled', true);
            }
            
        });
        $( "#email" ).click(function() {
            $( "#register-alert" ).fadeOut( 3000, function() {
                 // Animation complete.
            });
        });
        $( "#password" ).click(function() {
            $( "#register-alert" ).fadeOut( 3000, function() {
                 // Animation complete.
            });
        });
        $( "#name" ).click(function() {
            $( "#register-alert" ).fadeOut( 3000, function() {
                 // Animation complete.
            });
        });
        $( "#username" ).click(function() {
            $( "#register-alert" ).fadeOut( 3000, function() {
                 // Animation complete.
            });
        });
        $( "#re_password" ).click(function() {
            $( "#register-alert" ).fadeOut( 3000, function() {
                 // Animation complete.
            });
        });
           
    </script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>