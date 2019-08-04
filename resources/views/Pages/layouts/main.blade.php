<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('assets-home/lib/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets-home/lib/font-awesome/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets-home/lib/select2/css/select2.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets-home/lib/jquery.bxslider/jquery.bxslider.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets-home/lib/owl.carousel/owl.carousel.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets-home/lib/jquery-ui/jquery-ui.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets-home/css/animate.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets-home/css/reset.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets-home/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets-home/css/responsive.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets-home/css/option7.css')}}" />
    {{-- <!-- Main CSS-->--}}
    <link href="{{ asset('dist/css/theme.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('dist/css/custom.min.css') }}" rel="stylesheet" media="all">

    <title>HOMEPAGE</title>
    <style>
        .wapper-page{
            background-color: #fff;margin-top: 20px; padding: 20px
        }
    </style>
</head>
<body class="home option7">
<!-- HEADER -->
<div id="header" class="header">
    <div class="top-header">
        <div class="container">
            <div class="nav-top-links">
                <a class="first-item" href="#">Welcome to KuteShop</a>
                <a href="#">Call Us: +09 957774334</a>
            </div>
            <div class="top-bar-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-pinterest"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
            </div>
            <div class="bolock-cart-topbar" id="cart-block">
                <a title="My cart" href="{{asset('cart-detail')}}">Cart<span class="count">2</span></a>
                <div class="cart-block">
                    <div class="cart-block-content">
                        <h5 class="cart-title">2 Items in my cart</h5>
                        <div class="cart-block-list">
                            <ul>
                                <li class="product-info">
                                    <div class="p-left">
                                        <a href="#" class="remove_link"></a>
                                        <a href="#">
                                            <img class="img-responsive" src="assets-home/data/product-100x122.jpg" alt="p10">
                                        </a>
                                    </div>
                                    <div class="p-right">
                                        <p class="p-name">Donec Ac Tempus</p>
                                        <p class="p-rice">61,19 €</p>
                                        <p>Qty: 1</p>
                                    </div>
                                </li>
                                <li class="product-info">
                                    <div class="p-left">
                                        <a href="#" class="remove_link"></a>
                                        <a href="#">
                                            <img class="img-responsive" src="assets-home/data/product-s5-100x122.jpg" alt="p10">
                                        </a>
                                    </div>
                                    <div class="p-right">
                                        <p class="p-name">Donec Ac Tempus</p>
                                        <p class="p-rice">61,19 €</p>
                                        <p>Qty: 1</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="toal-cart">
                            <span>Total</span>
                            <span class="toal-price pull-right">122.38 €</span>
                        </div>
                        <div class="cart-buttons">
                            <a href="{{asset('checkout')}}" class="btn-check-out">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="support-link">
                <a href="#">Services</a>
                <a href="#">Support</a>
            </div>
            <div id="user-info-top" class="user-info pull-right">
                @if(!Auth::check())
                    <div class="dropdown">
                        <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><span>My Account</span></a>
                        <ul class="dropdown-menu mega_dropdown" role="menu">
                            <li><a href="{{ route(CLIENT_LOGIN) }}">Login</a></li>
                            <li><a href="{{ route(CLIENT_REGISTER) }}">Register</a></li>
                        </ul>
                    </div>
                @else
                    <div class="dropdown">
                        <a class="current-open" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false" href="#"><span>{{ Auth::user()->name }}</span></a>
                        <ul class="dropdown-menu mega_dropdown" role="menu">
                            <li><a href="{{ route(CLIENT_LOGOUT) }}">Logout</a></li>
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!--/.top-header -->
    <!-- MAIN HEADER -->
    <div id="main-header">
        <div class="container main-header">
            <div class="row">
                <div class="col-xs-12 col-sm-3 logo">
                    <a href="{{asset('homepage')}}"><img alt="Kute Shop" src="assets-home/data/option7/logo.png" /></a>
                </div>
                <div id="main-menu" class="col-sm-12 col-md-9 main-menu">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <a class="navbar-brand" href="#">MENU</a>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="{{asset('homepage')}}">Home</a></li>
                                    <li class="dropdown">
                                        <a href="category.html" class="dropdown-toggle" data-toggle="dropdown">Fashion</a>
                                        <ul class="dropdown-menu mega_dropdown" role="menu" style="width: 830px;">
                                            <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="img_container">
                                                        <a href="#">
                                                            <img class="img-responsive" src="assets-home/data/men.png" alt="sport">
                                                        </a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="#">MEN'S</a>
                                                    </li>
                                                    <li class="link_container"><a href="#">Skirts</a></li>
                                                    <li class="link_container"><a href="#">Jackets</a></li>
                                                    <li class="link_container"><a href="#">Tops</a></li>
                                                    <li class="link_container"><a href="#">Scarves</a></li>
                                                    <li class="link_container"><a href="#">Pants</a></li>
                                                </ul>
                                            </li>
                                            <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="img_container">
                                                        <a href="#">
                                                            <img class="img-responsive" src="assets-home/data/women.png" alt="sport">
                                                        </a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="#">WOMEN'S</a>
                                                    </li>
                                                    <li class="link_container"><a href="#">Skirts</a></li>
                                                    <li class="link_container"><a href="#">Jackets</a></li>
                                                    <li class="link_container"><a href="#">Tops</a></li>
                                                    <li class="link_container"><a href="#">Scarves</a></li>
                                                    <li class="link_container"><a href="#">Pants</a></li>
                                                </ul>
                                            </li>
                                            <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="img_container">
                                                        <a href="#">
                                                            <img class="img-responsive" src="assets-home/data/kid.png" alt="sport">
                                                        </a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="#">Kids</a>
                                                    </li>
                                                    <li class="link_container"><a href="#">Shoes</a></li>
                                                    <li class="link_container"><a href="#">Clothing</a></li>
                                                    <li class="link_container"><a href="#">Tops</a></li>
                                                    <li class="link_container"><a href="#">Scarves</a></li>
                                                    <li class="link_container"><a href="#">Accessories</a></li>
                                                </ul>
                                            </li>
                                            <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="img_container">
                                                        <a href="#">
                                                            <img class="img-responsive" src="assets-home/data/trending.png" alt="sport">
                                                        </a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="#">TRENDING</a>
                                                    </li>
                                                    <li class="link_container"><a href="#">Men's Clothing</a></li>
                                                    <li class="link_container"><a href="#">Kid's Clothing</a></li>
                                                    <li class="link_container"><a href="#">Women's Clothing</a></li>
                                                    <li class="link_container"><a href="#">Accessories</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="category.html" class="dropdown-toggle" data-toggle="dropdown">Sports<span class="notify notify-right">new</span></a>

                                    </li>
                                    <li class="dropdown">
                                        <a href="category.html" class="dropdown-toggle" data-toggle="dropdown">Foods</a>
                                        <ul class="mega_dropdown dropdown-menu" style="width: 830px;">
                                            <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="link_container group_header">
                                                        <a href="#">Asian</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Vietnamese Pho</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Noodles</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Seafood</a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="#">Sausages</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Meat Dishes</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Desserts</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Tops</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Tops</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="link_container group_header">
                                                        <a href="#">European</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Greek Potatoes</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Famous Spaghetti</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Famous Spaghetti</a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="#">Chicken</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Italian Pizza</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">French Cakes</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Tops</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Tops</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="link_container group_header">
                                                        <a href="#">FAST</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Hamberger</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Pizza</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Noodles</a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="#">Sandwich</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Salad</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Paste</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Tops</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Tops</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="img_container">
                                                        <img src="assets-home/data/banner-topmenu.jpg" alt="Banner">
                                                    </li>
                                                </ul>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="category.html" class="dropdown-toggle" data-toggle="dropdown">Digital</a>
                                        <ul class="dropdown-menu container-fluid">
                                            <li class="block-container">
                                                <ul class="block">
                                                    <li class="link_container"><a href="#">Mobile</a></li>
                                                    <li class="link_container"><a href="#">Tablets</a></li>
                                                    <li class="link_container"><a href="#">Laptop</a></li>
                                                    <li class="link_container"><a href="#">Memory Cards</a></li>
                                                    <li class="link_container"><a href="#">Accessories</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="{{asset('contact')}}">Contact</a></li>
                                    <li><a href="{{asset('about')}}">About</a></li>
                                    <li><a href="{{asset('blogs')}}">Blog</a></li>
                                </ul>
                            </div><!--/.nav-collapse -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- END MANIN HEADER -->
    <div class="service-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="item">
                        <a href="#">
                            <img src="assets-home/data/option7/s1.png" alt="Service">
                            <span>Worldwide Delivery</span>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="item">
                        <a href="#">
                            <img src="assets-home/data/option7/s2.png" alt="Service">
                            <span>24/7 Help Center</span>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="item">
                        <a href="#">
                            <img src="assets-home/data/option7/s3.png" alt="Service">
                            <span>shop with confidence</span>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="item">
                        <a href="#">
                            <img src="assets-home/data/option7/s4.png" alt="Service">
                            <span>Safe Payment</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @yield('top-menu')
