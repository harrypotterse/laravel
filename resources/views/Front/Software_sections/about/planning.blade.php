<section class="hidden-section scroll-con-sec bot-element" id="sec5"
style="opacity: 1; transform: translate3d(0px, 0px, 0px);">
<div class="container">
    <div class="section-title fl-wrap">
        <h3> {{ $array['Division1']->component13 }}</h3>
        <p> {{ $array['Division1']->component14 }} </p>
    </div>
    <div class="custom-inner-holder">
        <!-- 1 -->
        @if (count($planning)>0)
        @foreach ($planning as $item_planning)
        <div class="custom-inner">
            <div class="row">
                <div class="col-md-4">
                    <div class="resum-header workres">
                        <i class="fa fa-briefcase"></i>
                        <h3> {{ $item_planning->Title}}</h3>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="resum-content fl-wrap">
                        <h4>{{ $item_planning->Title}}</h4>
                        <p>{{ $item_planning->Subject}}</p>
                        <div class="dec-list fl-wrap">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @endif
        <!-- 1 -->
        <!-- 1 -->
    </div>
    <div class="sec-number">04.</div>
</div>

</section>