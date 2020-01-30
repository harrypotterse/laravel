<!DOCTYPE HTML>
<html lang="en">
<head>
        @include('Front.main.css')
        @stack('css')
    </head>

<body>
    <!--loader-->
    @include('Front\main\loader')
    <!--loader end-->
    <!-- Main  -->
    <div id="main">
        <!-- header-->
        @include('Front\main\header')
        <!-- header end -->
        <!-- wrapper -->
        <div id="wrapper">
            <!-- content-holder  -->
            <div class="content-holder scroll-content" data-pagetitle="home slideshow">
                <!-- nav-holder-->
                @include('Front\main\nav')
                <div class="nav-holder-dec color-bg"></div>
                <div class="nav-overlay"></div>
                <!-- nav-holder end -->
                <div class="nav-holder-dec color-bg"></div>
                <div class="nav-overlay"></div>
                <!-- nav-holder end -->
                <!--content -->
                <div class="content dark-content portf-wrap">
                    @yield('portf')    
                </div>
                <!--content  end -->
                <div class="limit-box fl-wrap"></div>
                <!--footer-->
                <div class="height-emulator fl-wrap"></div>
                @include('Front\main\footer')
                <!--footer  end -->
            </div>
            <!-- content-holder end -->
        </div>
        <!--wrapper end -->
        <!-- cursor-->
        <div class="element">
            <div class="element-item"></div>
        </div>
        <!-- cursor end-->
    </div>
    <!-- Main end -->
    <!--=============== scripts  ===============-->
    @include('Front\main\js')
</body>
<!-- Mirrored from nastik.kwst.net/portfolio.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Oct 2019 21:46:55 GMT -->

</html>