<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign In | Pelayanan Pajak</title>

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
                    <form id="sign_in" method="POST" action="{{ route('login') }}">
                        <div class="msg">Silahkan Login</div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">person</i>
                            </span>
                            <div class="form-line">
                                <input type="email" class="form-control" name="email" placeholder="Email" required autofocus>
                            </div>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">lock</i>
                            </span>
                            <div class="form-line">
                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-8 p-t-5">
                                <a href="{{ route('forgetpass') }}">Lupa Password?</a>
                            </div>
                            <div class="col-xs-4">
                                <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>
                            </div>
                        </div>
                        <div class="row m-t-15 m-b--20">
                            <div class="col-xs-12">
                                Belum memiliki akun? <a href="{{ route('registrasi') }}">Registrasi disini</a>
                            </div>
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
    <script src="{{ asset('js/pages/examples/sign-in.js') }}"></script>

</body>

</html>