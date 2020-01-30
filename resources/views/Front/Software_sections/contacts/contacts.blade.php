<section class="hidden-section bot-element">
    <div class="col-wc_dec"></div>
    <div class="container">
        <div class="section-title fl-wrap">
            <h3>{{ $array['Division1']->component1 }}</h3>
        </div>
        <!--process-wrap  -->
        <div class="contacts-wrap fl-wrap">
            <ul>
                <li>
                    <i class="fal fa-mobile-android"></i>
                    <h4>{{trans('programming.mobile')}}</h4>
                    <div class="clearfix"></div>
                    <a href="#" class="contact-link">{{ $array['Division1']->component4 }}</a>
                </li>
                <li>
                    <i class="fal fa-compass"></i>
                    <h4>{{trans('programming.Address')}}</h4>
                    <div class="clearfix"></div>
                    <a href="#" class="contact-link">{{ $array['Division1']->component3 }}</a>
                </li>
                <li>
                    <i class="fal fa-envelope-open"></i>
                    <h4>{{trans('programming.Email')}}</h4>
                    <div class="clearfix"></div>
                    <a href="#" class="contact-link">{{ $array['Division1']->component2 }}</a>
                </li>
            </ul>
        </div>
        <!--process-wrap   end-->
        <div class="map-container fl-wrap">
            {!! $array['Division1']->component5  !!}
           </div>
        <div class="sec-number">01.</div>
    </div>
</section>