</div>
<!-- end header-->

{{--<div class="container">--}}
    @yield('content')
{{--</div>--}}


<!-- Footer -->
<footer id="footer2">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="footer-logo">
                        <a href="#"><img src="assets-home/data/option7/logo2.png" alt="Logo"></a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="footer-menu">
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Affiliates</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Privacy Plocy</a></li>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3">
                    <div class="form-newsletter">
                        <input placeholder="Please enter your email" class="form-newsletter-input" type="text">
                        <button class="form-newsletter-button">OK</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer paralax-->
    <div class="footer-row">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="widget-container widget-contact-info">
                        <h3 class="widget-title">Infomation</h3>
                        <div class="widget-body">
                            <ul>
                                <li><a class="location" href="#"><span class="address">Address:</span>2046 Blue Spruce Lane Laurel, tetxac, Orton Tolanto, Canada</a></li>
                                <li><a class="phone" href="#"><span>Phone:</span>0200 410-369-3920</a></li>
                                <li><a class="mobile" href="#"><span>Hotline:</span> 090 999 8686</a></li>
                                <li><a class="email" href="#"><span>Email:</span>nfo@kutethemes.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-2">
                    <div class="widget-container">
                        <h3 class="widget-title">COMPANY</h3>
                        <div class="widget-body">
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Affiliate Program</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-2">
                    <div class="widget-container">
                        <h3 class="widget-title">my account</h3>
                        <div class="widget-body">
                            <ul>
                                <li><a href="#">My Orders</a></li>
                                <li><a href="#">My Credit Slips</a></li>
                                <li><a href="#">My Addresses</a></li>
                                <li><a href="#">My Personal Info</a></li>
                                <li><a href="#">Specials</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-2">
                    <div class="widget-container">
                        <h3 class="widget-title">SUPPORT</h3>
                        <div class="widget-body">
                            <ul>
                                <li><a href="#">Payments</a></li>
                                <li><a href="#">Saved Cards</a></li>
                                <li><a href="#">Shipping Free</a></li>
                                <li><a href="#">Cancellation</a></li>
                                <li><a href="#">Support Online</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="widget-container">
                        <h3 class="widget-title">Let's Socialize</h3>
                        <div class="widget-body">
                            <div class="footer-social">
                                <ul>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                    <li><a class="vk" href="#"><i class="fa fa-vk"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="widget-container">
                        <h3 class="widget-title">payment</h3>
                        <div class="widget-body">
                            <img src="assets-home/data/option7/payment.png" alt="Payment">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-wapper">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="footer-coppyright">
                            Copyright © 2015 KuteShop. All Rights Reserved. Designed by: KuteThemes
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ./footer paralax-->
</footer>

