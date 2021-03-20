<!DOCTYPE html>
<html dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    
    <title>مجال ستور </title>
    
    <!-- Stylesheets -->

        <link href="{{ asset('home_file/css/material-design-iconic-font.css')}}" rel="stylesheet">
        <link href="{{ asset('home_file/css/font-awesome.css')}}" rel="stylesheet">
        <link href="{{ asset('home_file/css/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{ asset('home_file/css/owl.theme.default.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css">
        <link href="{{ asset('home_file/css/animate.css')}}" rel="stylesheet" type="text/css" />

    @if (app()->getLocale() == 'ar')

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.rtl.min.css" integrity="sha384-4dNpRvNX0c/TdYEbYup8qbjvjaMrgUPh+g4I03CnNtANuv+VAvPL6LqdwzZKV38G" crossorigin="anonymous">
        <link href="{{ asset('home_file/styleRTL.css')}}" rel="stylesheet">
    
    @else
        <link href="{{ asset('home_file/css/bootstrap.min.css')}}" rel="stylesheet">
        
    
        <link href="{{ asset('home_file/css/style.css')}}" rel="stylesheet">
    @endif
    <!-- Responsive -->
    <link href="{{ asset('home_file/css/responsive.css')}}" rel="stylesheet">
    
    
    <script src="{{ asset('home_file/js/jquery-3.2.1.min.js')}}"></script>
</head>
<body>
    <div class="mobile-menu">
        <div class="menu-mobile">
            <div class="brand-area">
                <a href="#">
                    <img src="{{ asset('home_file/images/logo.svg')}}">
                </a>
            </div>
            <div class="mmenu">
                <ul>
                    <li class="dropdown">
                        <a href="product-page.html" data-toggle="dropdown"><img src="{{ asset('home_file/images/ecommerce.svg')}}" /><span>متاجر رقمية</span></a>
                        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                            <li><a href="#">بلاستيشن</a></li>
                            <li><a href="#">اكس بوكس</a></li>
                            <li><a href="#">ستيم</a></li>
                            <li><a href="#">ببجي</a></li>
                            <li><a href="#">كول اوف ديتي</a></li>
                            <li><a href="#">ورلد أوف وار كرافت</a></li>
                            <li><a href="#">فورتناينت</a></li>
                            <li><a href="#">أبيكس لينجدز</a></li>
                            <li><a href="#">فري فاير</a></li>
                            <li><a href="#">رن سكيب</a></li>
                        </ul>
                    </li>
                    <li class="dropdown active">
                        <a href="product-page.html" data-toggle="dropdown"><img src="{{ asset('home_file/images/Gaming-platforms.svg')}}" /><span>منصات ألعاب</span></a>
                        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                            <li><a href="#">بلاستيشن</a></li>
                            <li><a href="#">اكس بوكس</a></li>
                            <li><a href="#">ستيم</a></li>
                            <li><a href="#">ببجي</a></li>
                            <li><a href="#">كول اوف ديتي</a></li>
                            <li><a href="#">ورلد أوف وار كرافت</a></li>
                            <li><a href="#">فورتناينت</a></li>
                            <li><a href="#">أبيكس لينجدز</a></li>
                            <li><a href="#">فري فاير</a></li>
                            <li><a href="#">رن سكيب</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=""><img src="{{ asset('home_file/images/sd-card.svg')}}" /><span>بطاقات إتصالات</span></a>
                    </li>
                    <li>
                        <a href="product-page.html"><img src="{{ asset('home_file/images/sim-card.svg')}}" /><span>بطاقات بيانات</span></a>
                    </li>
                    <li>
                        <a href="product-page.html"><img src="{{ asset('home_file/images/shop-card.png')}}" /><span>بطاقات تسوق</span></a>
                    </li>
                    <li>
                        <a href="product-page.html"><img src="{{ asset('home_file/images/nfc.svg')}}" /><span>خدمات وإشتراكات</span></a>
                    </li>
                    <li class="login-btn">
                        <img src="{{ asset('home_file/images/icon-user.svg')}}" alt="" />
                        <a data-toggle="modal" data-target="#exampleModal">تسجيل الدخول</a>
                        <a data-toggle="modal" data-target="#exampleModal">انشاء حساب</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="m-overlay"></div>
    </div>
    <!--mobile-menu-->
    
    <div class="main-wrapper">
    
    @include('layouts.home.include._header')
    <!--header-->
        
    @yield('content')

    <!--section_download_app-->
                
    @include('layouts.home.include._footer') 
        
    </div>
    <!--main-wrapper--> 
    <script src="{{ asset('home_file/js/popper.min.js')}}"></script>
    <script src="{{ asset('home_file/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('home_file/js/owl.carousel.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>
    <script src="{{ asset('home_file/js/wow.js')}}"></script>
    <script src="{{ asset('home_file/js/script.js')}}"></script>
    
    <script>
        new WOW().init();
    </script>
    
</body>
</html> 