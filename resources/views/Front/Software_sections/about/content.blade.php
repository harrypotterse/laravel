<div class="content">
    <!--section-->
    <section class="header-section hidden-section" data-scrollax-parent="true">
        <div class="bg par-elem" data-bg="{{ URL('Front/images/bg/8.jpg')}}"
            data-scrollax="properties: { translateY: '30%' }"></div>
        <div class="overlay"></div>
        <div class="container">
            <div class="single-page-title fl-wrap hiddec-anim">
                <h1>{{ $array['Division1']->component1 }}</h1>
                <p>{{ $array['Division1']->component2 }} </p>
            </div>
            <div class="hero-corner"></div>
            <div class="scroll-down-wrap hiddec-anim">
                <div class="mousey">
                    <div class="scroller"></div>
                </div>
                <span>{{trans('programming.down ')}}</span>
            </div>
        </div>
        <div class="fcw-dec"></div>
    </section>
    <section>
        <!--section end-->
        <div class="col-wc_dec"></div>
        <!--section -->
        {{--  ###########################################################################  --}}
        @include('Front.Software_sections.about.Division1')
        {{--  ###########################################################################  --}}
        <!--section end -->
        <!--section -->
        @include('Front.Software_sections.about.steps')
        {{--  ###########################################################################  --}}
        <!--section  -->
        <div class="section-separator"><span class="fl-wrap"></span></div>
        <!--section  -->
        @include('Front.Software_sections.about.idea')
        {{--  ###############################################################  --}}
        @include('Front.Software_sections.about.Division2')
        {{--  ##########################################################################  --}}
        @include('Front.Software_sections.about.planning')
        <div class="col-wc_dec col-wc_dec2 col-wc_dec3"></div>
    </section>
    <!--section end-->
</div>
<!--content  end -->
<div class="limit-box fl-wrap"></div>