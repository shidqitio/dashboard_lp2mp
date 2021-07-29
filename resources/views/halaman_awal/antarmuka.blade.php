<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('title','Dashboard SI LPPMP')</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    </head>
    @yield('container')
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="https://www.ut.ac.id/">Universitas Terbuka</a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                         <!-- Header Social Icons-->
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/UnivTerbuka/"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://twitter.com/univterbuka/"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.linkedin.com/school/universitas-terbuka/mycompany/"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ url('/layouts/layout/logout')}}">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <!-- <img class="masthead-avatar mb-5" src="" alt="" /> -->
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Dashboard SI LPPMP</h1>
                <!-- Masthead Subheading-->
                <!-- <p class="masthead-subheading font-weight-light mb-0">Graphic Artist - Web Designer - Illustrator</p> -->
            </div>
        </header>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Item 1-->
                    
                    <div class="col-md-6 col-lg-3 mb-5">
                    <a href="/dashboard_lppmp">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="seklppmp">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><h5 class>Lembaga Pengembangan dan Penjaminan Mutu Pendidikan</h5></div>
                            </div>
                            <img class="img-fluid" src="images/home/LPPMP.png" alt="" />
                        </div>
                    </a>
                    </div>
                    
                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-3 mb-5">
                    <a href="/dashboard_p2m2">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><h5 class>Pusat Pengembangan Multi Media</h5></div>
                            </div>
                            <img class="img-fluid" src="images/home/P2M2.png" alt="" />
                        </div>
                        </a>
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-3 mb-5">
                    <a href="/dashboard_puslaba">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><h5 class>Pusat Pengelolaan Bahan Ajar</h5></div>
                            </div>
                            <img class="img-fluid" src="images/home/PUSLABA.png" alt="" />
                        </div>
                    </div>
                     <!-- Portfolio Item 4-->
                     <div class="col-md-6 col-lg-3 mb-5">
                     <a href="/dashboard_pusjian">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><h5 class>Pusat Pengujian</h5></div>
                            </div>
                            <img class="img-fluid" src="images/home/PUSJIAN.png" alt="" />
                        </div>
                    </div>
                    <!-- Portfolio Item 5-->
                    <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <a href="/dashboard_pbb">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal5">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><h5 class>Pusat Bantuan Belajar</h5></div>
                            </div>
                            <img class="img-fluid" src="images/home/PBB.png" alt="" />
                        </div>
                    </div>
                    <!-- Portfolio Item 6-->
                    <div class="col-md-6 col-lg-3 col-xs-12 mb-5 mb-md-0">
                    <a href="/dashboard_ppmp">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal6">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><h5 class>Pusat Penjaminan Mutu Pendidikan</h5></div>
                            </div>
                            <img class="img-fluid" src="images/home/PPMP.png" alt="" />
                        </div>
                    </div>
                    <BR>
                    <BR>
                    <!-- Portfolio Item 7-->
                    <div class="col-md-6 col-lg-3 mb-5 mb-md-0">
                    <a href="/dashboard_pps">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal7">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><h5 class>Pusat Pengelolaan dan Penyelenggaraan Program Pascasarjana</h5></div>
                            </div>
                            <img class="img-fluid" src="images/home/PASCA.png" alt="" />
                        </div>
                    </div>
                    <BR>
                    <BR>
                    <!-- Portfolio Item 8-->
                    <div class="col-md-6 col-lg-3 mb-5 mb-md-0">
                    <a href="/dashboard_ppmln">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal8">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><h5 class>Pusat Pengelolaan Mahasiswa Luar Negeri</h5></div>
                            </div>
                            <img class="img-fluid" src="images/home/PPMLN.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
      
        <!-- Footer -->
        <Footer>
            
            <img alt src="images/home/footer-ut.png">
            
        </Footer> 
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright © by LPPMP 2021</small></div>
        </div>
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
