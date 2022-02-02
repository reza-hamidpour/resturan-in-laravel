<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>قالب رایگان سایت رستوران Bueno :: دریافت شده از وب روبیک</title>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="rtl">
<!-- Preloader -->
<div class="preloader d-flex align-items-center justify-content-center">
    <div class="preloader-content">
        <h3>در حال بارگزاری..</h3>
        <div id="cooking">
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div id="area">
                <div id="sides">
                    <div id="pan"></div>
                    <div id="handle"></div>
                </div>
                <div id="pancake">
                    <div id="pastry"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ##### Header Area Start ##### -->
<header class="header-area">

    <!-- Logo Area -->
    <div class="logo-area">
        <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
    </div>

    <!-- Navbar Area -->
    <div class="bueno-main-menu" id="sticker">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="buenoNav">

                    <!-- Toggler -->
                    <div id="toggler"><img src="{{ asset('img/core-img/toggler.png') }}" alt=""></div>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="index.html">صفحه نخست</a></li>
                                <li><a href="#">درباره ما</a></li>
                                <li><a href="#">منو غذا</a>
                                    <ul class="dropdown">
                                        <li><a href="index.html">ایرانی</a></li>
                                        <li><a href="catagory.html">سنتی</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">دستورالعمل ها</a>
                                    <div class="megamenu">
                                        <ul class="single-mega cn-col-4">
                                            <li><a href="#">- قارچ</a></li>
                                            <li><a href="#">- نان</a></li>
                                            <li><a href="#">- صبحانه</a></li>
                                            <li><a href="#">- گوشیت</a></li>
                                            <li><a href="#">- فست فود</a></li>
                                            <li><a href="#">- سالاد</a></li>
                                            <li><a href="#">- سوپ</a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li><a href="#">- قارچ</a></li>
                                            <li><a href="#">- نان</a></li>
                                            <li><a href="#">- صبحانه</a></li>
                                            <li><a href="#">- گوشیت</a></li>
                                            <li><a href="#">- فست فود</a></li>
                                            <li><a href="#">- سالاد</a></li>
                                            <li><a href="#">- سوپ</a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li><a href="#">- قارچ</a></li>
                                            <li><a href="#">- نان</a></li>
                                            <li><a href="#">- صبحانه</a></li>
                                            <li><a href="#">- گوشیت</a></li>
                                            <li><a href="#">- فست فود</a></li>
                                            <li><a href="#">- سالاد</a></li>
                                            <li><a href="#">- سوپ</a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li><a href="#">- قارچ</a></li>
                                            <li><a href="#">- نان</a></li>
                                            <li><a href="#">- صبحانه</a></li>
                                            <li><a href="#">- گوشیت</a></li>
                                            <li><a href="#">- فست فود</a></li>
                                            <li><a href="#">- سالاد</a></li>
                                            <li><a href="#">- سوپ</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="single-post.html">بلاگ</a></li>
                                <li><a href="contact.html">تماس با ما</a></li>
                            </ul>

                            <!-- Login/Register -->
                            <div class="login-area">
                                <a href="{{ route('login') }}">ورود / عضویت</a>
                            </div>
                        </div>
                        <!-- Nav End -->

                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->
@yield('content')
<!-- ##### Footer Area Start ##### -->
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-7">
                <!-- Footer Nav -->
                <div class="footer-nav">
                    <ul>
                        <li class="active"><a href="#">صفحه نخست</a></li>
                        <li><a href="#">دستورالعمل ها</a></li>
                        <li><a href="#">درباره ما</a></li>
                        <li><a href="#">بلاگ</a></li>
                        <li><a href="#">تماس با ما</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-sm-5">
                <!-- Copywrite Text -->
                <p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                <p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        فارسی و راست چین شده با <i class="fa fa-heart-o" aria-hidden="true"></i> توسط <a href="http://webrubik.com" target="_blank"> Webrubik.com</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </div>
</footer>
<!-- ##### Footer Area Start ##### -->

<!-- ##### All Javascript Script ##### -->
<!-- jQuery-2.2.4 js -->
<script src="{{ asset('js/jquery/jquery-2.2.4.min.js') }}"></script>
<!-- Popper js -->
<script src="{{ asset('js/bootstrap/popper.min.js') }}"></script>
<!-- Bootstrap js -->
<script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
<!-- All Plugins js -->
<script src="{{ asset('js/plugins/plugins.js') }}"></script>
<!-- Custom js -->
<script  src="{{ asset('js/scripts.js') }}"></script>
</body><!-- This template has been downloaded from Webrubik.com -->
</html>
