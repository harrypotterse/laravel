<div class="hero-wrap fl-wrap full-height scroll-con-sec hidden-section" id="sec1" data-scrollax-parent="true">
    <!--ms-container-->
    <div class="multi-slideshow_fs ms-container fl-wrap full-height" data-scrollax="properties: { translateY: '30%' }">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <!--ms_item-->
                @foreach(\App\ads::take(7)->orderBy('id','desc')->get() as $item_ads)
                <div class="swiper-slide">
                        <div class="ms-item_fs fl-wrap">
                            <div class="bg par-elem"  data-bg="{{Request::root()}}/Front/images/bg/{{ $item_ads->pic}}"  ></div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                @endforeach
            
            </div>
        </div>
    </div>
    <!--ms-container end-->                     
    <div class="half-hero-wrap">
        <div class="pr-bg"></div>
        <div class="rotate_text hero-decor-let">
            <div>{{ $array['Division3']->component13 }}</div>
            <div><span{{ $array['Division3']->component14 }}</span></div>
            <div>{{ $array['Division3']->component15 }}</div>
            <div><span>{{ $array['Division3']->component16 }}</span></div>
        </div>
        <h1>{{ $array['Division3']->component1 }}  <br>  <span>{{ $array['Division3']->component2 }}</span> {{ $array['Division3']->component3 }}</h1>
        <h4>{{ $array['Division3']->component4 }} </h4>
        <div class="clearfix"></div>
        <a href="#sec2" class="btn fl-btn custom-scroll-link  color-bg">{{trans('programming.details')}}</a>
    </div>
    <!-- hero  elements  --> 
    <div class="hero-border hb-top"></div>
    <div class="hero-border hb-bottom"></div>
    <div class="hero-border hb-right"></div>
    <div class="hero-corner hiddec-anim"></div>
    <div class="hero-corner2 hiddec-anim"></div>
    <div class="hero-corner3 hiddec-anim"></div>
    <div class="scroll-down-wrap sdw_hero hiddec-anim">
        <div class="mousey">
            <div class="scroller"></div>
        </div>
        <span>{{trans('programming.down')}}</span>
    </div>
    <!-- hero  elements end--> 
</div>