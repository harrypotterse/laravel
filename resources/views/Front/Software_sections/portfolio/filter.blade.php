<div class="fixed-top-panel filter-panel fl-wrap">
    <div class="fixed-filter-panel_title color-bg">{{trans('programming.Filter')}} <i class="fal fa-long-arrow-right"></i>
    </div>
    <div class="gallery-filters inline-dark-filters">
        <a href="#" class="gallery-filter  gallery-filter-active" data-filter="*">{{trans('programming.projects')}}</a>
        @if (count($sections_pro)>0)
        @foreach ($sections_pro as $item_sections_pro)
        <a href="#" class="gallery-filter" data-filter=".Department{{ $item_sections_pro->id}}">{{ $item_sections_pro->sections}}</a>
        @endforeach
        @endif
    </div>
    <div class="folio-counter">
        <div class="num-album"></div>
        <div class="all-album"></div>
    </div>
</div>