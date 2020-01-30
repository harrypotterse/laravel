<div class="gallery-items min-pad  four-column   fl-wrap  ">
    <!-- gallery-item-->
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
    <div class="container">
        {{ $portfolio->links() }}
    </div>


</div>