<a href="#" class="scroll_top" title="Scroll to Top" style="display: inline;">Scroll</a>
<!-- Script-->
<script type="text/javascript" src="{{asset('assets-home/lib/jquery/jquery-1.11.2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets-home/lib/bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets-home/lib/select2/js/select2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets-home/lib/jquery.bxslider/jquery.bxslider.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets-home/lib/owl.carousel/owl.carousel.min.js')}}"></script>
<!-- COUNTDOWN -->
<script type="text/javascript" src="{{asset('assets-home/lib/countdown/jquery.plugin.js')}}"></script>
<script type="text/javascript" src="{{asset('assets-home/lib/countdown/jquery.countdown.js')}}"></script>
<!-- ./COUNTDOWN -->
<script type="text/javascript" src="{{asset('assets-home/js/jquery.actual.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets-home/js/theme-script.js')}}"></script>
<script type="text/javascript" src="{{asset('assets-home/js/option4.js')}}"></script>
<script type="text/javascript" src="{{asset('assets-home/lib/jquery-ui/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets-home/js/jquery.actual.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets-home/js/theme-script.js')}}"></script>
<script type="text/javascript" src="{{asset('assets-home/lib/jquery.elevatezoom.js')}}"></script>
<script type="text/javascript" src="{{asset('assets-home/lib/fancyBox/jquery.fancybox.js')}}"></script>
<!-- Main JS-->
<script src="{{ asset('dist/js/main.min.js') }}"></script>
<script src="{{ asset('dist/js/custom.min.js') }}"></script>
@yield('script')
<script>
    jQuery(document).ready(function () {
        jQuery('#open-list-cate').click(function () {
            jQuery('#list-cate').slideToggle(250);
        })
    })

</script>

</body>

</html>
