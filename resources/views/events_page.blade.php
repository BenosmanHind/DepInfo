@extends('layouts.accueil')

@section('content')

  <!-- header-start -->
 

<!-- bradcam_area_start  -->
<div class="bradcam_area breadcam_bg">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3>Tous les evenments </h3>
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
                    <h3 class="mb-45">Recent Event</h3>
                   
                </div>
            </div>
        </div>
        <div class="row justify-content-center">

            @foreach ($events as $event)
                
            <div class="col-lg-10">
                <div class="single_event d-flex align-items-center">
                    <div class="date text-center">
                        <span>02</span>
                        <p>Dec, 2020</p>
                    </div>
                    <div class="event_info">
                        <a href="{{url('eventdetail/'.$event->id)}}">
                        <h4>{{$event->title}}</h4>
                         </a>
                        <p><span> <i class="flaticon-clock"></i> {{$event->heure}}</span> <span> <i class="flaticon-calendar"></i> {{$event->date}} </span> <span> <i class="flaticon-placeholder"></i> {{$event->lieu}}</span> </p>
                    </div>
                </div>
              
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- recent_event_area_end  -->

    
@endsection
