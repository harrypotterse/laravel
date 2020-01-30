<div class="content">
    <!-- fixed-top-panel-->
    <div class="fixed-top-panel fl-wrap">
        <div class="sp-fix-header fl-wrap">
            <div class="scroll-down-wrap hide_onmobile">
                <div class="mousey">
                    <div class="scroller"></div>
                </div>
                <span>{{trans('programming.Get down ')}}</span>
            </div>
            <!-- filter tag   -->
            <!-- filter tag end  -->
            <!-- filter category    -->
            <div class="category-filter blog-btn-filter">
                <div class="blog-btn">{{trans('programming.sections')}} <i class="fa fa-list-ul" aria-hidden="true"></i>
                </div>
                <ul>
                    @if (count($blog_categories)>0)
                    @foreach ($blog_categories as $item_blog_categories)
                    <li><a href="blog_controler/{{ $item_blog_categories->id}}">{{ $item_blog_categories->Section}}</a></li>
                    @endforeach
                    @endif
                </ul>
            </div>
            <!-- filter category end  -->
        </div>
        <div class="blog-search-wrap"><input name="se" id="se" type="text" class="search"
                placeholder="Type and click Enter to search.." value="" /></div>
    </div>
    <!-- fixed-top-panel end -->
    <!--section -->
    <section class="hidden-section article bot-element">
        @if (count($blog)>0)
        @foreach ($blog as $item_blog)
        <div class="col-wc_dec"></div>
        <div class="container">
            <div class="section-title fl-wrap post-title">
                <h3>{{ $item_blog->Title}}</h3>
            </div>
            <!-- media-wrap-->
            <div class="media-wrap  lightgallery  fl-wrap">
                <div class="single-slider-wrap">
                    <div class="single-slider fl-wrap">
                        <div class="swiper-container">
                            <div class="swiper-wrapper lightgallery">
                                <div class="swiper-slide hov_zoom"><img
                                        src="{{Request::root()}}/Front/images/slider/{{ $item_blog->Picture1}}"
                                        alt=""><a
                                        href="{{ Request::root() }}/Front/images/slider/{{ $item_blog->Picture1}}"
                                        class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                <div class="swiper-slide hov_zoom"><img
                                        src="{{Request::root()}}/Front/images/slider/{{ $item_blog->Picture2}}"
                                        alt=""><a
                                        href="{{ Request::root() }}/Front/images/slider/{{ $item_blog->Picture2}}"
                                        class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                <div class="swiper-slide hov_zoom"><img
                                        src="{{Request::root()}}/Front/images/slider/{{ $item_blog->Picture3}}"
                                        alt=""><a
                                        href="{{ Request::root() }}/Front/images/slider/{{ $item_blog->Picture3}}"
                                        class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                            </div>
                        </div>
                        <div class="ss-slider-cont ss-slider-cont-prev  "><i class="fal fa-long-arrow-left"></i></div>
                        <div class="ss-slider-cont ss-slider-cont-next  "><i class="fal fa-long-arrow-right"></i></div>
                        <div class="ss-slider-controls">
                            <div class="ss-slider-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- media-wrap end -->
            <div class="post-block fl-wrap">
                <p>{{ $item_blog->Subject}} </p>
                <a href="blog-single.html" class="btn   fl-btn color-bg">{{trans('programming.More information')}}</a>
            </div>
            <div class="sec-number">01.</div>
        </div>

        <!--section end -->
        @endforeach
        @endif
        <div class="container">
            {{ $blog->links() }}
        </div>
    </section>
    <!--pagination end-->
    <div class="limit-box fl-wrap"></div>
</div>