
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title><?=$titlebar;?></title>

    <!-- Favicon  -->
    <?php foreach($iconbar as $iconb) : ?>
        <link rel="icon" href="<?=base_url()?>assets/backend/img/controlpanel/iconbar/<?=$iconb['lib_images']?>">
    <?php endforeach ?>

    <!-- Style CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/frontend/style.css">

</head>

<style type="text/css">
    .video-container {
    position: relative;
    padding-bottom: 56.25%;
    padding-top: 30px; height: 0; overflow: hidden;
    }

    .video-container iframe,
    .video-container object,
    .video-container embed {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    }
</style>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="preload-content">
            <div id="world-load"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <!-- Logo -->
                        <?php  foreach($brandlogo as $brlogo) : ?>
                            <a class="navbar-brand" href="<?=site_url()?>"><img src="<?=base_url()?>assets/backend/img/controlpanel/brandlogo/<?=$brlogo['lbl_images']?>" alt="Logo"></a>
                        <?php endforeach ?>
                        <!-- Navbar Toggler -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#worldNav" aria-controls="worldNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <!-- Navbar -->
                        <div class="collapse navbar-collapse" id="worldNav">
                            <ul class="navbar-nav ml-auto">

                                <li class="nav-item ">
                                    <a class="nav-link" href="<?=site_url()?>">Home <span class="sr-only">(current)</span></a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About-Us</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <?php foreach($subpagesservices as $subpgsservices) : ?>
                                            <a class="dropdown-item" href="<?=site_url('/about-us/')?><?=$subpgsservices['sub_pgs_slug']?>"><?=$subpgsservices['sub_pgs_name']?></a>
                                        <?php endforeach; ?>
                                    </div>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <?php foreach($subpagesaboutus as $subpgsaboutus) : ?>
                                            <a class="dropdown-item" href="<?=site_url('/services/')?><?=$subpgsaboutus['sub_pgs_slug']?>"><?=$subpgsaboutus['sub_pgs_name']?></a>
                                        <?php endforeach; ?>
                                    </div>
                                </li>

                                <?php foreach(array_slice($pages, 2) as $pgs) : ?>
                                <li class="nav-item ">
                                    <a class="nav-link" href="<?=site_url()?><?=$pgs['pgs_slug'];?>"><?=$pgs['pgs_name'];?></a>
                                </li>
                                <?php endforeach; ?>

                            </ul>
                            <!-- Search Form  -->
                            <div id="search-wrapper">
                                <form action="#">
                                    <input type="text" id="search" placeholder="Search something...">
                                    <div id="close-icon"></div>
                                    <input class="d-none" type="submit" value="">
                                </form>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

        <?=$contentsfrontend?>

    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                        <a href="#"><img src="img/core-img/logo.png" alt=""></a>
                        <div class="copywrite-text mt-30">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                        <ul class="footer-menu d-flex justify-content-between">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Gadgets</a></li>
                            <li><a href="#">Video</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                        <h5>Subscribe</h5>
                        <form action="#" method="post">
                            <input type="email" name="email" id="email" placeholder="Enter your mail">
                            <button type="button"><i class="fa fa-arrow-right"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ***** Footer Area End ***** -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="<?=base_url()?>assets/frontend/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="<?=base_url()?>assets/frontend/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?=base_url()?>assets/frontend/js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="<?=base_url()?>assets/frontend/js/plugins.js"></script>
    <!-- Active js -->
    <script src="<?=base_url()?>assets/frontend/js/active.js"></script>

</body>

</html>