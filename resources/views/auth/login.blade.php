


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('/asset/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('/asset/css/style.css')}}">
</head>
<body>

    <div class="main">

        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="{{asset('/asset/images/signin-image.jpg')}}" alt="sing up image"></figure>
                        <a href="{{ route('register') }}" class="signup-image-link">Create an account</a>
                    </div>
        
                    <div class="signin-form">
                        <h2 class="form-title">Sign In</h2>

                        <form method="POST" action="{{ route('login') }}" class="register-form" id="login-form">
                            @csrf


                            <div class="form-group">

                                <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="email" name="email" id="email" placeholder="Rmail"/>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember_me" id="remember_me" class="agree-term" />
                                <label for="remember_me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>

                            <div class="form-group form-button">
                             @if (Route::has('password.request'))
                                <input type="submit" name="signin" id="signin" class="submitform-" value="Log in"
                                />
                               
                                

                                <a href="{{ route('password.request') }}" class="forgot-password-link">Forgot Password?</a>

                             @endif
                            </div>



                          
                            
                        </form>
                       
                    </div>
                </div>
            </div>
        </section>

      

        
        

    </div>

    <!-- JS -->
    <script src="{{asset('/asset/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/asset/js/main.js')}}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>



 
