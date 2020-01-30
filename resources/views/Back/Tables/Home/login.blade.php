<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
    body {
        margin: 0;
        padding: 0;
        background: url(http://www.vijayyadav.tk/images/Background.jpg);
        background-attachment: fixed;
        background-size: cover;
        background-position: center;
        font-family: sans-serif;

    }

    .loginbox {
        width: 320px;
        height: 420px;
        background: #000;
        color: #fff;
        top: 50%;
        left: 50%;
        ;
        position: absolute;
        transform: translate(-50%, -50%);
        box-sizing: border-box;
        padding: 70px 30px;
    }

    .avatar {
        width: 100px;
        height: 100px;
        border-right-style: 50%;
        position: absolute;
        top: -50px;
        left: calc(50% - 50px);

    }

    h1 {
        margin: 0;
        padding: 0 0 20px;
        text-align: center;
        font-size: 22px;


    }

    .loginbox p {
        margin: 0;
        padding: 0;
        font-weight: bold;
    }

    .loginbox input {
        width: 100%;
        margin-bottom: 20px;
    }

    .loginbox input[type="text"],
    input[type="password"] {
        border: none;
        border-bottom: 1px solid #fff;
        background: transparent;
        outline: none;
        height: 40px;
        color: #fff;
        font-size: 16px;

    }

    .loginbox input[type="submit"] {
        border: none;
        outline: none;
        height: 40px;
        background: #5199e4;
        color: #fff;
        font-size: 18px;
        border-radius: 20px;
    }

    .loginbox input[type="submit"]:hover {
        cursor: pointer;
        background: #ff4f6d;
        color: #000;

    }

    .loginbox a {
        text-decoration: none;
        font-size: 12px;
        line-height: 20px;
        color: darkgrey;

    }

    .loginbox a:hover {
        color: #ff4f6d;

    }
    @import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");

/*
The above link can also go in HTML document as a link in head.
Rather than @import in an external CSS file,
The following code into the <head> section of your site's HTML.
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
*/


/*
 * Social Buttons for Bootstrap
 *
 * Copyright 2013-2014 Panayiotis Lipiridis
 * Licensed under the MIT License
 *
 * https://github.com/lipis/bootstrap-social
 */

.btn-social{position:relative;padding-left:44px;text-align:left;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}.btn-social :first-child{position:absolute;left:0;top:0;bottom:0;width:32px;line-height:34px;font-size:1.6em;text-align:center;border-right:1px solid rgba(0,0,0,0.2)}
.btn-social.btn-lg{padding-left:61px}.btn-social.btn-lg :first-child{line-height:45px;width:45px;font-size:1.8em}
.btn-social.btn-sm{padding-left:38px}.btn-social.btn-sm :first-child{line-height:28px;width:28px;font-size:1.4em}
.btn-social.btn-xs{padding-left:30px}.btn-social.btn-xs :first-child{line-height:20px;width:20px;font-size:1.2em}
.btn-social-icon{position:relative;padding-left:44px;text-align:left;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;height:34px;width:34px;padding:0}.btn-social-icon :first-child{position:absolute;left:0;top:0;bottom:0;width:32px;line-height:34px;font-size:1.6em;text-align:center;border-right:1px solid rgba(0,0,0,0.2)}
.btn-social-icon.btn-lg{padding-left:61px}.btn-social-icon.btn-lg :first-child{line-height:45px;width:45px;font-size:1.8em}
.btn-social-icon.btn-sm{padding-left:38px}.btn-social-icon.btn-sm :first-child{line-height:28px;width:28px;font-size:1.4em}
.btn-social-icon.btn-xs{padding-left:30px}.btn-social-icon.btn-xs :first-child{line-height:20px;width:20px;font-size:1.2em}
.btn-social-icon :first-child{border:none;text-align:center;width:100% !important}
.btn-social-icon.btn-lg{height:45px;width:45px;padding-left:0;padding-right:0}
.btn-social-icon.btn-sm{height:30px;width:30px;padding-left:0;padding-right:0}
.btn-social-icon.btn-xs{height:22px;width:22px;padding-left:0;padding-right:0}
.btn-bitbucket{color:#fff;background-color:#205081;border-color:rgba(0,0,0,0.2)}.btn-bitbucket:hover,.btn-bitbucket:focus,.btn-bitbucket:active,.btn-bitbucket.active,.open .dropdown-toggle.btn-bitbucket{color:#fff;background-color:#183c60;border-color:rgba(0,0,0,0.2)}
.btn-bitbucket:active,.btn-bitbucket.active,.open .dropdown-toggle.btn-bitbucket{background-image:none}
.btn-bitbucket.disabled,.btn-bitbucket[disabled],fieldset[disabled] .btn-bitbucket,.btn-bitbucket.disabled:hover,.btn-bitbucket[disabled]:hover,fieldset[disabled] .btn-bitbucket:hover,.btn-bitbucket.disabled:focus,.btn-bitbucket[disabled]:focus,fieldset[disabled] .btn-bitbucket:focus,.btn-bitbucket.disabled:active,.btn-bitbucket[disabled]:active,fieldset[disabled] .btn-bitbucket:active,.btn-bitbucket.disabled.active,.btn-bitbucket[disabled].active,fieldset[disabled] .btn-bitbucket.active{background-color:#205081;border-color:rgba(0,0,0,0.2)}
.btn-dropbox{color:#fff;background-color:#1087dd;border-color:rgba(0,0,0,0.2)}.btn-dropbox:hover,.btn-dropbox:focus,.btn-dropbox:active,.btn-dropbox.active,.open .dropdown-toggle.btn-dropbox{color:#fff;background-color:#0d70b7;border-color:rgba(0,0,0,0.2)}
.btn-dropbox:active,.btn-dropbox.active,.open .dropdown-toggle.btn-dropbox{background-image:none}
.btn-dropbox.disabled,.btn-dropbox[disabled],fieldset[disabled] .btn-dropbox,.btn-dropbox.disabled:hover,.btn-dropbox[disabled]:hover,fieldset[disabled] .btn-dropbox:hover,.btn-dropbox.disabled:focus,.btn-dropbox[disabled]:focus,fieldset[disabled] .btn-dropbox:focus,.btn-dropbox.disabled:active,.btn-dropbox[disabled]:active,fieldset[disabled] .btn-dropbox:active,.btn-dropbox.disabled.active,.btn-dropbox[disabled].active,fieldset[disabled] .btn-dropbox.active{background-color:#1087dd;border-color:rgba(0,0,0,0.2)}
.btn-facebook{color:#fff;background-color:#3b5998;border-color:rgba(0,0,0,0.2)}.btn-facebook:hover,.btn-facebook:focus,.btn-facebook:active,.btn-facebook.active,.open .dropdown-toggle.btn-facebook{color:#fff;background-color:#30487b;border-color:rgba(0,0,0,0.2)}
.btn-facebook:active,.btn-facebook.active,.open .dropdown-toggle.btn-facebook{background-image:none}
.btn-facebook.disabled,.btn-facebook[disabled],fieldset[disabled] .btn-facebook,.btn-facebook.disabled:hover,.btn-facebook[disabled]:hover,fieldset[disabled] .btn-facebook:hover,.btn-facebook.disabled:focus,.btn-facebook[disabled]:focus,fieldset[disabled] .btn-facebook:focus,.btn-facebook.disabled:active,.btn-facebook[disabled]:active,fieldset[disabled] .btn-facebook:active,.btn-facebook.disabled.active,.btn-facebook[disabled].active,fieldset[disabled] .btn-facebook.active{background-color:#3b5998;border-color:rgba(0,0,0,0.2)}
.btn-flickr{color:#fff;background-color:#ff0084;border-color:rgba(0,0,0,0.2)}.btn-flickr:hover,.btn-flickr:focus,.btn-flickr:active,.btn-flickr.active,.open .dropdown-toggle.btn-flickr{color:#fff;background-color:#d6006f;border-color:rgba(0,0,0,0.2)}
.btn-flickr:active,.btn-flickr.active,.open .dropdown-toggle.btn-flickr{background-image:none}
.btn-flickr.disabled,.btn-flickr[disabled],fieldset[disabled] .btn-flickr,.btn-flickr.disabled:hover,.btn-flickr[disabled]:hover,fieldset[disabled] .btn-flickr:hover,.btn-flickr.disabled:focus,.btn-flickr[disabled]:focus,fieldset[disabled] .btn-flickr:focus,.btn-flickr.disabled:active,.btn-flickr[disabled]:active,fieldset[disabled] .btn-flickr:active,.btn-flickr.disabled.active,.btn-flickr[disabled].active,fieldset[disabled] .btn-flickr.active{background-color:#ff0084;border-color:rgba(0,0,0,0.2)}
.btn-foursquare{color:#fff;background-color:#0072b1;border-color:rgba(0,0,0,0.2)}.btn-foursquare:hover,.btn-foursquare:focus,.btn-foursquare:active,.btn-foursquare.active,.open .dropdown-toggle.btn-foursquare{color:#fff;background-color:#005888;border-color:rgba(0,0,0,0.2)}
.btn-foursquare:active,.btn-foursquare.active,.open .dropdown-toggle.btn-foursquare{background-image:none}
.btn-foursquare.disabled,.btn-foursquare[disabled],fieldset[disabled] .btn-foursquare,.btn-foursquare.disabled:hover,.btn-foursquare[disabled]:hover,fieldset[disabled] .btn-foursquare:hover,.btn-foursquare.disabled:focus,.btn-foursquare[disabled]:focus,fieldset[disabled] .btn-foursquare:focus,.btn-foursquare.disabled:active,.btn-foursquare[disabled]:active,fieldset[disabled] .btn-foursquare:active,.btn-foursquare.disabled.active,.btn-foursquare[disabled].active,fieldset[disabled] .btn-foursquare.active{background-color:#0072b1;border-color:rgba(0,0,0,0.2)}
.btn-github{color:#fff;background-color:#444;border-color:rgba(0,0,0,0.2)}.btn-github:hover,.btn-github:focus,.btn-github:active,.btn-github.active,.open .dropdown-toggle.btn-github{color:#fff;background-color:#303030;border-color:rgba(0,0,0,0.2)}
.btn-github:active,.btn-github.active,.open .dropdown-toggle.btn-github{background-image:none}
.btn-github.disabled,.btn-github[disabled],fieldset[disabled] .btn-github,.btn-github.disabled:hover,.btn-github[disabled]:hover,fieldset[disabled] .btn-github:hover,.btn-github.disabled:focus,.btn-github[disabled]:focus,fieldset[disabled] .btn-github:focus,.btn-github.disabled:active,.btn-github[disabled]:active,fieldset[disabled] .btn-github:active,.btn-github.disabled.active,.btn-github[disabled].active,fieldset[disabled] .btn-github.active{background-color:#444;border-color:rgba(0,0,0,0.2)}
.btn-google-plus{color:#fff;background-color:#dd4b39;border-color:rgba(0,0,0,0.2)}.btn-google-plus:hover,.btn-google-plus:focus,.btn-google-plus:active,.btn-google-plus.active,.open .dropdown-toggle.btn-google-plus{color:#fff;background-color:#ca3523;border-color:rgba(0,0,0,0.2)}
.btn-google-plus:active,.btn-google-plus.active,.open .dropdown-toggle.btn-google-plus{background-image:none}
.btn-google-plus.disabled,.btn-google-plus[disabled],fieldset[disabled] .btn-google-plus,.btn-google-plus.disabled:hover,.btn-google-plus[disabled]:hover,fieldset[disabled] .btn-google-plus:hover,.btn-google-plus.disabled:focus,.btn-google-plus[disabled]:focus,fieldset[disabled] .btn-google-plus:focus,.btn-google-plus.disabled:active,.btn-google-plus[disabled]:active,fieldset[disabled] .btn-google-plus:active,.btn-google-plus.disabled.active,.btn-google-plus[disabled].active,fieldset[disabled] .btn-google-plus.active{background-color:#dd4b39;border-color:rgba(0,0,0,0.2)}
.btn-instagram{color:#fff;background-color:#3f729b;border-color:rgba(0,0,0,0.2)}.btn-instagram:hover,.btn-instagram:focus,.btn-instagram:active,.btn-instagram.active,.open .dropdown-toggle.btn-instagram{color:#fff;background-color:#335d7e;border-color:rgba(0,0,0,0.2)}
.btn-instagram:active,.btn-instagram.active,.open .dropdown-toggle.btn-instagram{background-image:none}
.btn-instagram.disabled,.btn-instagram[disabled],fieldset[disabled] .btn-instagram,.btn-instagram.disabled:hover,.btn-instagram[disabled]:hover,fieldset[disabled] .btn-instagram:hover,.btn-instagram.disabled:focus,.btn-instagram[disabled]:focus,fieldset[disabled] .btn-instagram:focus,.btn-instagram.disabled:active,.btn-instagram[disabled]:active,fieldset[disabled] .btn-instagram:active,.btn-instagram.disabled.active,.btn-instagram[disabled].active,fieldset[disabled] .btn-instagram.active{background-color:#3f729b;border-color:rgba(0,0,0,0.2)}
.btn-linkedin{color:#fff;background-color:#007bb6;border-color:rgba(0,0,0,0.2)}.btn-linkedin:hover,.btn-linkedin:focus,.btn-linkedin:active,.btn-linkedin.active,.open .dropdown-toggle.btn-linkedin{color:#fff;background-color:#005f8d;border-color:rgba(0,0,0,0.2)}
.btn-linkedin:active,.btn-linkedin.active,.open .dropdown-toggle.btn-linkedin{background-image:none}
.btn-linkedin.disabled,.btn-linkedin[disabled],fieldset[disabled] .btn-linkedin,.btn-linkedin.disabled:hover,.btn-linkedin[disabled]:hover,fieldset[disabled] .btn-linkedin:hover,.btn-linkedin.disabled:focus,.btn-linkedin[disabled]:focus,fieldset[disabled] .btn-linkedin:focus,.btn-linkedin.disabled:active,.btn-linkedin[disabled]:active,fieldset[disabled] .btn-linkedin:active,.btn-linkedin.disabled.active,.btn-linkedin[disabled].active,fieldset[disabled] .btn-linkedin.active{background-color:#007bb6;border-color:rgba(0,0,0,0.2)}
.btn-tumblr{color:#fff;background-color:#2c4762;border-color:rgba(0,0,0,0.2)}.btn-tumblr:hover,.btn-tumblr:focus,.btn-tumblr:active,.btn-tumblr.active,.open .dropdown-toggle.btn-tumblr{color:#fff;background-color:#1f3346;border-color:rgba(0,0,0,0.2)}
.btn-tumblr:active,.btn-tumblr.active,.open .dropdown-toggle.btn-tumblr{background-image:none}
.btn-tumblr.disabled,.btn-tumblr[disabled],fieldset[disabled] .btn-tumblr,.btn-tumblr.disabled:hover,.btn-tumblr[disabled]:hover,fieldset[disabled] .btn-tumblr:hover,.btn-tumblr.disabled:focus,.btn-tumblr[disabled]:focus,fieldset[disabled] .btn-tumblr:focus,.btn-tumblr.disabled:active,.btn-tumblr[disabled]:active,fieldset[disabled] .btn-tumblr:active,.btn-tumblr.disabled.active,.btn-tumblr[disabled].active,fieldset[disabled] .btn-tumblr.active{background-color:#2c4762;border-color:rgba(0,0,0,0.2)}
.btn-twitter{color:#fff;background-color:#55acee;border-color:rgba(0,0,0,0.2)}.btn-twitter:hover,.btn-twitter:focus,.btn-twitter:active,.btn-twitter.active,.open .dropdown-toggle.btn-twitter{color:#fff;background-color:#309aea;border-color:rgba(0,0,0,0.2)}
.btn-twitter:active,.btn-twitter.active,.open .dropdown-toggle.btn-twitter{background-image:none}
.btn-twitter.disabled,.btn-twitter[disabled],fieldset[disabled] .btn-twitter,.btn-twitter.disabled:hover,.btn-twitter[disabled]:hover,fieldset[disabled] .btn-twitter:hover,.btn-twitter.disabled:focus,.btn-twitter[disabled]:focus,fieldset[disabled] .btn-twitter:focus,.btn-twitter.disabled:active,.btn-twitter[disabled]:active,fieldset[disabled] .btn-twitter:active,.btn-twitter.disabled.active,.btn-twitter[disabled].active,fieldset[disabled] .btn-twitter.active{background-color:#55acee;border-color:rgba(0,0,0,0.2)}
.btn-vk{color:#fff;background-color:#587ea3;border-color:rgba(0,0,0,0.2)}.btn-vk:hover,.btn-vk:focus,.btn-vk:active,.btn-vk.active,.open .dropdown-toggle.btn-vk{color:#fff;background-color:#4a6a89;border-color:rgba(0,0,0,0.2)}
.btn-vk:active,.btn-vk.active,.open .dropdown-toggle.btn-vk{background-image:none}
.btn-vk.disabled,.btn-vk[disabled],fieldset[disabled] .btn-vk,.btn-vk.disabled:hover,.btn-vk[disabled]:hover,fieldset[disabled] .btn-vk:hover,.btn-vk.disabled:focus,.btn-vk[disabled]:focus,fieldset[disabled] .btn-vk:focus,.btn-vk.disabled:active,.btn-vk[disabled]:active,fieldset[disabled] .btn-vk:active,.btn-vk.disabled.active,.btn-vk[disabled].active,fieldset[disabled] .btn-vk.active{background-color:#587ea3;border-color:rgba(0,0,0,0.2)}

element.style {
}
.loginbox input[type="submit"]:hover {
    cursor: pointer;
    background: #60baff;
    color: #000;
}
.loginbox input[type="submit"] {
    border: none;
    outline: none;
    height: 40px;
    background: #5199e4;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.alert-success {
    color: #d60000;
    background-color: #000000 !important;
    border-color: #000000 !important;
    font-size: 17px;
    text-transform: uppercase;
    font-weight: 700;
}
</style>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<div class="loginbox">

    <img src="http://www.vijayyadav.tk/images/avatar.png" class="avatar">
    <h1>Login Here</h1>
    <form action="{{ route('login.user') }}" method="POST">
        @csrf
        <p>Email</p>
        <input type="text" name="email" placeholder="email">
        <p>Password</p>
        <input type="Password" name="password" placeholder="Enter Password">
        <input type="submit" name="" value="login">
        <div class="text-center">
                <!-- just add href= for your links, like this: -->
                <a href="auth/facebook" class="btn btn-social-icon btn-facebook">
                <i class="fa fa-facebook"></i></a>    
                {{--  <a class="btn btn-social-icon btn-bitbucket"><i class="fa fa-bitbucket"></i></a>  --}}
                <a class="btn btn-social-icon btn-dropbox"><i class="fa fa-dropbox"></i></a>
                {{--  <a class="btn btn-social-icon btn-flickr"><i class="fa fa-flickr"></i></a>  --}}
                {{--  <a class="btn btn-social-icon btn-foursquare"><i class="fa fa-foursquare"></i></a>  --}}
                <a class="btn btn-social-icon btn-github"><i class="fa fa-github"></i></a>
                <a class="btn btn-social-icon btn-google-plus"><i class=""></i></a>
                <a class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
                <a class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
                {{--  <a class="btn btn-social-icon btn-tumblr"><i class="fa fa-tumblr"></i></a>  --}}
                <a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                {{--  <a class="btn btn-social-icon btn-vk"><i class="fa fa-vk"></i></a>  --}}
              </div>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        @if(session()->has('alert-success'))
        <div class="alert alert-success">
            {{ session()->get('alert-success') }}
        </div>
        @endif
    </form>
</div>
</div>