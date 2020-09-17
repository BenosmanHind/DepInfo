<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>D-Info</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
<link rel="stylesheet" href="{{asset('accueil/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('accueil/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('accueil/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('accueil/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('accueil/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('accueil/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('accueil/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('accueil/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('accueil/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('accueil/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('accueil/css/style.css')}}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div class="header-top_area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header_top_wrap d-flex justify-content-between align-items-center">
                                <div class="text_wrap">
                                    <p><span class="hind">+213 43 380 048 | </span> <span>contact@d-info.com</span></p>
                                </div>
                                <div class="text_wrap">
                                    
                                    @auth
                                     
                                     @if (Auth::user()->role == 1 || Auth::user()->role == 0 )
                                    <p><a href="{{ url('home') }}"> <i class="ti-user"></i> Dashbord</a>  </p>
                                     @elseif (Auth::user()->role == 2)
                                     <p><a href="{{ url('dashbord/enseignant/home') }}"> <i class="ti-user"></i> Dashbord</a>  </p>
                                     @else
                                     <p><a href="{{ url('/dashbord/etudiant/home') }}"> <i class="ti-user"></i> Dashbord</a>  </p>
                                     @endif
                                    @else
                                    <p><a href="{{ route('login') }}"> <i class="ti-user"></i> Login</a> <a href="{{ url('/choose') }}">Register</a></p>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header_wrap d-flex justify-content-between align-items-center">
                                <div class="header_left">
                                    <div class="logo">
                                        <a href="{{url('/')}}">
                                            <img src="accueil/img/logo.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="header_right d-flex align-items-center">
                                    <div class="main-menu  d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li ><a  href="{{url('/')}}" >Acceueil</a></li>
                                                <li><a href="{{url('/boursepage')}}">Bourses</a></li>
                                                <li><a href="{{url('/eventspage')}}">Evenements</a></li>
                                                <li><a href="{{url('/articlespage')}}">Articles</a></li>
                                                <li><a href="{{url('/contact')}}">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    @yield('content')


     <!-- footer start -->
     <footer class="footer">
        <div class="footer_top">
            <div class="container">
                
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                A propos de nous
                            </h3>
                            <ul>
                                <li>D-INFO</a></li>
                                <li><a href="#">About Us</a></li>
                             
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Campus
                            </h3>
                            <ul>
                                <li><a href="{{url('/boursepage')}}">Bourses</a></li>
                                <li><a href="{{url('/eventspage')}}">Events</a></li>
                              
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Etudes
                            </h3>
                            <ul>
                                <li><a href="#">Admissions Policy</a></li>
                                <li><a href="#">Getting Started</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Support
                            </h3>
                            <ul>
                                <li><a href="{{url('/contact')}}">Contact </a></li>
                                
                                
                             
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | D-Info <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank " class="hind">Hind</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end  -->


    <!-- JS here -->
    <script src="{{asset('accueil/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{asset('accueil/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('accueil/js/popper.min.js')}}"></script>
    <script src="{{asset('accueil/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('accueil/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('accueil/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('accueil/js/ajax-form.js')}}"></script>
    <script src="{{asset('accueil/js/waypoints.min.js')}}"></script>
    <script src="{{asset('accueil/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('accueil/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('accueil/js/scrollIt.js')}}"></script>
    <script src="{{asset('accueil/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('accueil/js/wow.min.js')}}"></script>
    <script src="{{asset('accueil/js/nice-select.min.js')}}"></script>
    <script src="{{asset('accueil/js/jquery.slicknav.min.js')}}"></script>
    <script src="{{asset('accueil/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('accueil/js/plugins.js')}}"></script>
    <script src="{{asset('accueil/js/gijgo.min.js')}}"></script>

    <!--contact js-->
    <script src="{{asset('accueil/js/contact.js')}}"></script>
    <script src="{{asset('accueil/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('accueil/js/jquery.form.js')}}"></script>
    <script src="{{asset('accueil/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('accueil/js/mail-script.js')}}"></script>

    <script src="{{asset('accueil/js/main.js')}}"></script>

</body>

</html>