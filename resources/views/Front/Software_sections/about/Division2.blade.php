<section class="dark-bg bot-element">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="video-box dec-img fl-wrap">

                            <img src="{{Request::root()}}/Front/images/all/{{$array['Division2']->component3 }}"
                                alt="" class="respimg">
                            <a class="video-box-btn image-popup" href="{{ $array['Division2']->component4 }}"><i
                                    class="fas fa-play"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="video-promo-text fl-wrap mar-top">
                            <h3>{{ $array['Division2']->component1 }}</h3>
                            <p>
                                {{ $array['Division2']->component2 }}</p>
                            <a href="{{ $array['Division2']->component6 }}"
                                class="btn fl-btn    color-bg">{{ $array['Division2']->component5 }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-corner"></div>
    </section>