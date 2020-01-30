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
                <div class="nav-holder-dec color-bg"></div>
                <div class="nav-overlay"></div>
                <!-- fixed-column-wrap -->
                @yield('fixed')
                <!-- fixed-column-wrap end -->
                <!-- column-wrap -->
                <div class="column-wrap  ">
                    <!--content -->
                    @yield('content')
                </div>
                <!--content  end -->
                <!--footer-->
                <div class="height-emulator fl-wrap"></div>
                @include('Front\main\footer')
            </div>
            <!-- content-holder end -->
        </div>
        <!--wrapper end -->
        <!-- cursor-->
        <div class="element">
            <div class="element-item"></div>
        </div>
    </div>
    <!--=============== scripts  ===============-->
    @include('Front\main\js')
</body>

</html>