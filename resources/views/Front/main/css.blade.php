<!--=============== basic  ===============-->
<meta charset="UTF-8">
<title>RAYYAN</title>
<meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="robots" content="index, follow" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<!--=============== css  ===============-->
<link rel="stylesheet" href="{{ URL('Front/css/reset.css')}}" />
<!--===============================================================================================-->
<link rel="stylesheet" href="{{ URL('Front/css/plugins.css')}}" />
<!--===============================================================================================-->
<link rel="stylesheet" href="{{ URL('Front/css/style.css')}}" />
<!--===============================================================================================-->
<link rel="stylesheet" href="{{ URL('Front/css/color.css')}}" />
<!--===============================================================================================-->
@if ( Session::get('locale') =="en")
@else
<link rel="stylesheet" href="{{ URL('Front/css/rtl.css')}}" />
@endif
<!--===============================================================================================-->
<link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
<!--=============== favicons ===============-->

<link rel="shortcut icon" href="  {{ URL('Front/images/favicon.ico')}}">
<style>
        .custom-form {
                float: none;
                width: 100%;
                /* position: relative; */
        }

        .alert.alert-success {
                background: white;
                padding: 2%;
                margin-top: 3%;
                border-radius: 7px;
        }
</style>