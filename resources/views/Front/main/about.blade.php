<!DOCTYPE HTML>
<html lang="en">
<head>
    @include('Front.main.css')
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
                @yield('about')
                @include('Front\main\footer')
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

</html>