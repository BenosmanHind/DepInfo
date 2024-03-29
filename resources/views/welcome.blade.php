 @extends('layouts.accueil')

@section('content')

    
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
                             <a href="{{url('/boursepage')}}">
                            <h4>Bourses </h4>
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
                          
                            <a href="{{url('/eventspage')}}">
                            <h4>Evenements</h4>
                        </a>
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
                            
                            <a href="{{url('articlespage')}}">
                            <h4>Articles</h4>
                        </a>
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
                      
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    @foreach ($events as $event)
                    
                    
                    <div class="single_event d-flex align-items-center">
                        <div class="date text-center">
                            <span>{{$event->heure}}</span>
                            <p>{{$event->date}}</p>
                        </div>
                        <div class="event_info">
                        <a href="{{url('/eventdetail/'.$event->id)}}">
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
                        <form action="{{url('/contact')}}" method="post">
                            @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="single_input">
                                            <input type="text" placeholder="Nom" name="name">
                                        </div>
                                    </div>
                                   
                                    <div class="col-md-6">
                                        <div class="single_input">
                                            <input type="text" placeholder="Sujet" name="subject">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_input">
                                            <input type="text" placeholder="Adresse Email" name="email">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single_input">
                                            <textarea cols="30" placeholder="Détails" rows="10" name="message"></textarea>
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
                        
                    </div>
                </div>
            </div>
            <div class="row">
                 @foreach ($articles as $article)
                <div class="col-md-6">
                    
                    <div class="single__news">
                        <div class="thumb">
                            <a href="single-blog.html">
                                <img src="img/news/1.png" alt="">
                            </a>

                            <span class="badge ">Article</span>
                        </div>
                        <div class="news_info">
                            <a href="single-blog.html">
                                <a href="{{url('/articlesdetail/'.$article->id)}}">
                                <h4>{{$article->title}}</h4>
                             </a>
                            </a>
                           
                        </div>
                    </div>
                    
                </div>
                @endforeach
            </div>
        </div>
    </div>

    

    @endsection