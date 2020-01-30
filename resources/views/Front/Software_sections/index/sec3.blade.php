<div class="section-separator"><span class="fl-wrap"></span></div>

<section class="hidden-section scroll-con-sec bot-element" id="sec3">
    <div class="container">
        <div class="section-title fl-wrap">
            <h3>{{ $array['Division3']->component5 }} </h3>
            <p>{{ $array['Division3']->component6 }}  </p>
        </div>
        <div class="cards-wrap fl-wrap">
            <div class="row">
                    @if (count($services)>0)
                    @foreach ($services as $item_services)       
                <!--card item -->
                <div class="col-md-4" style="padding: 1%;">
                    <div class="content-inner fl-wrap">
                        <div class="content-front">
                            <div class="cf-inner">
                                <div class="bg " data-bg="{{Request::root()}}/Front/images/services/{{ $item_services->Image}}"></div>
                                <div class="overlay"></div>
                                <div class="inner">
                                    <h2>{{ $item_services->Title}}</h2>
                                    <ul>
                                        <li>{{ $item_services->Subtitle}}</li>
                                  
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="content-back">
                            <div class="cf-inner">
                                <div class="inner">
                                    <div class="dec-icon">
                                        <i class="fal fa-desktop"></i>
                                    </div>
                                    <div class="serv-price-wrap"><a href="">{{trans('programming.details')}}</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <!--card item end -->
                @endforeach
                @endif 
               
            </div>
 
      
        </div>
        <div class="sec-number">02.</div>
    </div>
</section>
<!--section end -->
<!--section end -->
<div class="section-separator bot-element"><span class="fl-wrap"></span></div>