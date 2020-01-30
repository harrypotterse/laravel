<section class="hidden-section scroll-con-sec bot-element" id="sec6">
    <div class="container">
        <div class="section-title fl-wrap">
            <h3>{{ $array['Division3']->component11 }} </h3>
            <p>{{ $array['Division3']->component12 }} </p>
        </div>
        <div class="testimonilas-carousel-wrap fl-wrap">
            <div class="tcb-wrap">
                <div class="tcb  tcb-prev"><i class="fas fa-caret-left"></i></div>
                <div class="tcb  tcb-next"><i class="fas fa-caret-right"></i></div>
            </div>
            <div class="testimonilas-carousel fl-wrap">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @php
                        $id=1;
                        @endphp
                        @if (count($customers)>0)
                        @foreach ($customers as $item_customers)

                        <div class="swiper-slide">
                            <div class="testi-item fl-wrap">
                                <div class="testi-avatar"><img
                                        src="{{Request::root()}}/Front/images/avatar/{{ $item_customers->Image}}"
                                        alt=""></div>
                                <span class="testi-number">.0 {{ $id++ }}</span>
                                <div class="testimonilas-text fl-wrap">
                                    <h3>{{ $item_customers->Name}}</h3>
                                    <p>{{ $item_customers->Word}}</p>
                                    <a href="{{ $item_customers->Facebook}}" class="testi-link" target="_blank">{{trans('programming.fa')}}</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif

                    </div>
                </div>
            </div>
            <div class="tc-pagination"></div>
        </div>
        <!-- client-list -->
        <div class="fl-wrap">
            <div class="container">
                <ul class="client-list client-list-white">
                    @foreach(DB::table('brands')->orderBy('id','desc')->get() as $item_brands)
                    <li><a href="#" target="_blank"><img
                                src=" {{Request::root()}}/Front/images/clients/{{ $item_brands->pic}} " alt=""></a></li>
                    @endforeach
                </ul>
            </div>
            <!-- client-list end-->
        </div>
        <div class="sec-number">05.</div>
    </div>
    <div class="col-wc_dec col-wc_dec2"></div>
</section>
<!--section end -->
<div class="limit-box fl-wrap"></div>