<!DOCTYPE HTML>
<html lang="en">
<head>
    @include('Front.main.css')
    <style>
        .breek {
            margin-top: 1%;
        }
    </style>
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
                @include('Front\main\nav')
                <!-- nav-holder end -->
                <!-- fixed-column-wrap -->
                @yield('fixed')
                <!-- hero-wrap end-->
                <!-- column-wrap -->
                <div class="column-wrap  ">
                    <!--content -->
                    <div class="content">
                        @yield('content')
                    </div>
                </div>
                <!--content  end -->
                <!--footer-->
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

</html>