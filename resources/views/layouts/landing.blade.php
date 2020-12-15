{{-- <!DOCTYPE html> --}}
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ArsiTech</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>

    <body class="hold-transition lockscreen">
        <!-- Automatic element centering -->
        <div class="lockscreen-wrapper">
            <div class="lockscreen-logo">
                <a href="../../index2.html"><b>ArsiTech</b></a>
            </div>
            <!-- User name -->
            {{-- <div class="lockscreen-name">John Doe</div> --}}
            <x-success-msg />
            @if (Route::has('login'))
            @auth
            <center>
                @if (Auth::user()->role == 'admin')
                <a class="btn btn-primary" href="{{ route('admin.dashboard') }}">Dashboard</a>
                @elseif (Auth::user()->role == 'arsitek')
                <a class="btn btn-primary" href="{{ route('arsitek.dashboard') }}">Dashboard</a>
                @else
                <a class="btn btn-primary" href="{{ route('pelanggan.dashboard') }}">Dashboard</a>
                @endif
            </center>
            @else
            <div class="container">
                
                <div class="row">
                    {{-- <center> --}}
                    <div class="col-6">
                        <a class="btn btn-primary btn-block" style="margin: 5px;" href="{{ route('login') }}">Login</a>
                    </div>
                    <div class="col-6">
                        <a class="btn btn-primary btn-block" style="margin: 5px;"
                            href="{{ route('register') }}">Register</a>
                    </div>
                    {{-- </center> --}}
                </div>
            </div>

            @endif
            @endif



            <!-- /.lockscreen-item -->
            <div class="help-block text-center">
                {{-- Enter your password to retrieve your session --}}
            </div>
            <div class="text-center">
                {{-- <a href="login.html">Or sign in as a different user</a> --}}
            </div>
            <div class="lockscreen-footer text-center">
                Copyright &copy; 2014-2019 <b><a href="http://adminlte.io" class="text-black">AdminLTE.io</a></b><br>
                All rights reserved
            </div>
        </div>
        <!-- /.center -->

        <!-- jQuery -->
        <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    </body>

</html>
