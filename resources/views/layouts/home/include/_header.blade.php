        <header id="header">
            <div class="header-top">
                <div class="container">
                    <ul class="social-media topHmenu-right clearfix">
                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                        <li><a href=""><i class="fa fa-instagram"></i></a></li>
                        <li><a href=""><i class="fa fa-rss"></i></a></li>
                    </ul>
                    <ul class="topHmenu-left clearfix">
                        <li class="dropdown">
                            <a href="product-page.html" data-toggle="dropdown">اللغة</a>
                            <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <li>
                                        <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                            {{ $properties['native'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="product-page.html" data-toggle="dropdown">العملة</a>
                            <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                                <li><a href="#">ريال سعودي </a></li>
                                <li><a href="#">دولار أمريكي</a></li>
                                <li><a href="#">دينار كويتي</a></li>
                                <li><a href="#">درهم إماراتي</a></li>
                                <li><a href="#">دولار أمريكي</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="header-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <a href="index.html" class="logo-site">
                                <img src="{{ asset('home_file/images/logo.svg')}}" alt="" class="img-responsive">
                            </a>
                        </div>
                        <div class="col-md-5 col-sm-5">
                            <form class="form-search-head" action="#">
                                <input type="text" class="form-control" placeholder="بحث عن بطاقة">
                                <button type="submit" class="btn btn-submit-search"><i class="zmdi zmdi-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="clearfix">
                                <ul class="menu-purches clearfix">
                                    <li class="cart-purches-btn dropdown dropdown-cart-shooping">
                                        <a data-toggle="">
                                            <div class="title-basket">
                                                <p>سلتي</p>
                                                <small>0.00$</small>
                                            </div>
                                            <figure><img src="{{ asset('home_file/images/icon-shopping.svg')}}" /><span>3</span></figure>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="image-product">
                                                    <img src="{{ asset('home_file/images/prouduct.png')}}" alt="">
                                                </div>
                                                <div class="title-cart">
                                                    <p><a href="#"> تذكرة العاب بلستيشن احترافي</a></p>
                                                    <div class="price-counter">
                                                        <strong>50$</strong>
                                                        <div class="quantity-item">
                                                            <div class="quantity">
                                                                <input type="text" name="count-quat1" class="count-quat" value="1">
                                                                <div class="btn button-count inc jsQuantityIncrease"><i class="fa fa-plus" aria-hidden="true"></i></div>
                                                                <div class="btn button-count dec jsQuantityDecrease disabled" minimum="1"><i class="fa fa-minus" aria-hidden="true"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image-product">
                                                    <img src="{{ asset('home_file/images/prouduct.png')}}" alt="">
                                                </div>
                                                <div class="title-cart">
                                                    <p><a href="#"> تذكرة العاب بلستيشن احترافي</a></p>
                                                    <div class="price-counter">
                                                        <strong>50$</strong>
                                                        <div class="quantity-item">
                                                            <div class="quantity">
                                                                <input type="text" name="count-quat1" class="count-quat" value="1">
                                                                <div class="btn button-count inc jsQuantityIncrease"><i class="fa fa-plus" aria-hidden="true"></i></div>
                                                                <div class="btn button-count dec jsQuantityDecrease disabled" minimum="1"><i class="fa fa-minus" aria-hidden="true"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <div class="total-price">
                                                <p>الاجمالي:</p>
                                                <strong>$ 130.50</strong>
                                            </div>
                                            <div class="option-cart">
                                                <a href="cart.html" class="btn-site-bg"><small>تفاصيل السلة</small></a>
                                                <a href="checkout.html" class="btn-site outline"><small>شراء الان</small></a>
                                            </div>
                                        </ul>
                                    </li>
                                    <li class="login-btn">
                                        <img src="{{ asset('home_file/images/icon-user.svg')}}" alt="" />
                                        <a data-toggle="modal" data-target="#exampleModal">تسجيل الدخول</a>
                                        <a data-toggle="modal" data-target="#exampleModal">انشاء حساب</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="container">
                    <div class="hb-right clearfix">
                        <a href="#menu" class="hamburger is-closed">
                            <span class="hamb-top"></span>
                            <span class="hamb-middle"></span>
                            <span class="hamb-bottom"></span>
                        </a>
                    </div>
                    <div class="clearfix">
                        <ul class="menu-st main-menu clearfix">
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
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!--header-->
        
        <section class="section_home">
            <div class="container">
                <div class="home_txt">
                    <div class="sec-title">
                        <h2>تسوق بأمان</h2>
                        <span class="shape-site">مع مجال ستور</span>
                        <p>هذا نص تجريبي لاختبار شكل و حجم النصوص و طريقة عرضهاi في هذا المكان و حجم و لون الخط
حيث يتم التحكم في هذا النص وامكانية تغييرة في اي وقت عن طريق ادارة الموقع . يتم اضافة</p>
                        <a class="btn-site" href=""><span>الشراء السريع</span></a>
                    </div>
                    <figure><img src="{{ asset('home_file/images/slide-home.svg')}}" /></figure>
                </div>
            </div>
        </section>
        <!--section_home-->