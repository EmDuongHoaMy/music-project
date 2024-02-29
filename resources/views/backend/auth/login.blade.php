<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>WEB DEMO | Login</title>

    <link href="backend/css/bootstrap.min.css" rel="stylesheet">
    <link href="backend/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="backend/css/animate.css" rel="stylesheet">
    <link href="backend/css/style.css" rel="stylesheet">
    <link href="backend/css/customize.css" rel="stylesheet">


</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">WD</h1>

            </div>
            <h3>Welcome</h3>
            
            <p>Login in. To see it in action.</p>
            <form method="POST" role="form" action="{{ route('auth.login') }}">
               @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" >
                </div>
                @if ($errors->has('email'))
                    <span class="error-mess">* {{ $errors->first('email') }}</span>
                @endif

                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" value="">
                </div>
                @if ($errors->has('password'))
                <span class="error-mess">* {{ $errors->first('password') }}</span>
                @endif

                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
                <a href="{{ route('auth.sign') }}" class="me-3" data-bs-toggle="modal" data-bs-target="#signModal">Sign In</a>
                <a href="#"><small>Forgot password?</small></a>

               
            </form>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
