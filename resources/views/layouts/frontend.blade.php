<!DOCTYPE html>
<html lang="en">
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Seosight - Shop</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/crumina-fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/normalize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/grid.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/styles.css') }}">


    <!--Plugins styles-->

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/swiper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/primary-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/magnific-popup.css') }}">

    <!--Styles for RTL-->

    <!--<link rel="stylesheet" type="text/css" href="css/rtl.css">-->

    <!--External fonts-->

    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>

</head>


<body class=" ">

<header class="header" id="site-header">

    <div class="container">

        <div class="header-content-wrapper">

            <ul class="nav-add">
                <li style="margin-right:820px;">
                    <a href="{{ route('homepage') }}" style="font-size: 2em;">Basic E-commerce</a>
                </li>
                <li class="cart">

                    <a href="#" class="js-cart-animate">
                        <i class="seoicon-basket"></i>
                        <span class="cart-count">0</span>
                    </a>

                    <div class="cart-popup-wrap">
                        <div class="popup-cart">
                            <h4 class="title-cart">No products in the cart!</h4>
                            <p class="subtitle">Please make your choice.</p>
                            <div class="btn btn-small btn--dark">
                                <span class="text">view all catalog</span>
                            </div>
                        </div>
                    </div>

                </li>
            </ul>
        </div>

    </div>

</header>


<div class="content-wrapper">

    <div class="container">
        <div class="row pt120">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="heading align-center mb60">
                    <h4 class="h1 heading-title">Basic E-commerce</h4>
                    <p class="heading-text">Buy everything, and we ship to you.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- End Books products grid -->

    @yield('page')
    
</div>

<!-- Footer -->

<footer class="footer">
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p style="text-align: center;">Copyright © 2020 Basic E-commerce. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>



<script src="{{ asset('frontend/js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('frontend/js/crum-mega-menu.js') }}"></script>
<script src="{{ asset('frontend/js/swiper.jquery.min.js') }}"></script>
<script src="{{ asset('frontend/js/theme-plugins.js') }}"></script>
<script src="{{ asset('frontend/js/main.js') }}"></script>
<script src="{{ asset('frontend/js/form-actions.js') }}"></script>

<script src="{{ asset('frontend/js/velocity.min.js') }}"></script>
<script src="{{ asset('frontend/js/ScrollMagic.min.js') }}"></script>
<script src="{{ asset('frontend/js/animation.velocity.min.js') }}"></script>

<!-- ...end JS Script -->


</body>

<!-- Mirrored from theme.crumina.net/html-seosight/16_shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Nov 2016 13:03:04 GMT -->
</html>