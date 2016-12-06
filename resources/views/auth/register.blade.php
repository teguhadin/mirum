<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE 2 | Registration Page</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.4 -->
        <link href="{{URL::asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Font Awesome Icons -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="{{URL::asset('dist/css/AdminLTE.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- iCheck -->
        <link href="{{URL::asset('plugins/iCheck/square/blue.css')}}" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="register-page">
        <div class="register-box">
            <div class="register-logo">
                <b>Admin</b>
            </div>

            <div class="register-box-body">
                <p class="login-box-msg">Register a new membership</p>
                <form method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}
                    <div class="form-group has-feedback {{ $errors->has('name') ? ' has-error' : '' }}">
                        <input id="name" type="text" class="form-control" placeholder="Full name" name="name" value="{{ old('name') }}" required autofocus/>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group has-feedback">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Email" />
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
                        <input id="password" type="password" class="form-control" name="password" required placeholder="Password" />
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group has-feedback">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Retype password" />
                        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
                            <div class="checkbox icheck">
                                <label>
                                    <input type="checkbox"> I agree to the <a href="#">terms</a>
                                </label>
                            </div>
                        </div><!-- /.col -->
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                        </div><!-- /.col -->
                    </div>
                </form>

                <div class="social-auth-links text-center">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using Facebook</a>
                    <a href="#" class="btn btn-block btn-social btn-google-plus btn-flat"><i class="fa fa-google-plus"></i> Sign up using Google+</a>
                </div>

                <a href="{{url('/')}}" class="text-center">I already have a membership</a>
            </div><!-- /.form-box -->
        </div><!-- /.register-box -->

        <!-- jQuery 2.1.4 -->
        <script src="{{URL::asset('plugins/jQuery/jQuery-2.1.4.min.js')}}" type="text/javascript"></script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src="{{URL::asset('bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="{{URL::asset('plugins/iCheck/icheck.min.js')}}" type="text/javascript"></script>
        <script>
$(function() {
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
    });
});
        </script>
    </body>
</html>
