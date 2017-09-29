<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Spacial - Sign up</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- stylesheets -->
    <link rel="stylesheet" type="text/css" href="scss/bootstrap/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="dist/theme.min.css"/>

    <!-- javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
            integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
            crossorigin="anonymous"></script>
    <script src="dist/theme.min.js"></script>
</head>
<body class="signup-page">
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!--[if lt IE 8]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<div class="wrapper">
    <div class="header">
        <a href="index.html" class="logo">
            <img src="images/logo-alt-b.png"/>
        </a>
    </div>
    <form method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
        <div class="form-field">
            <input type="text" placeholder="Your name" name="name" value="{{ old('name') }}">
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-field">
            <input type="email" placeholder="Email" name="email" value="{{ old('email') }}">
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-field">
            <input type="password" placeholder="Password" name="password">
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-field">
            <input type="password" placeholder="Confirm Password" name="password_confirmation">
        </div>
        <div class="form-field">
            <label class="terms">
                <input type="checkbox" name="terms">
                I've read & agree with the <a href="#">Terms</a>.
            </label>
        </div>
        <div class="form-action">
            <input type="submit" class="btn-shadow btn-shadow-primary" value="Sign Up">
        </div>
        <div class="form-bottom">
            Already have an account?
            <a href="/login">Sign in</a>
        </div>
    </form>
</div>

</body>
</html>