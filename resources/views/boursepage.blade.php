@extends('layouts.accueil')
@section('content')

  <!-- header-start -->
 

<!-- bradcam_area_start  -->
<div class="bradcam_area breadcam_bg">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3>Toutes les Bourses </h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bradcam_area_end  -->

<!-- recent_event_area_strat  -->
<div class="recent_event_area section__padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="section_title text-center mb-70">
                    <h3 class="mb-45">Liste Des Bourses</h3>
                   
                </div>
            </div>
        </div>
        <div class="recent_news_area section__padding">
        <div class="container">
            
             <div class="row">
                @if (count($bourses) >= 0)
                @foreach ($bourses as $bourse)
                <div class="col-md-6">
                    <div class="single__news">
                        <div class="thumb">
                            
                               <a href="single-blog.html">
                                <img src="" alt="">
                            </a>
                          <span class="badge ">Bourse</span>
                        </div>
                        <div class="news_info">
                            <a href="{{$bourse->link}}" target="_blank">
                            <h4>{{$bourse->title}}</h4>
                        </a> 
                           
                            <p class="event_info_text">{{$bourse->description}}
                        </p> 
                           
                        </div>
                    </div>
                </div>
                @endforeach
                 @endif 
            </div>
        </div>
    </div>
    </div>
</div>
<!-- recent_event_area_end  -->

    
@endsection