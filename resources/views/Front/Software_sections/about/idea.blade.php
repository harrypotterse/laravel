<section class="hidden-section bot-element" id="sec5">
    <div class="container">
        <div class="section-title fl-wrap">
            <h3> {{ $array['Division1']->component11 }}</h3>
            <p> {{ $array['Division1']->component12 }} </p>
        </div>
        <!--process-wrap  -->
        <div class="process-wrap fl-wrap">
            <ul>
                @php
                $id=1;
                @endphp
                @if (count($idea)>0)
                @foreach ($idea as $item_idea)
                <li>
                    <div class="time-line-icon">
                        <i class="fab fa-slideshare"></i>
                    </div>
                    <h4>{{ $item_idea->Title}}</h4>
                    <div class="process-details">
                        <h6>{{ $item_idea->Sub}}</h6>
                        <p>{{ $item_idea->Subject}}</p>
                    </div>
                    <span class="process-numder">0 {{ $id++ }}</span>
                </li>
                @endforeach
                @endif

            </ul>
        </div>
        <!--process-wrap   end-->
        <div class="sec-number">03.</div>
    </div>
</section>