<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Education</title>
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
                                     
                                     @if (Auth::user()->role == 1)
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
                                        <a href="index.html">
                                            <img src="accueil/img/logo.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="header_right d-flex align-items-center">
                                    <div class="main-menu  d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li ><a  href="index.html" >Acceueil</a></li>
                                                <li><a href="Courses.html">Bourses</a></li>
                                                <li><a href="Courses.html">Evenments</a></li>
                                                <li><a href="Courses.html">Articles</a></li>
                                                <li><a href="contact.html">Contact</a></li>
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

    <!-- slider_area_start -->
    <div class="slider_area">
      
            <!--/ single_carouse -->
            <!-- single_carouse -->
            <div class="single_slider  d-flex align-items-center slider_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3>Faculté des sciences, <br>
                                    Departement <br>
                                    d'informatique.</h3>
                                <a href="#" class="boxed-btn3">Commencer</a>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ single_carouse -->
            <!-- single_carouse -->
            
            <!--/ single_carouse -->
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- service_area_start  -->
    <div class="service_area gray_bg">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-4 col-md-6">
                    <div class="single_service d-flex align-items-center ">
                        <div class="icon">
                            <i class="flaticon-school"></i>
                        </div>
                        <div class="service_info">
                            <h4>Bourse </h4>
                            <p>Disponible</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service d-flex align-items-center ">
                        <div class="icon">
                            <i class="flaticon-error"></i>
                        </div>
                        <div class="service_info">
                            <h4>Evenements</h4>
                            <p>A venir</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service d-flex align-items-center ">
                        <div class="icon">
                            <i class="flaticon-book"></i>
                        </div>
                        <div class="service_info">
                            <h4>Articles</h4>
                            <p>Nouveautés</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ service_area_start  -->

    <!-- popular_program_area_start  -->
  

    

    <!-- recent_event_area_strat  -->
    <div class="recent_event_area section__padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section_title text-center mb-70">
                        <h3 class="mb-45">Événement Récent</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    @foreach ($events as $event)
                    
                    
                    <div class="single_event d-flex align-items-center">
                        <div class="date text-center">
                            <span>02</span>
                            <p>Dec, 2020</p>
                        </div>
                        <div class="event_info">
                            <a href="event_details.html">
                                <h4>{{$event->title}}</h4>
                             </a>
                            <p><span> <i class="flaticon-clock"></i> {{$event->heure}}</span> <span> <i class="flaticon-calendar"></i> {{$event->date}} </span> <span> <i class="flaticon-placeholder"></i> {{$event->lieu}}</span> </p>
                        </div>
                    </div>
                    @endforeach
    
                  
                </div>
            </div>
        </div>
    </div>
    <!-- recent_event_area_end  -->

    <!-- latest_coures_area_start  -->
    <div data-scroll-index='1' class="admission_area">
        <div class="admission_inner">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-7">
                        <div class="admission_form">
                            <h3>Contactez-Nous</h3>
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="single_input">
                                            <input type="text" placeholder="Nom" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_input">
                                            <input type="text" placeholder="Prenom" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_input">
                                            <input type="text" placeholder="N° Telephone" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_input">
                                            <input type="text" placeholder="Adresse Email" >
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single_input">
                                            <textarea cols="30" placeholder="Détails" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="apply_btn">
                                            <button class="boxed-btn3" type="submit">Envoyer</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ latest_coures_area_end -->


    <!-- recent_news_area_start  -->
    <div class="recent_news_area section__padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section_title text-center mb-70">
                        <h3 class="mb-45">Les Articles</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="single__news">
                        <div class="thumb">
                            <a href="single-blog.html">
                                <img src="img/news/1.png" alt="">
                            </a>
                            <span class="badge ">Group Study</span>
                        </div>
                        <div class="news_info">
                            <a href="single-blog.html">
                                <h4>Les enseignants chercheurs de laboratoire biologie moléculaire </h4>
                            </a>
                            <p class="d-flex align-items-center"> <span><i class="flaticon-calendar-1"></i> May 10, 2020</span> 
                            
                            <span> <i class="flaticon-comment"></i> 01 comments</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="single__news">
                        <div class="thumb">
                            <a href="single-blog.html">
                                <img src="img/news/2.png" alt="">
                            </a>
                            <span class="badge bandge_2">Hall Life</span>
                        </div>
                        <div class="news_info">
                            <a href="single-blog.html">
                                <h4>Appel à projets COVID-19</h4>
                            </a>
                            <p class="d-flex align-items-center"> <span><i class="flaticon-calendar-1"></i> May 10, 2020</span> 
                            
                            <span> <i class="flaticon-comment"></i> 01 comments</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- recent_news_area_end  -->

    <!-- footer start -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="newsLetter_wrap">
                    <div class="row justify-content-between">
                        <div class="col-md-7">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                    Newsletter
                                </h3>
                                <form action="#" class="newsletter_form">
                                    <input type="text" placeholder="Email Address">
                                    <button type="submit">S'inscrire</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-5">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                    Suivez-nous
                                </h3>
                                <div class="socail_links">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="ti-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                A propos de nous
                            </h3>
                            <ul>
                                <li><a href="#">Online Learning</a></li>
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
                                <li><a href="#">Our Plans</a></li>
                                <li><a href="#">Free Trial</a></li>
                              
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
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Contact Us</a></li>
                             
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
    <script src="{{asset('accueil/js/waypoints.min.js')}}"</script>
    <script src="{{asset('accueil/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('accueil/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('accueil/js/scrollIt.js')}}"></script>
    <script src="{{asset('accueil/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('accueil/js/wow.min.js')}}"></script>
    <script src="{{asset('accueil/js/nice-select.min.js')}}"></script>
    <script src="{{asset('accueil/js/jquery.slicknav.min.js')}}"></script>
    <script src="{{asset('accueil/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('accueil/js/plugins.js')}}"></script>
    <script src="{{asset('accueil/js/gijgo.min.jss')}}"></script>

    <!--contact js-->
    <script src="{{asset('accueil/js/contact.js')}}"></script>
    <script src="{{asset('accueil/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('accueil/js/jquery.form.js')}}"></script>
    <script src="{{asset('accueil/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('accueil/js/mail-script.js')}}"></script>

    <script src="{{asset('accueil/js/main.js')}}"></script>

</body>

</html>