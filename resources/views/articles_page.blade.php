@extends('layouts.accueil')

@section('content')

 <div class="bradcam_area breadcam_bg">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3>Tous Les Articles</h3>
                </div>
            </div>
        </div>
    </div>
</div>
       
        <div class="recent_news_area section__padding">
        <div class="container">
            
             <div class="row">
             	 @foreach ($articles as $article)
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
                                <h4>{{$article->title}}</h4>
                            </a>
                           
                            <p class="event_info_text">{{$article->description}}
                        </p> 
                           
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    

    
@endsection
