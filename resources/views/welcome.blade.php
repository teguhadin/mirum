<?php
$page = "Beranda";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Home</title>

        <!-- core CSS -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome Icons -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

        <link href="css/main.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       
    </head><!--/head-->

    <body class="homepage">
        <header id="header">

            <nav class="navbar navbar-inverse" role="banner">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html"></a>
                    </div>
                    <div class="collapse navbar-collapse navbar-right">
                        <ul class="nav navbar-nav">
                            @if (Route::has('login'))
                            <li 
                            <?php
                            if ($page == "Beranda") {
                                echo 'class="active"';
                            }
                            ?>
                                ><a href="/"><i class="fa fa-home fa-2x"></i></a></li>
                            <li 
                            <?php
                            if ($page == "Login") {
                                echo 'class="active"';
                            }
                            ?>
                                ><a href="{{ url('/login') }}">Login</a></li>
                            @endif
                        </ul>
                    </div>
                </div><!--/.container-->
            </nav><!--/nav-->

        </header><!--/header-->

        <section id="feature" >
            <div class="container">
                <div class="blog">
                    <div class="row">
                        <div class="col-md-9 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="600ms">

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div  class="tab-pane fade in active">
                                    <hr>
                                    <ul class="media-list main-list">
                                        <?php
                                        foreach ($welcome as $row) {
                                            ?>
                                            <li class="media" id="list_berita">
                                                <div class="blog-item wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                                                    <h2 class="left"><?php echo $row->title; ?></h2>
                                                    <p class="text-justify"><?php echo $row->short_description; ?><i class="fa fa-calendar-o date-post"> <?php echo $row->post_date; ?></i> </p>
                                                    <a class="btn btn-primary btn-xs readmore" href="<?php echo 'detail/' . $row->slug; ?>">Selngkapnya<i class="fa fa-angle-right"></i></a>
                                                    <hr>
                                                </div><!--/.blog-item-->
                                            </li>
                                            <?php
                                        }
                                        ?>

                                    </ul>
                                </div>
                            </div>
                        </div><!--/.col-md-8-->

                        <aside class="col-lg-3 col-md-3 col-sm-3 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="600ms">

                            
                        </aside>

                    </div><!--/.row-->
                </div> 
            </div><!--/.container-->
        </section><!--/#feature-->

        <footer id="footer" class="midnight-blue">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <p>&copy; 2016.</p>
                    </div>
                </div>
            </div> 
            <div class="col-md-11">
                <a class="scrollToTop" id="btngotop" href="">
                    <em class="fa fa-chevron-up fa-2x"></em>
                </a>
            </div>
        </footer><!--/#footer-->

        <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
        <script>
$(document).ready(function() {

    //Check to see if the window is top if not then display button
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $(".scrollToTop").fadeIn();
        } else {
            $(".scrollToTop").fadeOut();
        }
    });

    //Click event to scroll to top
    $(".scrollToTop").click(function() {
        $("html, body").animate({scrollTop: 0}, 800);
        return false;
    });
});
        </script>
    </body>
</html>