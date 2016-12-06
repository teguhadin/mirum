<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!-- CSRF Token -->
        <!--<meta name="csrf-token" content="{{ csrf_token() }}">-->
        <title>Admin</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.4 -->
        <link href="{{URL::asset('/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Font Awesome Icons -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="{{URL::asset('dist/css/AdminLTE.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="{{URL::asset('/dist/css/skins/_all-skins.min.css')}}">
        @yield('css')

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue sidebar-mini">
        <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
                <a href="index2.html" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>A</b></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Admin</b></span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">

                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">MAIN NAVIGATION</li>
                        <li class="active">
                            <a href="{{URL::to('dashboard')}}">
                                <i class="fa fa-bullhorn"></i> <span>Posts/Article</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{URL::to('category')}}">
                                <i class="fa fa-list"></i> <span>Category</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{URL::to('change_pasword')}}">
                                <i class="fa fa-envelope"></i> <span>Change Password</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/logout') }}"  onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out"></i> <span>Log Out</span>
                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">

                <!-- Main content -->
                @yield('content')
            </div><!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 2.2.0
                </div>
                <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
            </footer>

            <!-- Control Sidebar -->
        </div><!-- ./wrapper -->

        <!-- jQuery 2.1.4 -->
        <script src="{{URL::asset('plugins/jQuery/jQuery-2.1.4.min.js')}}" type="text/javascript"></script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src="{{URL::asset('bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="{{URL::asset('dist/js/app.min.js')}}" type="text/javascript"></script>
        <script>
                                window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token(),]); ?>
        </script>
        @yield('js')
    </body>
</html>
