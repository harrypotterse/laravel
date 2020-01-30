<div class="nav-holder but-hol">
    <div class="nav-scroll-bar-wrap fl-wrap">
        <a href="index.php" class=" logo_menu"><img src="{{ URL('Front/images/logo2.png')}}" alt=""></a>
        <div class="nav-container fl-wrap">
            <!-- nav -->
            <nav class="nav-inner" id="menu">
                <ul>
                    <li>
                        <a href="{{url('/')}}" class="act-link">{{trans('programming.home')}}</a>
                    </li>
                    <li>
                        <a href="/about" >{{trans('programming.About')}}</a>
                    </li>
                    <li>
                        <a href="">{{trans('programming.Services')}}</a>
                      
                        <ul>
                                @if ( Session::get('locale') =="en")
                                @foreach(\App\services::take(7)->orderBy('id','desc')->where('Language', 'English')->get() as $item_services)
                                <li><a href="service-single.php" >{{ $item_services->Title}}</a></li>
                                @endforeach
                                @else
                                @foreach(\App\services::take(7)->orderBy('id','desc')->where('Language', 'Arabic')->get() as $item_services)
                                <li><a href="service-single.php" >{{ $item_services->Title}}</a></li>
                                @endforeach
                                @endif
                         
                        </ul>    
                    </li>
                    <li><a href="{{url('/portfolio')}}" >{{trans('programming.Projects')}}</a></li>
                    <li><a href="{{url('/blog')}}" >{{trans('programming.Blog')}}</a></li>
                    <li><a href="jobs.php" >{{trans('programming.Functions')}}</a></li>
                    <li><a href="{{url('/contact')}}" >{{trans('programming.Communication')}}</a></li>
                </ul>
            </nav>
            <!-- nav end-->
        </div>
    </div>
    <div class="share-wrapper">
           @if ( Session::get('locale')  =="en")
           <span class="share-title"><a href="lang/ar" >Arabic</a></span>
           @else
           <span class="share-title"><a href="lang/en" >english</a></span>
           @endif
        <span class="share-title">{{trans('programming.Sher')}} : </span>
        <div class="share-container"></div>
    </div>
    <div class="nav-holder-line"></div>
</div>
<div class="nav-holder-dec color-bg"></div>
<div class="nav-overlay"></div>
<!-- nav-holder end -->            
<div class="nav-holder-dec color-bg"></div>
<div class="nav-overlay"></div>
<!-- nav-holder end -->  
<!--content -->