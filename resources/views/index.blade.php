<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Omnitextsolution</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ url('css/bootstrap-responsive.min.css')}}">
    <link rel="stylesheet" href="{{ url('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ url('css/main.css')}}">
    <link rel="stylesheet" href="{{ url('css/sl-slide.css')}}">

    <script src="{{ url('js/vendor/modernizr-2.6.2-respond-1.1.0.min.js')}}"></script>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>

<body>

    <!--Header-->
    <header class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a id="logo" class="pull-left" href="{{ url('index')}} "></a><br>
                <!-- <a id="logo" href="" class="pull-left"><h2>Omni Text Solution</h2></a> -->
                <div class="nav-collapse collapse pull-right">
                    <ul class="nav">
                        <li class="active"><a href="{{ url('index')}} ">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us<i class="icon-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Who We Are</a></li>
                                <li><a href="#">Portfolio</a></li>
                                <li><a href="faq.html">Testimonials</a></li>
                                <li><a href="#">Our Writers</a></li>
                                <li><a href="#">Blog</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Survices<i class="icon-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Our Services</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                
                            </ul>
                        </li>
                        <li><a href="#">Why Us</a></li>
                        <li><a href="#">How It Works</a></li>
                        <li><a href="#">Order</a></li>
                        <li><a href="#">FAQ</a></li> 
                        <li><a href="contact">Contact</a></li>
                        @if( Auth::check() )
                            
                            <li class="login">
                                <a title="logout"  href="{{url('/auth/logout')}}"><i class="icon-lock"></i></a>
                            </li>
                        @else
                            <li class="login">
                                <a title="login"  href="{{url('/authentication/login')}}"><i class="icon-lock"></i></a>
                            </li>
                        @endif

                        
                    </ul>        
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </header>
    <!-- /header -->
    @yield('content')

<!--Bottom-->
<section id="bottom" class="main">
    <!--Container-->
    <div class="container">

        <!--row-fluids-->
        <div class="row-fluid">

            <!--Contact Form-->
            <div class="span3">
                <h4>ADDRESS</h4>
                <ul class="unstyled address">
                    <li>
                        <i class="icon-home"></i><strong>Address:</strong> Kupondole, Lalitpur<br>Nepal
                    </li>
                    <li>
                        <i class="icon-envelope"></i>
                        <strong>Email: </strong> info@omnitextsolution.com
                    </li>
                    <li>
                        <i class="icon-globe"></i>
                        <strong>Website:</strong> www.omnitextsolution.com
                    </li>
                    <li>
                        <i class="icon-phone"></i>
                        <strong>Phone No:</strong> +9779815720356
                    </li>
                </ul>
            </div>
            <!--End Contact Form-->

            <!--Important Links-->
            <div id="tweets" class="span3">
                <h4>OUR COMPANY</h4>
                <div>
                    <ul class="arrow">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Copyright</a></li>
                        <li><a href="#">We are hiring</a></li>
                        <li><a href="#">Clients</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>  
            </div>
            <!--Important Links-->

            <!--Archives-->
            <div id="archives" class="span3">
                <h4>ARCHIVES</h4>
                <div>
                    <ul class="arrow">
                        <li><a href="#">December 2012 (1)</a></li>
                        <li><a href="#">November 2012 (5)</a></li>
                        <li><a href="#">October 2012 (8)</a></li>
                        <li><a href="#">September 2012 (10)</a></li>
                        <li><a href="#">August 2012 (29)</a></li>
                        <li><a href="#">July 2012 (1)</a></li>
                        <li><a href="#">June 2012 (31)</a></li>
                    </ul>
                </div>
            </div>
            <!--End Archives-->

            <div class="span3">
                <h4>WE ACCEPT</h4>
                <div class="first">
                    <ul class="thumbnails">
                      <li class="span3">
                        <a href="#" title="01 (254) by Victor1558, on Flickr"><img src="{{ url('images/payments/payoneer.png')}}" width="75" height="75" alt="payoneer"></a>
                    </li>
                    <li class="span3">
                        <a href="#" title="01 (65) by Victor1558, on Flickr"><img src="{{ url('images/payments/mastercard.jpg')}}" width="75" height="75" alt="master card"></a>
                    </li>
                    <li class="span3">
                        <a href="#" title="01 (65) by Victor1558, on Flickr"><img src="{{ url('images/payments/visa.jpg')}}" width="75" height="75" alt="visa card"></a>
                    </li>
                    
                    
                </ul>
            </div>
            <div class="row-fluid">
                <ul class="thumbnails">
                    <li class="span3">
                        <a href="#" title="01 (65) by Victor1558, on Flickr"><img src="{{ url('images/payments/skrill.png')}}" width="75" height="75" alt="Skrill"></a>
                    </li>
                    <li class="span3">
                        <a href="#" title="01 (65) by Victor1558, on Flickr"><img src="{{ url('images/payments/paypal.png')}}" width="75" height="75" alt="paypal"></a>
                    </li>
                    <li class="span3">
                        <a href="#" title="01 (65) by Victor1558, on Flickr"><img src="{{ url('images/payments/e-sewa.png')}}" width="75" height="75" alt="e-sewa"></a>
                    </li>
                </ul>
            </div>

        </div>
        

    </div>
    <!--/row-fluid-->
