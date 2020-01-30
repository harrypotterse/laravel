<header class="main-header">
   
    <a href="/" class="logo-holder "><img src="{{URL('Front/images/logo.png')}}" alt=""></a>
    <!-- nav-button-wrap-->
    <div class="nav-button but-hol">
        <span class="nos"></span>
        <span class="ncs"></span>
        <span class="nbs"></span>
        <div class="menu-button-text">{{trans('programming.List')}}</div>
    </div>
    <!-- nav-button-wrap end-->
    <div class="header-social">
        <ul>
            @foreach(DB::table('social')->orderBy('id','desc')->get() as $item_social)
            <li><a href="{{ $item_social->link}}" target="_blank"><i class="{{ $item_social->Image}}"></i></a></li>
            @endforeach
        </ul>
    </div>
</header>