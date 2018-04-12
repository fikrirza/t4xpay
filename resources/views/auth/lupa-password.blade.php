<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Forgot Password | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/node-waves/waves.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/animate-css/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body class="login-page">
    <div class="login-box">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="logo">    
                <img src="{{ asset('images/logo-cartenz.jpeg') }}" alt="cartenz">
                <img src="{{ asset('images/kemenkeu.png') }}" alt="kemenkeu">
                <a href="javascript:void(0);">Rasakan pengalaman pengelolaan pajak yang terintegrasi, lebih cepat, lebih mudah dan aman</a>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">        
            <div class="card">
                <div class="body">
                    <form id="forgot_password" action="{{ route('forgetpass-sukses') }}">
                        <div class="msg">
                            Kami akan mengirimkan pesan penggantian password ke email pengguna Anda.
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">email</i>
                            </span>
                            <div class="form-line">
                                <input type="email" class="form-control" name="email" placeholder="Email" required autofocus>
                            </div>
                        </div>

                        <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">KIRIM</button>

                        <div class="row m-t-20 m-b--5 align-center">
                            <a href="{{ route('login') }}">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('plugins/node-waves/waves.js') }}"></script>
    <script src="{{ asset('plugins/jquery-validation/jquery.validate.js') }}"></script>
    <script src="{{ asset('js/admin.js') }}"></script>
    <script src="{{ asset('js/pages/examples/forgot-password.js') }}"></script>
</body>

</html>