</div>
<!--/container-->

</section>
<!--/bottom-->

<!--Footer-->
<footer id="footer">
    <div class="container">
        <div class="row-fluid">
            <div class="span5 cp">
                &copy; 2015 <a target="_blank" href="http://omnitextsolution.com/" title="Complete Writing Solution"> Omni Text Solution</a>. All Rights Reserved.
            </div>
            <!--/Copyright-->

            <div class="span6">
                <ul class="social pull-right">
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-pinterest"></i></a></li>
                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                    <li><a href="#"><i class="icon-google-plus"></i></a></li>                       
                    <li><a href="#"><i class="icon-youtube"></i></a></li>
                    <li><a href="#"><i class="icon-tumblr"></i></a></li>                        
                    <li><a href="#"><i class="icon-dribbble"></i></a></li>
                    <li><a href="#"><i class="icon-rss"></i></a></li>
                    <li><a href="#"><i class="icon-github-alt"></i></a></li>
                    <li><a href="#"><i class="icon-instagram"></i></a></li>                   
                </ul>
            </div>

            <div class="span1">
                <a id="gototop" class="gototop pull-right" href="#"><i class="icon-angle-up"></i></a>
            </div>
            <!--/Goto Top-->
        </div>
    </div>
</footer>
<!--/Footer-->

<!--  Login form -->
<div class="modal hide fade in" id="loginForm" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Login Form</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form class="form-inline"  method="post" id="form-login" action="{{ url('authentication/login') }}">
            <input type="hidden" name="_token" value="{{ csrf_token()}}"> 
            <input type="text" class="input-small" name="email" placeholder="Email">
            <input type="password" class="input-small" name="password" placeholder="Password">
            <label class="checkbox">
                <input type="checkbox"> Remember me
            </label>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
        <a href="#">Forgot your password?</a>
    </div>
    <!--/Modal Body-->
</div>
<!--  /Login form -->

<script src="{{ url('js/vendor/jquery-1.9.1.min.js')}}"></script>
<script src="{{ url('js/vendor/bootstrap.min.js')}}"></script>
<script src="{{ url('js/main.js')}}"></script>
<!-- Required javascript files for Slider -->
<script src="{{ url('js/jquery.ba-cond.min.js')}}"></script>
<script src="{{ url('js/jquery.slitslider.js')}}"></script>
<!-- /Required javascript files for Slider -->

<!-- SL Slider -->
<script type="text/javascript"> 
$(function() {
    var Page = (function() {

        var $navArrows = $( '#nav-arrows' ),
        slitslider = $( '#slider' ).slitslider( {
            autoplay : true
        } ),

        init = function() {
            initEvents();
        },
        initEvents = function() {
            $navArrows.children( ':last' ).on( 'click', function() {
                slitslider.next();
                return false;
            });

            $navArrows.children( ':first' ).on( 'click', function() {
                slitslider.previous();
                return false;
            });
        };

        return { init : init };

    })();

    Page.init();
});
</script>
<!-- /SL Slider -->
</body>
</html>