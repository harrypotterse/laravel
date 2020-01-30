<section id="sec2" class="hidden-section scroll-con-sec bot-element">
        <div class="col-wc_dec"></div>
        <div class="container">
            <div class="section-title fl-wrap">
                <h3>{{ $array['Division1']->component3 }}</br> {{ $array['Division1']->component4 }}</h3>
                <p>{{ $array['Division1']->component5 }} </p>
            </div>
            <div class="row">
                <div class="col-sm-5">
                    <div class="dec-img   fl-wrap">

                        <img src=" {{Request::root()}}/Front/images/{{$array['Division1']->component6 }}  "
                            class="respimg" alt="">
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="main-about fl-wrap">
                        <h2>{!! $array['Division1']->component7 !!}</h2>
                        <p>
                            {{ $array['Division1']->component8 }}</p>
                        <h5>{{ $array['Division1']->component9 }}</br>
                            {{ $array['Division1']->component10 }}</h5>
                        <a href="/portfolio" class="btn  ajax fl-btn color-bg"> {{trans('programming.details')}}</a>
                    </div>
                </div>
            </div>
            <div class="sec-number">01.</div>
        </div>
    </section>