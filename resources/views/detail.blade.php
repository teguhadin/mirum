<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Detail</title>

        <!-- core CSS -->
        <link href="{{URL::to('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- Font Awesome Icons -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

        <link href="{{URL::to('css/main.css')}}" rel="stylesheet">

        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       
    </head><!--/head-->

    <body>

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
                    </div>
                </div><!--/.container-->
            </nav><!--/nav-->

        </header><!--/header-->

        <section id="blog" class="container">
            <div class="blog">
                <div class="row">
                    <div class="col-md-8"> <?php
                        foreach ($detail as $row){
                            ?>
                        <div class="blog-item wow fadeInLeftBig" data-wow-duration='1000ms' data-wow-delay="600ms">
                       
                            <h2><?php echo $row->title;?></h2>
                            <img class="img-responsive img-blog" src="<?php echo $row->thumbnail;?>" width="100%" alt="" />
                            <div class='entry-meta'>
                            <i class='fa fa-calendar'></i><time datetime="<?php echo $row->post_date;?>"> <?php echo $row->post_date;?></time>
                            </div>
                            <p class='justify'><?php echo $row->content;?></p>
                        </div><!--/.blog-item-->
                        <?php
                        }?>
                    </div><!--/.col-md-8-->   

                </div><!--/.row-->
            </div><!--/.blog-->
        </section><!--/#blog-->

        <footer id="footer" class="midnight-blue">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <p>&copy; 2016. BAN-PT.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-11">
                <a class="scrollToTop" id="btngotop" href="">
                    <em class="fa fa-chevron-up fa-2x"></em>
                </a>
            </div>
        </footer><!--/#footer-->

        <script src="{{URL::to('plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
        <script src="{{URL::to('bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{URL::to('js/main.js')}}"></script>
        <script type="text/javascript">
            $(function () {
                //Check to see if the window is top if not then display button
                $(window).scroll(function () {
                    if ($(this).scrollTop() > 100) {
                        $('.scrollToTop').fadeIn();
                    } else {
                        $('.scrollToTop').fadeOut();
                    }
                });

                //Click event to scroll to top
                $('.scrollToTop').click(function () {
                    $('html, body').animate({scrollTop: 0}, 800);
                    return false;
                });
            });
        </script>
    </body>
</html>