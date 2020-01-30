<section class="scroll-con-sec bot-element" id="sec4" style="padding:0px">
    <div class="container">
        <div class="section-title fl-wrap">
            <h3>{{ $array['Division3']->component7 }} </h3>
            <p>{{ $array['Division3']->component8 }}  </p>
        </div>
        <div class="sec-number">04.</div>
    </div>
    <div class="col-wc_dec col-wc_dec2 col-wc_dec3"></div>
    <div class="content dark-content portf-wrap">
        <!-- portfolio start -->
        <div class="gallery-items min-pad  four-column   fl-wrap  " style="position: relative; height: 1199.98px;">
            @if (count($portfolio)>0)
            @foreach ($portfolio as $item_portfolio)
            <div class="gallery-item  Department{{ $item_portfolio->sectionspro[0]->id}} ">
                <div class="grid-item-holder hov_zoom">
                      
                    <img src="{{Request::root()}}/Front/images/folio/{{ $item_portfolio->Image}}" alt="">
                    <a href="{{ URL('Front/images/folio/7.jpg')}}" class="box-media-zoom   image-popup"><i
                            class="fal fa-search"></i></a>
                    <div class="grid-det">
                    
                        <div class="grid-det_category"><a href="#"> {{ $item_portfolio->sectionspro[0]->sections}} </a> </div>
                        <div class="grid-det-item">
                            <a href="portfolio-single.html" class=" grid-det_link">Kent Brant Concept<i
                                    class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pr-bg"></div>
            </div>
            @endforeach
            @endif
        </div>
        <!-- portfolio end -->
    </div>
</section>
<!--section end -->
<div class="section-separator bot-element"><span class="fl-wrap"></span></div>