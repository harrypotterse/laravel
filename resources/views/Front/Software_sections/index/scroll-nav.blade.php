<div class="page-scroll-nav fl-wrap">
    <nav class="scroll-init color2-bg">
        <ul class="no-list-style">   
                @if (count($banner)>0)
                @foreach ($banner as $item_banner)
                <li><a class="scroll-link fbgs" href="{{ $item_banner->css}}" data-bgscr="{{Request::root()}}/Front/images/bg/long/{{ $item_banner->Image}}" data-bgtex="{{ $item_banner->Title}}"><span>{{ $item_banner->Title}}</span></a></li>
                @endforeach
                @endif
        </ul>
    </nav>
    <div class="arrowpagenav"></div>
</div>