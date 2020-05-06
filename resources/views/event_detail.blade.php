@extends('layouts.accueil')

@section('content')

<div class="bradcam_area breadcam_bg">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3>{{$event->title}}</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="event_details_area section__padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single_event d-flex align-items-center">
                    <div class="thumb">
                        <img src="{{$medias[0]->lien}}" alt="">
                        <div class="date text-center">
                            <h4>02</h4>
                            <span>Dec, 2020</span>
                        </div>
                    </div>
                    <div class="event_details_info">
                        <div class="event_info">
                            <a href="#">
                                <h4>{{$event->title}}</h4>
                             </a>
                            <p><span> <i class="flaticon-clock"></i>{{$event->heure}}</span> <span> <i class="flaticon-calendar"></i> {{$event->date}} </span> <span> <i class="flaticon-placeholder"></i> {{$event->lieu}}</span> </p>
                        </div>
                        <p class="event_info_text">{{$event->description}}
                        </p>
                        <a href="#" class="boxed-btn3">Book a seat</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    
@endsection
